@if (
    $piggybank->trashed()
)
    <x-utils.form-button
        :action="route('admin.piggybank.restore', $piggybank)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.piggybank.permanently-delete', $piggybank)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.piggybank.show', $piggybank)"/>
    <x-utils.edit-button :href="route('admin.piggybank.edit', $piggybank)"/>
    <x-utils.delete-button :href="route('admin.piggybank.destroy', $piggybank)"/>
@endif