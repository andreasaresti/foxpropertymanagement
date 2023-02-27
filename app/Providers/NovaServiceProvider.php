<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;

use App\Nova\BankAccount;
use App\Nova\Building;
use App\Nova\ExpenseCategory;
use App\Nova\Resident;
use App\Nova\JobCategory;
use App\Nova\EmailTemplate;
use App\Nova\EmailType;
use App\Nova\ChargeRule;
use App\Nova\ChargeRuleUnitPercentage;
use App\Nova\ChargeRuleExpenseCategory;
use App\Nova\Charge;

use Illuminate\Http\Request;
use Laravel\Nova\Dashboards\Main;
use Laravel\Nova\Menu\Menu;
use Laravel\Nova\Menu\MenuItem;
use Laravel\Nova\Menu\MenuSection;
class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Nova::mainMenu(function (Request $request) {
            return [
                MenuSection::dashboard(Main::class)->icon('chart-bar'),

                MenuSection::make('Building Records', [
                    MenuItem::resource(Building::class),
                    MenuItem::resource(Resident::class),
                ])->icon('user')->collapsable(),

                MenuSection::make('Records', [
                    MenuItem::resource(BankAccount::class),
                    MenuItem::resource(ExpenseCategory::class),
                    MenuItem::resource(ChargeRuleExpenseCategory::class)
                ])->icon('document-text')->collapsable(),

                MenuSection::make('Others', [
                    MenuItem::resource(Charge::class),
                    MenuItem::resource(JobCategory::class),
                    MenuItem::resource(EmailTemplate::class),
                    MenuItem::resource(EmailType::class),
                    MenuItem::resource(ChargeRule::class),
                    MenuItem::resource(ChargeRuleUnitPercentage::class),
                ])->icon('document-text')->collapsable(),
            ];
        });
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            new \App\Nova\Dashboards\Main,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
