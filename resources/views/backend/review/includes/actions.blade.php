@if (
    $review->trashed()
)
    <x-utils.form-button
        :action="route('admin.review.restore', $review)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.review.permanently-delete', $review)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.review.show', $review)"/>
    <x-utils.edit-button :href="route('admin.review.edit', $review)"/>
    <x-utils.delete-button :href="route('admin.review.destroy', $review)"/>
@endif