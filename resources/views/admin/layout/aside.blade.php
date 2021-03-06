<button class="m-aside-left-close m-aside-left-close--skin-dark" id="m_aside_left_close_btn">
    <i class="la la-close"></i>
</button>

<div id="m_aside_left" class="m-grid__item m-aside-left m-aside-left--skin-dark">
    <div id="m_ver_menu" class="m-aside-menu m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
            <li class="m-menu__item  m-menu__item--active" aria-haspopup="true">
                <a href="{{ url('schedule/users/' . Auth::user()->id) }}" class="m-menu__link ">
                    <i class="m-menu__link-icon flaticon-line-graph"></i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text color-timesheet">{{ trans('Timesheet') }}</span>
                        </span>
                    </span>
                </a>
            </li>

            <li class="m-menu__section ">
                <h4 class="m-menu__section-text">
                    @lang('Manager')
                </h4>
                <i class="m-menu__section-icon flaticon-more-v3"></i>
            </li>
            

           
            @if (Entrust::can(['view-users']))
                <li class="m-menu__item m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                    <a href="javascript:;" class="m-menu__link m-menu__toggle">
                        <i class="m-menu__link-icon flaticon-interface-9"></i>
                        <span class="m-menu__link-text color-manager">
                            @lang('Employees')
                        </span>
                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                    </a>

                    <div class="m-menu__submenu ">
                        <span class="m-menu__arrow"></span>
                        <ul class="m-menu__subnav">
                            <li class="m-menu__item" aria-haspopup="true">
                                <a href="{{ route('users.index') }}" class="m-menu__link ">
                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                        <span></span>
                                    </i>
                                    <span class="m-menu__link-text color-manager">
                                        @lang('Employee List')
                                    </span>
                                </a>
                            </li>

                            <li class="m-menu__item m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                                <a href="{{ route('userdisables.index') }}" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                        <span></span>
                                    </i>
                                    <span class="m-menu__link-text color-manager">
                                        @lang('Employee Disable')
                                    </span>
                                </a>
                            </li>

                            <li class="m-menu__item" aria-haspopup="true">
                                <a href="{{ route('register.user') }}" class="m-menu__link ">
                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                        <span></span>
                                    </i>
                                    <span class="m-menu__link-text color-manager">
                                        @lang('Register Employee')
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif

            @if (Entrust::can(['register-work-schedules']))
                <li class="m-menu__item m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                    <a href="{{ route('register.index') }}" class="m-menu__link m-menu__toggle">
                        <i class="m-menu__link-icon flaticon-interface-9"></i>
                        <span class="m-menu__link-text color-manager">
                            @lang('Register Work Schedule')
                        </span>
                    </a>
                </li>
            @endif


            <li class="m-menu__item m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="{{ route('workspaces.index') }}" class="m-menu__link ">
                    <i class="m-menu__link-icon flaticon-interface-9"></i>
                    <span class="m-menu__link-text color-manager">
                        @if (Entrust::can([
                            'design-diagrams',
                            'view-workspaces',
                            'add-workspaces',
                            'detail-workspaces',
                            'edit-workspaces',
                            'delete-workspaces'
                        ]))
                            @lang('Workspace List')
                        @else
                            @lang('Register Seats')                            
                        @endif
                    </span>
                </a>
            </li>

            @if (Entrust::can(['view-roles', 'view-permissions']))
                <li class="m-menu__item m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                    <a href="javascript:;" class="m-menu__link m-menu__toggle">
                        <i class="m-menu__link-icon flaticon-interface-9"></i>
                        <span class="m-menu__link-text color-manager">
                            @lang('System Management')
                        </span>
                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                    </a>

                    <div class="m-menu__submenu ">
                        <span class="m-menu__arrow"></span>
                        <ul class="m-menu__subnav">

                            @if (Entrust::can(['view-roles']))
                                <li class="m-menu__item" aria-haspopup="true">
                                    <a href="{{ route('roles.index') }}" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text color-manager">
                                            @lang('Role')
                                        </span>
                                    </a>
                                </li>
                            @endif

                            @if (Entrust::can(['view-permissions']))
                                <li class="m-menu__item" aria-haspopup="true">
                                    <a href="{{ route('permissions.index') }}" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text color-manager">
                                            @lang('Permission')
                                        </span>
                                    </a>
                                </li>
                            @endif

                        </ul>
                    </div>
                </li>
            @endif
            <li class="m-menu__item m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="{{ route('report.user') }}" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-interface-9"></i>
                    <span class="m-menu__link-text color-manager">
                        @lang('Report')
                    </span>
                </a>
            </li>

            @if(Entrust::can(['review-report']))
            <li class="m-menu__item m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="{{ route('subjects.index') }}" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-interface-9"></i>
                    <span class="m-menu__link-text color-manager">
                        @lang('Subjects')
                    </span>
                </a>
            </li>

            <li class="m-menu__item m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="{{ route('reviews.index') }}" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-interface-9"></i>
                    <span class="m-menu__link-text color-manager">
                        @lang('Review')
                    </span>
                </a>
            </li>
            @endif

           

            @if (Entrust::can(['view-users']))
                <li class="m-menu__item m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                    <a href="javascript:;" class="m-menu__link m-menu__toggle">
                        <i class="m-menu__link-icon flaticon-interface-9"></i>
                        <span class="m-menu__link-text color-manager">
                            @lang('Setting')
                        </span>
                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                    </a>

                    <div class="m-menu__submenu ">
                        <span class="m-menu__arrow"></span>
                        <ul class="m-menu__subnav">
                            @if (Entrust::can(['view-positions']))
                                <li class="m-menu__item m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                                    <a href="{{ route('positions.index') }}" class="m-menu__link m-menu__toggle">
                                        <i class="m-menu__link-icon flaticon-interface-9"></i>
                                        <span class="m-menu__link-text color-manager">
                                            @lang('Position')
                                        </span>
                                    </a>
                                </li>
                            @endif

                            @if (Entrust::can(['view-programs']))
                                <li class="m-menu__item m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                                    <a href="{{ route('programs.index') }}" class="m-menu__link m-menu__toggle">
                                        <i class="m-menu__link-icon flaticon-interface-9"></i>
                                        <span class="m-menu__link-text color-manager">
                                            @lang('Programs')
                                        </span>
                                    </a>
                                </li>
                            @endif
                            @if (Entrust::can(['view-users']))
                                <li class="m-menu__item m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                                    <a href="{{ route('batches.index') }}" class="m-menu__link m-menu__toggle">
                                        <i class="m-menu__link-icon flaticon-interface-9"></i>
                                        <span class="m-menu__link-text color-manager">
                                            @lang('Batch')
                                        </span>
                                    </a>
                                </li>
                            @endif

                            @if (Entrust::can(['work-schedules']))
                                <li class="m-menu__item m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                                    <a href="{{ route('special-days.create') }}" class="m-menu__link m-menu__toggle">
                                        <i class="m-menu__link-icon flaticon-interface-9"></i>
                                        <span class="m-menu__link-text color-manager">
                                            @lang('Special day')
                                        </span>
                                    </a>
                                </li>
                            @endif
                            @if(Entrust::can('work-schedules'))
                                <li class="m-menu__item m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                                    <a href="{{ route('schedule.index') }}" class="m-menu__link m-menu__toggle">
                                        <i class="m-menu__link-icon flaticon-interface-9"></i>
                                        <span class="m-menu__link-text color-manager">
                                            @lang('Schedule')
                                        </span>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </li>
            @endif

        </ul>
    </div>
</div>
