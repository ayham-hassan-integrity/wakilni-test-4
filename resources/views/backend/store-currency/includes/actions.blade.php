@if (
    $storecurrency->trashed()
)
    <x-utils.form-button
        :action="route('admin.storecurrency.restore', $storecurrency)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.storecurrency.permanently-delete', $storecurrency)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.storecurrency.show', $storecurrency)"/>
    <x-utils.edit-button :href="route('admin.storecurrency.edit', $storecurrency)"/>
    <x-utils.delete-button :href="route('admin.storecurrency.destroy', $storecurrency)"/>
@endif