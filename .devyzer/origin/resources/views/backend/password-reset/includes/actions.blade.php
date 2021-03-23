@if (
    $passwordreset->trashed()
)
    <x-utils.form-button
        :action="route('admin.passwordreset.restore', $passwordreset)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.passwordreset.permanently-delete', $passwordreset)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.passwordreset.show', $passwordreset)"/>
    <x-utils.edit-button :href="route('admin.passwordreset.edit', $passwordreset)"/>
    <x-utils.delete-button :href="route('admin.passwordreset.destroy', $passwordreset)"/>
@endif