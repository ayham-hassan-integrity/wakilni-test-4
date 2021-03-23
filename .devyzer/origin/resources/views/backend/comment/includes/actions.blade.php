@if (
    $comment->trashed()
)
    <x-utils.form-button
        :action="route('admin.comment.restore', $comment)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.comment.permanently-delete', $comment)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.comment.show', $comment)"/>
    <x-utils.edit-button :href="route('admin.comment.edit', $comment)"/>
    <x-utils.delete-button :href="route('admin.comment.destroy', $comment)"/>
@endif