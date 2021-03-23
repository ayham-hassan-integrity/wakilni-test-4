@if (
    $failedjob->trashed()
)
    <x-utils.form-button
        :action="route('admin.failedjob.restore', $failedjob)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.failedjob.permanently-delete', $failedjob)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.failedjob.show', $failedjob)"/>
    <x-utils.edit-button :href="route('admin.failedjob.edit', $failedjob)"/>
    <x-utils.delete-button :href="route('admin.failedjob.destroy', $failedjob)"/>
@endif