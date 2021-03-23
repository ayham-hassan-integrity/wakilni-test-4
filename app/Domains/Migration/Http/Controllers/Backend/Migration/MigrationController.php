<?php

namespace App\Domains\Migration\Http\Controllers\Backend\Migration;

use App\Http\Controllers\Controller;
use App\Domains\Migration\Models\Migration;
use App\Domains\Migration\Services\MigrationService;
use App\Domains\Migration\Http\Requests\Backend\Migration\DeleteMigrationRequest;
use App\Domains\Migration\Http\Requests\Backend\Migration\EditMigrationRequest;
use App\Domains\Migration\Http\Requests\Backend\Migration\StoreMigrationRequest;
use App\Domains\Migration\Http\Requests\Backend\Migration\UpdateMigrationRequest;

/**
 * Class MigrationController.
 */
class MigrationController extends Controller
{
    /**
     * @var MigrationService
     */
    protected $migrationService;

    /**
     * MigrationController constructor.
     *
     * @param MigrationService $migrationService
     */
    public function __construct(MigrationService $migrationService)
    {
        $this->migrationService = $migrationService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.migration.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.migration.create');
    }

    /**
     * @param StoreMigrationRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreMigrationRequest $request)
    {
        $migration = $this->migrationService->store($request->validated());

        return redirect()->route('admin.migration.show', $migration)->withFlashSuccess(__('The  Migrations was successfully created.'));
    }

    /**
     * @param Migration $migration
     *
     * @return mixed
     */
    public function show(Migration $migration)
    {
        return view('backend.migration.show')
            ->withMigration($migration);
    }

    /**
     * @param EditMigrationRequest $request
     * @param Migration $migration
     *
     * @return mixed
     */
    public function edit(EditMigrationRequest $request, Migration $migration)
    {
        return view('backend.migration.edit')
            ->withMigration($migration);
    }

    /**
     * @param UpdateMigrationRequest $request
     * @param Migration $migration
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateMigrationRequest $request, Migration $migration)
    {
        $this->migrationService->update($migration, $request->validated());

        return redirect()->route('admin.migration.show', $migration)->withFlashSuccess(__('The  Migrations was successfully updated.'));
    }

    /**
     * @param DeleteMigrationRequest $request
     * @param Migration $migration
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteMigrationRequest $request, Migration $migration)
    {
        $this->migrationService->delete($migration);

        return redirect()->route('admin.$migration.deleted')->withFlashSuccess(__('The  Migrations was successfully deleted.'));
    }
}