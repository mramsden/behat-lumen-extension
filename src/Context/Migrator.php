<?php

namespace Arisro\Behat\Context;

trait Migrator
{

    /**
     * Migrate the database before each scenario.
     *
     * @beforeScenario
     */
    public function migrate()
    {
        app('Illuminate\Contracts\Console\Kernel')->call('migrate');
    }

}
