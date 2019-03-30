<?php

namespace Diegonella\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Diegonella\Modules\Commands\CommandMakeCommand;
use Diegonella\Modules\Commands\ControllerMakeCommand;
use Diegonella\Modules\Commands\DisableCommand;
use Diegonella\Modules\Commands\DumpCommand;
use Diegonella\Modules\Commands\EnableCommand;
use Diegonella\Modules\Commands\EventMakeCommand;
use Diegonella\Modules\Commands\FactoryMakeCommand;
use Diegonella\Modules\Commands\InstallCommand;
use Diegonella\Modules\Commands\JobMakeCommand;
use Diegonella\Modules\Commands\ListCommand;
use Diegonella\Modules\Commands\ListenerMakeCommand;
use Diegonella\Modules\Commands\MailMakeCommand;
use Diegonella\Modules\Commands\MiddlewareMakeCommand;
use Diegonella\Modules\Commands\MigrateCommand;
use Diegonella\Modules\Commands\MigrateRefreshCommand;
use Diegonella\Modules\Commands\MigrateResetCommand;
use Diegonella\Modules\Commands\MigrateRollbackCommand;
use Diegonella\Modules\Commands\MigrateStatusCommand;
use Diegonella\Modules\Commands\MigrationMakeCommand;
use Diegonella\Modules\Commands\ModelMakeCommand;
use Diegonella\Modules\Commands\ModuleMakeCommand;
use Diegonella\Modules\Commands\NotificationMakeCommand;
use Diegonella\Modules\Commands\PolicyMakeCommand;
use Diegonella\Modules\Commands\ProviderMakeCommand;
use Diegonella\Modules\Commands\PublishCommand;
use Diegonella\Modules\Commands\PublishConfigurationCommand;
use Diegonella\Modules\Commands\PublishMigrationCommand;
use Diegonella\Modules\Commands\PublishTranslationCommand;
use Diegonella\Modules\Commands\RequestMakeCommand;
use Diegonella\Modules\Commands\ResourceMakeCommand;
use Diegonella\Modules\Commands\RouteProviderMakeCommand;
use Diegonella\Modules\Commands\RuleMakeCommand;
use Diegonella\Modules\Commands\SeedCommand;
use Diegonella\Modules\Commands\SeedMakeCommand;
use Diegonella\Modules\Commands\SetupCommand;
use Diegonella\Modules\Commands\TestMakeCommand;
use Diegonella\Modules\Commands\UnUseCommand;
use Diegonella\Modules\Commands\UpdateCommand;
use Diegonella\Modules\Commands\UseCommand;

class ConsoleServiceProvider extends ServiceProvider
{
    protected $defer = false;

    /**
     * The available commands
     *
     * @var array
     */
    protected $commands = [
        CommandMakeCommand::class,
        ControllerMakeCommand::class,
        DisableCommand::class,
        DumpCommand::class,
        EnableCommand::class,
        EventMakeCommand::class,
        JobMakeCommand::class,
        ListenerMakeCommand::class,
        MailMakeCommand::class,
        MiddlewareMakeCommand::class,
        NotificationMakeCommand::class,
        ProviderMakeCommand::class,
        RouteProviderMakeCommand::class,
        InstallCommand::class,
        ListCommand::class,
        ModuleMakeCommand::class,
        FactoryMakeCommand::class,
        PolicyMakeCommand::class,
        RequestMakeCommand::class,
        RuleMakeCommand::class,
        MigrateCommand::class,
        MigrateRefreshCommand::class,
        MigrateResetCommand::class,
        MigrateRollbackCommand::class,
        MigrateStatusCommand::class,
        MigrationMakeCommand::class,
        ModelMakeCommand::class,
        PublishCommand::class,
        PublishConfigurationCommand::class,
        PublishMigrationCommand::class,
        PublishTranslationCommand::class,
        SeedCommand::class,
        SeedMakeCommand::class,
        SetupCommand::class,
        UnUseCommand::class,
        UpdateCommand::class,
        UseCommand::class,
        ResourceMakeCommand::class,
        TestMakeCommand::class,
    ];

    /**
     * Register the commands.
     */
    public function register()
    {
        $this->commands($this->commands);
    }

    /**
     * @return array
     */
    public function provides()
    {
        $provides = $this->commands;

        return $provides;
    }
}
