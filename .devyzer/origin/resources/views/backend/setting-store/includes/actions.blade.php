@if (
    $settingstore->trashed()
)
    <x-utils.form-button
        :action="route('admin.settingstore.restore', $settingstore)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.settingstore.permanently-delete', $settingstore)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.settingstore.show', $settingstore)"/>
    <x-utils.edit-button :href="route('admin.settingstore.edit', $settingstore)"/>
    <x-utils.delete-button :href="route('admin.settingstore.destroy', $settingstore)"/>
@endif