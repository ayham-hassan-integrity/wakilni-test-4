@if (
    $orderdetail->trashed()
)
    <x-utils.form-button
        :action="route('admin.orderdetail.restore', $orderdetail)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.orderdetail.permanently-delete', $orderdetail)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.orderdetail.show', $orderdetail)"/>
    <x-utils.edit-button :href="route('admin.orderdetail.edit', $orderdetail)"/>
    <x-utils.delete-button :href="route('admin.orderdetail.destroy', $orderdetail)"/>
@endif