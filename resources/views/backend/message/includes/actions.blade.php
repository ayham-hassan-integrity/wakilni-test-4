@if (
    $message->trashed()
)
    <x-utils.form-button
        :action="route('admin.message.restore', $message)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.message.permanently-delete', $message)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.message.show', $message)"/>
    <x-utils.edit-button :href="route('admin.message.edit', $message)"/>
    <x-utils.delete-button :href="route('admin.message.destroy', $message)"/>
@endif