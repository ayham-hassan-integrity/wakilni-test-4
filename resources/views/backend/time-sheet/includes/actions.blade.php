@if (
    $timesheet->trashed()
)
    <x-utils.form-button
        :action="route('admin.timesheet.restore', $timesheet)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.timesheet.permanently-delete', $timesheet)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.timesheet.show', $timesheet)"/>
    <x-utils.edit-button :href="route('admin.timesheet.edit', $timesheet)"/>
    <x-utils.delete-button :href="route('admin.timesheet.destroy', $timesheet)"/>
@endif