@if (
    $collection->trashed()
)
    <x-utils.form-button
        :action="route('admin.collection.restore', $collection)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.collection.permanently-delete', $collection)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.collection.show', $collection)"/>
    <x-utils.edit-button :href="route('admin.collection.edit', $collection)"/>
    <x-utils.delete-button :href="route('admin.collection.destroy', $collection)"/>
@endif