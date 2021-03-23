@if (
    $app->trashed()
)
    <x-utils.form-button
        :action="route('admin.app.restore', $app)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.app.permanently-delete', $app)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.app.show', $app)"/>
    <x-utils.edit-button :href="route('admin.app.edit', $app)"/>
    <x-utils.delete-button :href="route('admin.app.destroy', $app)"/>
@endif