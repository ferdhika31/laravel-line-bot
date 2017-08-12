<?php
namespace Ferdhika31\LaravelLineBot;

use Illuminate\Support\ServiceProvider;

class LineBotServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // register routes
        $this->registerConfigurations();

        // https://github.com/laravolt/indonesia
        $this->app->bind('linebot', function() {
            return new LineBotManager("ko");
        });
        
        // $this->app->bind('linebot', function($app){
            
        //     $config = $this->app['config']->get('services.linebot', []);
        //     // dd($config);
        //     $client = new Client(Arr::get($config, 'guzzle', []));
            
        //     return new LineBotManager("Kiw");
        // });
    }

    /**
     * Register the package configurations
     * @return void
     */
    protected function registerConfigurations()
    {
        $this->mergeConfigFrom(
            $this->packagePath('config/line.php'), 'ferdhika31.linebot'
        );
        $this->publishes([
            $this->packagePath('config/line.php') => config_path('ferdhika31/linebot.php'),
        ], 'config');
    }

    public function provides()
    {
        return ['linebot'];
    }

    /**
     * Loads a path relative to the package base directory
     * @param string $path
     * @return string
     */
    protected function packagePath($path = '')
    {
        return sprintf("%s/../%s", __DIR__, $path);
    }

}