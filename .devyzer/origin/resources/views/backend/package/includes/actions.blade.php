@if (
    $package->trashed()
)
    <x-utils.form-button
        :action="route('admin.package.restore', $package)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.package.permanently-delete', $package)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.package.show', $package)"/>
    <x-utils.edit-button :href="route('admin.package.edit', $package)"/>
    <x-utils.delete-button :href="route('admin.package.destroy', $package)"/>
@endif