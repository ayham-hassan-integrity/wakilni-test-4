@if (
    $migration->trashed()
)
    <x-utils.form-button
        :action="route('admin.migration.restore', $migration)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.migration.permanently-delete', $migration)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.migration.show', $migration)"/>
    <x-utils.edit-button :href="route('admin.migration.edit', $migration)"/>
    <x-utils.delete-button :href="route('admin.migration.destroy', $migration)"/>
@endif