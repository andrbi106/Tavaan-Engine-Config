<?php

declare(strict_types=1);

namespace Tavaan\Engine\Config;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Config\Contracts\RepositoryInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * RepositoryServiceProvider — ثبت سرویس‌های موتور Repository.
 */
final class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(RepositoryInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new Repository($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت commandها
        $this->commands[] = \Tavaan\Engine\Config\Console\Config_cacheCommand::class;
        $this->commands[] = \Tavaan\Engine\Config\Console\Config_clearCommand::class;
        $this->commands[] = \Tavaan\Engine\Config\Console\Env_checkCommand::class;

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            RepositoryInterface::class,
        ];
    }
}