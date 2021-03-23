@if (
    $locationlog->trashed()
)
    <x-utils.form-button
        :action="route('admin.locationlog.restore', $locationlog)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.locationlog.permanently-delete', $locationlog)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.locationlog.show', $locationlog)"/>
    <x-utils.edit-button :href="route('admin.locationlog.edit', $locationlog)"/>
    <x-utils.delete-button :href="route('admin.locationlog.destroy', $locationlog)"/>
@endif