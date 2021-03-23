<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('img/brand/coreui.svg#full') }}"></use>
        </svg>
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('img/brand/coreui.svg#signet') }}"></use>
        </svg>
    </div><!--c-sidebar-brand-->

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.dashboard')"
                :active="activeClass(Route::is('admin.dashboard'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Dashboard')" />
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.migration.index')"
                :active="activeClass(Route::is('admin.migration.index'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Migration')" />
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.message.index')"
                :active="activeClass(Route::is('admin.message.index'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Message')" />
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.location.index')"
                :active="activeClass(Route::is('admin.location.index'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Location')" />
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.locationlog.index')"
                :active="activeClass(Route::is('admin.locationlog.index'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Locationlog')" />
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.flatorder.index')"
                :active="activeClass(Route::is('admin.flatorder.index'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Flatorder')" />
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.file.index')"
                :active="activeClass(Route::is('admin.file.index'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('File')" />
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.failedjob.index')"
                :active="activeClass(Route::is('admin.failedjob.index'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Failedjob')" />
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.driverzone.index')"
                :active="activeClass(Route::is('admin.driverzone.index'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Driverzone')" />
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.drivervehicle.index')"
                :active="activeClass(Route::is('admin.drivervehicle.index'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Drivervehicle')" />
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.driverstock.index')"
                :active="activeClass(Route::is('admin.driverstock.index'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Driverstock')" />
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.driver.index')"
                :active="activeClass(Route::is('admin.driver.index'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Driver')" />
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.driversubmission.index')"
                :active="activeClass(Route::is('admin.driversubmission.index'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Driversubmission')" />
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.device.index')"
                :active="activeClass(Route::is('admin.device.index'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Device')" />
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.customeroperator.index')"
                :active="activeClass(Route::is('admin.customeroperator.index'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Customeroperator')" />
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.customercurrency.index')"
                :active="activeClass(Route::is('admin.customercurrency.index'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Customercurrency')" />
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.customer.index')"
                :active="activeClass(Route::is('admin.customer.index'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Customer')" />
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.customerprice.index')"
                :active="activeClass(Route::is('admin.customerprice.index'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Customerprice')" />
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.currency.index')"
                :active="activeClass(Route::is('admin.currency.index'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Currency')" />
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.contact.index')"
                :active="activeClass(Route::is('admin.contact.index'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Contact')" />
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.comment.index')"
                :active="activeClass(Route::is('admin.comment.index'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Comment')" />
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.collection.index')"
                :active="activeClass(Route::is('admin.collection.index'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Collection')" />
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.barcode.index')"
                :active="activeClass(Route::is('admin.barcode.index'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Barcode')" />
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.area.index')"
                :active="activeClass(Route::is('admin.area.index'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Area')" />
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.apptoken.index')"
                :active="activeClass(Route::is('admin.apptoken.index'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Apptoken')" />
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.app.index')"
                :active="activeClass(Route::is('admin.app.index'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('App')" />
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.amount.index')"
                :active="activeClass(Route::is('admin.amount.index'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Amount')" />
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.activitylog.index')"
                :active="activeClass(Route::is('admin.activitylog.index'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Activitylog')" />
        </li>

        @if (
            $logged_in_user->hasAllAccess() ||
            (
                $logged_in_user->can('admin.access.user.list') ||
                $logged_in_user->can('admin.access.user.deactivate') ||
                $logged_in_user->can('admin.access.user.reactivate') ||
                $logged_in_user->can('admin.access.user.clear-session') ||
                $logged_in_user->can('admin.access.user.impersonate') ||
                $logged_in_user->can('admin.access.user.change-password')
            )
        )
            <li class="c-sidebar-nav-title">@lang('System')</li>

            <li class="c-sidebar-nav-dropdown {{ activeClass(Route::is('admin.auth.user.*') || Route::is('admin.auth.role.*'), 'c-open c-show') }}">
                <x-utils.link
                    href="#"
                    icon="c-sidebar-nav-icon cil-user"
                    class="c-sidebar-nav-dropdown-toggle"
                    :text="__('Access')" />

                <ul class="c-sidebar-nav-dropdown-items">
                    @if (
                        $logged_in_user->hasAllAccess() ||
                        (
                            $logged_in_user->can('admin.access.user.list') ||
                            $logged_in_user->can('admin.access.user.deactivate') ||
                            $logged_in_user->can('admin.access.user.reactivate') ||
                            $logged_in_user->can('admin.access.user.clear-session') ||
                            $logged_in_user->can('admin.access.user.impersonate') ||
                            $logged_in_user->can('admin.access.user.change-password')
                        )
                    )
                        <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.auth.user.index')"
                                class="c-sidebar-nav-link"
                                :text="__('User Management')"
                                :active="activeClass(Route::is('admin.auth.user.*'), 'c-active')" />
                        </li>
                    @endif

                    @if ($logged_in_user->hasAllAccess())
                        <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.auth.role.index')"
                                class="c-sidebar-nav-link"
                                :text="__('Role Management')"
                                :active="activeClass(Route::is('admin.auth.role.*'), 'c-active')" />
                        </li>
                    @endif
                </ul>
            </li>
        @endif

        @if ($logged_in_user->hasAllAccess())
            <li class="c-sidebar-nav-dropdown">
                <x-utils.link
                    href="#"
                    icon="c-sidebar-nav-icon cil-list"
                    class="c-sidebar-nav-dropdown-toggle"
                    :text="__('Logs')" />

                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item">
                        <x-utils.link
                            :href="route('log-viewer::dashboard')"
                            class="c-sidebar-nav-link"
                            :text="__('Dashboard')" />
                    </li>
                    <li class="c-sidebar-nav-item">
                        <x-utils.link
                            :href="route('log-viewer::logs.list')"
                            class="c-sidebar-nav-link"
                            :text="__('Logs')" />
                    </li>
                </ul>
            </li>
        @endif
    </ul>

    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div><!--sidebar-->
