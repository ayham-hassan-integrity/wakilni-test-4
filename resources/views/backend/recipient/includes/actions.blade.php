@if (
    $recipient->trashed()
)
    <x-utils.form-button
        :action="route('admin.recipient.restore', $recipient)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.recipient.permanently-delete', $recipient)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.recipient.show', $recipient)"/>
    <x-utils.edit-button :href="route('admin.recipient.edit', $recipient)"/>
    <x-utils.delete-button :href="route('admin.recipient.destroy', $recipient)"/>
@endif