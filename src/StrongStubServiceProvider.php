<?php

namespace OpenStrong\StrongAdmin;

use Illuminate\Support\ServiceProvider;

class StrongStubServiceProvider extends ServiceProvider
{

    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $this->commands([
            CurdMakeCommand::class,
            ModelMakeCommand::class,
            WikiMakeCommand::class,
            ViewBladeMakeCommand::class,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function boot()
    {
        //
    }

    /**
     * {@inheritdoc}
     */
    public function provides()
    {
        return [
            CurdMakeCommand::class,
            ModelMakeCommand::class,
            ViewVueMakeCommand::class,
            WikiMakeCommand::class,
            ViewBladeMakeCommand::class,
        ];
    }

}
