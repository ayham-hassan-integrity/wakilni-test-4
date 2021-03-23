@if (
    $task->trashed()
)
    <x-utils.form-button
        :action="route('admin.task.restore', $task)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.task.permanently-delete', $task)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.task.show', $task)"/>
    <x-utils.edit-button :href="route('admin.task.edit', $task)"/>
    <x-utils.delete-button :href="route('admin.task.destroy', $task)"/>
@endif