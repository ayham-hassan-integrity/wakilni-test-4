@if (
    $device->trashed()
)
    <x-utils.form-button
        :action="route('admin.device.restore', $device)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.device.permanently-delete', $device)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.device.show', $device)"/>
    <x-utils.edit-button :href="route('admin.device.edit', $device)"/>
    <x-utils.delete-button :href="route('admin.device.destroy', $device)"/>
@endif