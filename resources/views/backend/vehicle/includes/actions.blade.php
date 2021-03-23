@if (
    $vehicle->trashed()
)
    <x-utils.form-button
        :action="route('admin.vehicle.restore', $vehicle)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.vehicle.permanently-delete', $vehicle)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.vehicle.show', $vehicle)"/>
    <x-utils.edit-button :href="route('admin.vehicle.edit', $vehicle)"/>
    <x-utils.delete-button :href="route('admin.vehicle.destroy', $vehicle)"/>
@endif