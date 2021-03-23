<?php

namespace App\Domains\Migration\Http\Controllers\Backend\Migration;

use App\Http\Controllers\Controller;
use App\Domains\Migration\Models\Migration;
use App\Domains\Migration\Services\MigrationService;

/**
 * Class DeletedMigrationController.
 */
class DeletedMigrationController extends Controller
{
    /**
     * @var MigrationService
     */
    protected $migrationService;

    /**
     * DeletedMigrationController constructor.
     *
     * @param  MigrationService  $migrationService
     */
    public function __construct(MigrationService $migrationService)
    {
        $this->migrationService = $migrationService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.migration.deleted');
    }

    /**
     * @param  Migration  $deletedMigration
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Migration $deletedMigration)
    {
        $this->migrationService->restore($deletedMigration);

        return redirect()->route('admin.migration.index')->withFlashSuccess(__('The  Migrations was successfully restored.'));
    }

    /**
     * @param  Migration  $deletedMigration
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Migration $deletedMigration)
    {
        $this->migrationService->destroy($deletedMigration);

        return redirect()->route('admin.migration.deleted')->withFlashSuccess(__('The  Migrations was permanently deleted.'));
    }
}