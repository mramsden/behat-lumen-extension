<?php

namespace Arisro\Behat\Context;

use Illuminate\Support\Facades\Artisan;

trait Migrator
{

    /**
     * Migrate the database before each scenario.
     *
     * @beforeScenario
     */
    public function migrate()
    {
        Artisan::call('migrate');
    }

}
