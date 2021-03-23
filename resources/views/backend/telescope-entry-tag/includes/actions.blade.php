@if (
    $telescopeentrytag->trashed()
)
    <x-utils.form-button
        :action="route('admin.telescopeentrytag.restore', $telescopeentrytag)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.telescopeentrytag.permanently-delete', $telescopeentrytag)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.telescopeentrytag.show', $telescopeentrytag)"/>
    <x-utils.edit-button :href="route('admin.telescopeentrytag.edit', $telescopeentrytag)"/>
    <x-utils.delete-button :href="route('admin.telescopeentrytag.destroy', $telescopeentrytag)"/>
@endif