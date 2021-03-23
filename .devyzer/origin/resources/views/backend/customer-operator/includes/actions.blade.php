@if (
    $customeroperator->trashed()
)
    <x-utils.form-button
        :action="route('admin.customeroperator.restore', $customeroperator)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.customeroperator.permanently-delete', $customeroperator)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.customeroperator.show', $customeroperator)"/>
    <x-utils.edit-button :href="route('admin.customeroperator.edit', $customeroperator)"/>
    <x-utils.delete-button :href="route('admin.customeroperator.destroy', $customeroperator)"/>
@endif