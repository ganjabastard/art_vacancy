<?php

namespace App\Providers;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\LangController;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('translate', function ($expression) {
            return "<?php echo Helper::getLang($expression); ?>";
        });
        Validator::extend('greater', function($attribute, $value, $parameters)
        {
            $other = Input::get($parameters[0]);

            return isset($other) and intval($value) > intval($other);
        });
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
