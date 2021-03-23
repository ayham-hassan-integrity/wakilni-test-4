@if (
    $customercurrency->trashed()
)
    <x-utils.form-button
        :action="route('admin.customercurrency.restore', $customercurrency)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.customercurrency.permanently-delete', $customercurrency)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.customercurrency.show', $customercurrency)"/>
    <x-utils.edit-button :href="route('admin.customercurrency.edit', $customercurrency)"/>
    <x-utils.delete-button :href="route('admin.customercurrency.destroy', $customercurrency)"/>
@endif