@if (
    $currency->trashed()
)
    <x-utils.form-button
        :action="route('admin.currency.restore', $currency)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.currency.permanently-delete', $currency)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.currency.show', $currency)"/>
    <x-utils.edit-button :href="route('admin.currency.edit', $currency)"/>
    <x-utils.delete-button :href="route('admin.currency.destroy', $currency)"/>
@endif