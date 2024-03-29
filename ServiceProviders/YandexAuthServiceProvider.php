<?php

namespace Flute\Modules\YandexAuth\ServiceProviders;

use Flute\Core\Support\ModuleServiceProvider;
use Hybridauth\Provider\Yandex;

class YandexAuthServiceProvider extends ModuleServiceProvider
{
    public array $extensions = [];

    public function boot(\DI\Container $container): void
    {
        app()->getLoader()->addPsr4('Hybridauth\\Provider\\', module_path('YandexAuth', 'Hybrid/'));
    }

    public function register(\DI\Container $container): void
    {
    }
}