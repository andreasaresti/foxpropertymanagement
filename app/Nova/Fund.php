<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Panel;
use Laravel\Nova\Fields\HasMany;

class Fund extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Fund>
     */
    public static $model = \App\Models\Fund::class;

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
            Panel::make('Fund',[
                ID::make()->sortable(),
                Text::make("Name", "name")->rules("required"),
                BelongsTo::make('Buildings', "Building"),
                Select::make("Type", "type")->options([
                    "owner"=> ["label"=> "Owner", "value"=> "owner"],
                    "tenant"=> ["label"=> "Tenant", "value"=> "tenant"]
                ])->displayUsingLabels(),
                Number::make("Starting Balance", "starting_balance")
            ]),
            Panel::make('Charge Rule',[               
                HasMany::make('Charge Rule', 'charge_rules', ChargeRule::class),
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
