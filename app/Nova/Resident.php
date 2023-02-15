<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Http\Requests\NovaRequest;

class Resident extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Resident>
     */
    public static $model = \App\Models\Resident::class;

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
            Text::make("Name", "name"),
            Text::make("Last Name Phone", "lastnamephone"),
            Text::make("Email", "email"),
            Text::make("Address", "address"),
            Text::make("Extcode", "extcode"),
            Text::make("Father Name", "fathername"),
            Date::make("Birthdate", "birthdate")->default("1990-01-01"),
            Number::make("ID Number", "id_number"),
            Text::make("Passport", "passport"),
            Text::make("Gender", "gender"),
            Text::make("Mobile", "mobile"),
            Text::make("Workphone", "workphone"),
            Text::make("Fax Number", "faxnumber"),
            Text::make("Other Phone1", "otherphone1"),
            Text::make("Other Phone2", "otherphone2"),
            Text::make("Email 2", "email2"),
            Text::make("City", "city"),
            Text::make("District", "district"),
            Text::make("Country", "country"),
            Text::make("Postal Code", "postalcode"),
            Text::make("Mail Address1", "mailaddress1"),
            Text::make("Mail Address2", "mailaddress2"),
            Text::make("Mail City", "mailcity"),
            Text::make("Mail District", "maildistrict"),
            Text::make("Mail Country", "mailcountry"),
            Text::make("Mail PostalCode", "mailpostalcode"),
            Text::make("Current Employer", "currentemployer"),
            Text::make("Job Title", "jobtitle"),
            Text::make("Work Address1", "workaddress1"),
            Text::make("Work Address2", "workaddress2"),
            Text::make("Work City", "workcity"),
            Text::make("Work District", "workdistrict"),
            Text::make("Work Country", "workcountry"),
            Text::make("Work PostalCode", "workpostalcode"),
            Text::make("Comments", "comments"),
            Text::make("Emergency Address Country", "emergency_address_country"),
            Text::make("Emergency Address City", "emergency_address_city"),
            Text::make("Emergency Address", "emergency_address"),
            Text::make("Emergency Address PostalCode", "emergency_address_postal_code"),
            Text::make("Emergency Address Phone", "emergency_address_phone"),
            Text::make("Emergency Address Mobile", "emergency_address_mobile"),
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
