<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\BelongsTo;
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
            ID::make()->sortable(),
            Text::make("Name", "name")->sortable(),
            Text::make("Code", "code")->sortable(),            
            Number::make("Construction Year", "construction_year"),
            Date::make("Management Start Date", "management_start_date"),
            Text::make("Address", "address"),
            Text::make("Postal Code", "postal_code"),
            Text::make("District", "district"),
            Text::make("Country", "country"),
            Text::make("City", "city")->default("Cyprus"),
            BelongsTo::make('Property Type', "PropertyType"),
            BelongsTo::make("Responsible User ID", "responsible", \App\Nova\User::class),
            Boolean::make("Internal Square Metes Payable", "internal_square_metes_payable")->default(true),
            Boolean::make("Covered Veranda Payable", "covered_veranda_payable")->default(true),
            Boolean::make("Mezanne Payable", "mazanne_payable")->default(true),
            Boolean::make("Other Payable", "other_payable")->default(true),
            Boolean::make("Fixed Percentage", "fixed_percentage")->default(false),
            Boolean::make("Active", "active"),

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
