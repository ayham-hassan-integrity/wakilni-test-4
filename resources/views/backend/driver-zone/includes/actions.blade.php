@if (
    $driverzone->trashed()
)
    <x-utils.form-button
        :action="route('admin.driverzone.restore', $driverzone)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.driverzone.permanently-delete', $driverzone)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.driverzone.show', $driverzone)"/>
    <x-utils.edit-button :href="route('admin.driverzone.edit', $driverzone)"/>
    <x-utils.delete-button :href="route('admin.driverzone.destroy', $driverzone)"/>
@endif