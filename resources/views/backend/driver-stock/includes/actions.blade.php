@if (
    $driverstock->trashed()
)
    <x-utils.form-button
        :action="route('admin.driverstock.restore', $driverstock)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.driverstock.permanently-delete', $driverstock)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.driverstock.show', $driverstock)"/>
    <x-utils.edit-button :href="route('admin.driverstock.edit', $driverstock)"/>
    <x-utils.delete-button :href="route('admin.driverstock.destroy', $driverstock)"/>
@endif