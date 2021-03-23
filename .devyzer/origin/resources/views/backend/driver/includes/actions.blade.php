@if (
    $driver->trashed()
)
    <x-utils.form-button
        :action="route('admin.driver.restore', $driver)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.driver.permanently-delete', $driver)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.driver.show', $driver)"/>
    <x-utils.edit-button :href="route('admin.driver.edit', $driver)"/>
    <x-utils.delete-button :href="route('admin.driver.destroy', $driver)"/>
@endif