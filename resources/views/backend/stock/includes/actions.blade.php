@if (
    $stock->trashed()
)
    <x-utils.form-button
        :action="route('admin.stock.restore', $stock)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.stock.permanently-delete', $stock)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.stock.show', $stock)"/>
    <x-utils.edit-button :href="route('admin.stock.edit', $stock)"/>
    <x-utils.delete-button :href="route('admin.stock.destroy', $stock)"/>
@endif