@if (
    $user->trashed()
)
    <x-utils.form-button
        :action="route('admin.user.restore', $user)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.user.permanently-delete', $user)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.user.show', $user)"/>
    <x-utils.edit-button :href="route('admin.user.edit', $user)"/>
    <x-utils.delete-button :href="route('admin.user.destroy', $user)"/>
@endif