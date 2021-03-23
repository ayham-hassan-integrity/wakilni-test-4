@if (
    $location->trashed()
)
    <x-utils.form-button
        :action="route('admin.location.restore', $location)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.location.permanently-delete', $location)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.location.show', $location)"/>
    <x-utils.edit-button :href="route('admin.location.edit', $location)"/>
    <x-utils.delete-button :href="route('admin.location.destroy', $location)"/>
@endif