<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        Paginator::useBootstrap();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        // Schema::defaultStringLength(191);
        // Passport::routes();
        // $this->commands([
        //     InstallCommand::class,
        //     ClientCommand::class,
        //     KeysCommand::class,
        // ]);

        // View::composer('dashboard.*', function ($view) {
        //     $notifications = Notification::where('user_id',Auth::user()->id)
        //                                 ->orderBy('id','DESC')
        //                                 ->get();
        //     $view->with([
        //         'notifications'=> $notifications,
        //     ]);
        // });

        // Passport::tokensExpireIn(now()->addDays(15));
        // Passport::refreshTokensExpireIn(now()->addDays(30));
        // Passport::personalAccessTokensExpireIn(now()->addMonths(6));
    }
}
