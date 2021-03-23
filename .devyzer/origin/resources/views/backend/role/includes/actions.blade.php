@if (
    $role->trashed()
)
    <x-utils.form-button
        :action="route('admin.role.restore', $role)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.role.permanently-delete', $role)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.role.show', $role)"/>
    <x-utils.edit-button :href="route('admin.role.edit', $role)"/>
    <x-utils.delete-button :href="route('admin.role.destroy', $role)"/>
@endif