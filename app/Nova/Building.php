<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Country;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Panel;
use Laravel\Nova\Http\Requests\NovaRequest;

class Building extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Building>
     */
    public static $model = \App\Models\Building::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

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
            Panel::make('Buildings',[
                ID::make()->sortable(),
                Text::make("Name", "name")->rules("required")->sortable(),
                Text::make("Code", "code")->creationRules('unique:buildings,code')->nullable()->sortable(),            
                Number::make("Construction Year", "construction_year"),
                Date::make("Management Start Date", "management_start_date")->rules("required"),
                Text::make("Address", "address"),
                Text::make("Postal Code", "postal_code"),
                Text::make("City", "city")->rules("required"),
                Text::make("District", "district")->rules("required"),
                Country::make("Country", "country")->default("CY")->rules("required"),
                BelongsTo::make('Property Type', "PropertyType"),
                BelongsTo::make("Responsible User", "Responsible", \App\Nova\User::class),
                Boolean::make("Internal Square Metes Payable", "internal_square_metes_payable")->default(true),
                Boolean::make("Covered Veranda Payable", "covered_veranda_payable")->default(true),
                Boolean::make("Mezanne Payable", "mezanne_payable")->default(true),
                Boolean::make("Other Payable", "other_payable")->default(true),
                Boolean::make("Fixed Percentage", "fixed_percentage")->default(false),
                Boolean::make("Active", "active")->default(true),
            ]),
            Panel::make('Variants',[               
                HasMany::make('Units', 'units', Unit::class),
            ]),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
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
