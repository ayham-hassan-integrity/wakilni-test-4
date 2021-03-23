@if (
    $timezone->trashed()
)
    <x-utils.form-button
        :action="route('admin.timezone.restore', $timezone)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.timezone.permanently-delete', $timezone)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.timezone.show', $timezone)"/>
    <x-utils.edit-button :href="route('admin.timezone.edit', $timezone)"/>
    <x-utils.delete-button :href="route('admin.timezone.destroy', $timezone)"/>
@endif