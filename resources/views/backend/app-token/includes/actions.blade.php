@if (
    $apptoken->trashed()
)
    <x-utils.form-button
        :action="route('admin.apptoken.restore', $apptoken)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.apptoken.permanently-delete', $apptoken)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.apptoken.show', $apptoken)"/>
    <x-utils.edit-button :href="route('admin.apptoken.edit', $apptoken)"/>
    <x-utils.delete-button :href="route('admin.apptoken.destroy', $apptoken)"/>
@endif