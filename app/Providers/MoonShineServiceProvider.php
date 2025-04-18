<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use MoonShine\Contracts\Core\DependencyInjection\ConfiguratorContract;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;
use MoonShine\Laravel\DependencyInjection\MoonShine;
use MoonShine\Laravel\DependencyInjection\MoonShineConfigurator;
use App\MoonShine\Resources\MoonShineUserResource;
use App\MoonShine\Resources\MoonShineUserRoleResource;
use App\MoonShine\Resources\PostsResource;
use App\MoonShine\Resources\PostResource;
use App\MoonShine\Resources\GamesResource;
use App\MoonShine\Resources\TournamentResource;
use App\MoonShine\Resources\TeamResource;
use App\MoonShine\Resources\PlayerResource;
use App\MoonShine\Resources\ClubResource;

class MoonShineServiceProvider extends ServiceProvider
{
    /**
     * @param  MoonShine  $core
     * @param  MoonShineConfigurator  $config
     *
     */
    public function boot(CoreContract $core, ConfiguratorContract $config): void
    {
        // $config->authEnable();

        $core
            ->resources([
                MoonShineUserResource::class,
                MoonShineUserRoleResource::class,
                PostResource::class,
                TeamResource::class,
            ])
            ->pages([
                ...$config->getPages(),
            ])
        ;
    }
}
