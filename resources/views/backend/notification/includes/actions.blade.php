@if (
    $notification->trashed()
)
    <x-utils.form-button
        :action="route('admin.notification.restore', $notification)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.notification.permanently-delete', $notification)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.notification.show', $notification)"/>
    <x-utils.edit-button :href="route('admin.notification.edit', $notification)"/>
    <x-utils.delete-button :href="route('admin.notification.destroy', $notification)"/>
@endif