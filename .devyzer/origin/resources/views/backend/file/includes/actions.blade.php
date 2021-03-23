@if (
    $file->trashed()
)
    <x-utils.form-button
        :action="route('admin.file.restore', $file)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.file.permanently-delete', $file)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.file.show', $file)"/>
    <x-utils.edit-button :href="route('admin.file.edit', $file)"/>
    <x-utils.delete-button :href="route('admin.file.destroy', $file)"/>
@endif