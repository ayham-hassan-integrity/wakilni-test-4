@if (
    $barcode->trashed()
)
    <x-utils.form-button
        :action="route('admin.barcode.restore', $barcode)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.barcode.permanently-delete', $barcode)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.barcode.show', $barcode)"/>
    <x-utils.edit-button :href="route('admin.barcode.edit', $barcode)"/>
    <x-utils.delete-button :href="route('admin.barcode.destroy', $barcode)"/>
@endif