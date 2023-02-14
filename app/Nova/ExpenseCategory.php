<?php

namespace App\Nova;
use App\Nova\PropertyType;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;

class ExpenseCategory extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\ExpenseCategory>
     */
    public static $model = \App\Models\ExpenseCategory::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

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
            //Text::make('Name (English)', 'name')->sortable(),
            //Text::make('Name (Greek)', 'name')->sortable(),
            Text::make("Name")->translatable(["en"=> "English", "gk"=>"Greek"])->sortable(),
            BelongsTo::make('Property Type', "PropertyType"),
            Select::make("Applied For", "applied_for")->options([
                "Owner"=> ["label"=> "Owner", "value"=> 1],
                "Tenant"=> ["label"=> "Tenant", "value"=> 2]
            ])->displayUsingLabels(),
            Boolean::make("Building Expense", "building_expense")->default(true),
            Boolean::make("None Building Expense", "non_building_expense")->default(true),
            Boolean::make("Active", "active")->default(true)
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
