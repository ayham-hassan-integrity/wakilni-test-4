@if (
    $modelharole->trashed()
)
    <x-utils.form-button
        :action="route('admin.modelharole.restore', $modelharole)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.modelharole.permanently-delete', $modelharole)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.modelharole.show', $modelharole)"/>
    <x-utils.edit-button :href="route('admin.modelharole.edit', $modelharole)"/>
    <x-utils.delete-button :href="route('admin.modelharole.destroy', $modelharole)"/>
@endif