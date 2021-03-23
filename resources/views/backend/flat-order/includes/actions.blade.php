@if (
    $flatorder->trashed()
)
    <x-utils.form-button
        :action="route('admin.flatorder.restore', $flatorder)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.flatorder.permanently-delete', $flatorder)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.flatorder.show', $flatorder)"/>
    <x-utils.edit-button :href="route('admin.flatorder.edit', $flatorder)"/>
    <x-utils.delete-button :href="route('admin.flatorder.destroy', $flatorder)"/>
@endif