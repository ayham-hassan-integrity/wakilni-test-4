@if (
    $permission->trashed()
)
    <x-utils.form-button
        :action="route('admin.permission.restore', $permission)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.permission.permanently-delete', $permission)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.permission.show', $permission)"/>
    <x-utils.edit-button :href="route('admin.permission.edit', $permission)"/>
    <x-utils.delete-button :href="route('admin.permission.destroy', $permission)"/>
@endif