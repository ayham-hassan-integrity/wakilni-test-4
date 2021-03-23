@if (
    $submission->trashed()
)
    <x-utils.form-button
        :action="route('admin.submission.restore', $submission)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.submission.permanently-delete', $submission)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.submission.show', $submission)"/>
    <x-utils.edit-button :href="route('admin.submission.edit', $submission)"/>
    <x-utils.delete-button :href="route('admin.submission.destroy', $submission)"/>
@endif