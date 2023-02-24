<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Hasmany;
use Laravel\Nova\Panel;
use Benjacho\BelongsToManyField\BelongsToManyField;
use Laravel\Nova\Http\Requests\NovaRequest;
use Formfeed\Breadcrumbs\Breadcrumbs;

class Unit extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Unit>
     */
    public static $model = \App\Models\Unit::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'number';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
        Panel::make('Unit', [
            ID::make()->sortable(),
            BelongsTo::make("Building")->required(),
            Number::make("Number", "number")->required(),
            Text::make("Floor", "floor"),
            Select::make("Apartment Type", "apartment_type")
                ->options([
                    'basement'=> "Basement",
                    "group_floor"=> "Group Floor",
                    "floor"=> "Floor",
                    "penthouse"=> "Penthouse"
                ]),
            Number::make("Internal Sq Meters", "internal_sq_meters"),
            Number::make("Covered Venanda", "covered_venanda"),
            Number::make("Uncovered Vananda", "uncovered_vananda"),
            Number::make("Mezanee", "mezanee"),
            Text::make("Payable Area", "payable_area"),
            Number::make("Owner Percentage", "owner_percentage"),
            Select::make("Committe", "committe")
                ->options([
                    'no'=> "No",
                    "president"=> "President",
                    "member"=> "Member",
                ])->required(),
            BelongsTo::make("Unit Owner Resident", 'UnitOwnerResident', 'App\Nova\UnitOwnerResident')->searchable()->showCreateRelationButton(),
            BelongsTo::make("Unit Tenant Resident", 'UnitTenantResident', 'App\Nova\UnitTenantResident')->searchable()->showCreateRelationButton(),
        ]),
        Panel::make('Relationship',[               
            HasMany::make('Unit Owner Resident', 'owner_residents', UnitOwnerResident::class),
            HasMany::make('Unit Tenant Resident', 'tenant_residents', UnitTenantResident::class),
        ])];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [
            Breadcrumbs::make($request,$this)
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
