@if (
    $payment->trashed()
)
    <x-utils.form-button
        :action="route('admin.payment.restore', $payment)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.payment.permanently-delete', $payment)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.payment.show', $payment)"/>
    <x-utils.edit-button :href="route('admin.payment.edit', $payment)"/>
    <x-utils.delete-button :href="route('admin.payment.destroy', $payment)"/>
@endif