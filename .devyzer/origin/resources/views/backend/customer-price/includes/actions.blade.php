@if (
    $customerprice->trashed()
)
    <x-utils.form-button
        :action="route('admin.customerprice.restore', $customerprice)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.customerprice.permanently-delete', $customerprice)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.customerprice.show', $customerprice)"/>
    <x-utils.edit-button :href="route('admin.customerprice.edit', $customerprice)"/>
    <x-utils.delete-button :href="route('admin.customerprice.destroy', $customerprice)"/>
@endif