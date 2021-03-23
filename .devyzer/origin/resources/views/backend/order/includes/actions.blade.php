@if (
    $order->trashed()
)
    <x-utils.form-button
        :action="route('admin.order.restore', $order)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.order.permanently-delete', $order)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.order.show', $order)"/>
    <x-utils.edit-button :href="route('admin.order.edit', $order)"/>
    <x-utils.delete-button :href="route('admin.order.destroy', $order)"/>
@endif