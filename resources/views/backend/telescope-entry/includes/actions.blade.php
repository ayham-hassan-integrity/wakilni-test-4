@if (
    $telescopeentry->trashed()
)
    <x-utils.form-button
        :action="route('admin.telescopeentry.restore', $telescopeentry)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.telescopeentry.permanently-delete', $telescopeentry)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.telescopeentry.show', $telescopeentry)"/>
    <x-utils.edit-button :href="route('admin.telescopeentry.edit', $telescopeentry)"/>
    <x-utils.delete-button :href="route('admin.telescopeentry.destroy', $telescopeentry)"/>
@endif