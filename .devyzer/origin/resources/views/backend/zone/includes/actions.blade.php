@if (
    $zone->trashed()
)
    <x-utils.form-button
        :action="route('admin.zone.restore', $zone)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.zone.permanently-delete', $zone)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.zone.show', $zone)"/>
    <x-utils.edit-button :href="route('admin.zone.edit', $zone)"/>
    <x-utils.delete-button :href="route('admin.zone.destroy', $zone)"/>
@endif