@if (
    $store->trashed()
)
    <x-utils.form-button
        :action="route('admin.store.restore', $store)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.store.permanently-delete', $store)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.store.show', $store)"/>
    <x-utils.edit-button :href="route('admin.store.edit', $store)"/>
    <x-utils.delete-button :href="route('admin.store.destroy', $store)"/>
@endif