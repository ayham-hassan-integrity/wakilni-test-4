@if (
    $route->trashed()
)
    <x-utils.form-button
        :action="route('admin.route.restore', $route)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.route.permanently-delete', $route)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.route.show', $route)"/>
    <x-utils.edit-button :href="route('admin.route.edit', $route)"/>
    <x-utils.delete-button :href="route('admin.route.destroy', $route)"/>
@endif