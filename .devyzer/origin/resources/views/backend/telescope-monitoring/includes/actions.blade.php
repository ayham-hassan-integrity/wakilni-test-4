@if (
    $telescopemonitoring->trashed()
)
    <x-utils.form-button
        :action="route('admin.telescopemonitoring.restore', $telescopemonitoring)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.telescopemonitoring.permanently-delete', $telescopemonitoring)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.telescopemonitoring.show', $telescopemonitoring)"/>
    <x-utils.edit-button :href="route('admin.telescopemonitoring.edit', $telescopemonitoring)"/>
    <x-utils.delete-button :href="route('admin.telescopemonitoring.destroy', $telescopemonitoring)"/>
@endif