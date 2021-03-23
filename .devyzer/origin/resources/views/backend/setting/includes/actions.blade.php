@if (
    $setting->trashed()
)
    <x-utils.form-button
        :action="route('admin.setting.restore', $setting)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.setting.permanently-delete', $setting)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.setting.show', $setting)"/>
    <x-utils.edit-button :href="route('admin.setting.edit', $setting)"/>
    <x-utils.delete-button :href="route('admin.setting.destroy', $setting)"/>
@endif