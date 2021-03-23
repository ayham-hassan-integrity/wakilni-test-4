@if (
    $office->trashed()
)
    <x-utils.form-button
        :action="route('admin.office.restore', $office)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.office.permanently-delete', $office)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.office.show', $office)"/>
    <x-utils.edit-button :href="route('admin.office.edit', $office)"/>
    <x-utils.delete-button :href="route('admin.office.destroy', $office)"/>
@endif