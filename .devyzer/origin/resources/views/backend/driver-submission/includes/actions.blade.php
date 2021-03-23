@if (
    $driversubmission->trashed()
)
    <x-utils.form-button
        :action="route('admin.driversubmission.restore', $driversubmission)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.driversubmission.permanently-delete', $driversubmission)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.driversubmission.show', $driversubmission)"/>
    <x-utils.edit-button :href="route('admin.driversubmission.edit', $driversubmission)"/>
    <x-utils.delete-button :href="route('admin.driversubmission.destroy', $driversubmission)"/>
@endif