@if (
    $activitylog->trashed()
)
    <x-utils.form-button
        :action="route('admin.activitylog.restore', $activitylog)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.activitylog.permanently-delete', $activitylog)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.activitylog.show', $activitylog)"/>
    <x-utils.edit-button :href="route('admin.activitylog.edit', $activitylog)"/>
    <x-utils.delete-button :href="route('admin.activitylog.destroy', $activitylog)"/>
@endif