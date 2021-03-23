@if (
    $drivervehicle->trashed()
)
    <x-utils.form-button
        :action="route('admin.drivervehicle.restore', $drivervehicle)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.drivervehicle.permanently-delete', $drivervehicle)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.drivervehicle.show', $drivervehicle)"/>
    <x-utils.edit-button :href="route('admin.drivervehicle.edit', $drivervehicle)"/>
    <x-utils.delete-button :href="route('admin.drivervehicle.destroy', $drivervehicle)"/>
@endif