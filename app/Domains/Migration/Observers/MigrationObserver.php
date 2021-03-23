<?php

namespace App\Domains\Migration\Observers;

use App\Domains\Migration\Models\Migration;

/**
 * Class MigrationObserver.
 */
class MigrationObserver
{
    /**
     * @param  Migration  $migration
     */
    public function created(Migration $migration): void
    {

    }

    /**
     * @param  Migration  $migration
     */
    public function updated(Migration $migration): void
    {

    }

}
