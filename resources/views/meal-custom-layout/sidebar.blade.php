<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="">
                <img alt="image" src="{{ asset('assets/default/DJL-Construction_Dark.png') }}" class="header-logo" style="height: 60px"/>
{{--                <span class="logo-name">{{ config('app.name') }}</span>--}}
            </a>
        </div>

{{--        <ul class="sidebar-menu">--}}
{{--            <li class="menu-header">Main</li>--}}
{{--            @if(auth()->user()->is_client)--}}
{{--                <li class="dropdown {{ Route::is('dashboard*') ? 'active' : '' }}">--}}
{{--                    <a href="{{ route('dashboard.index') }}" class="nav-link">--}}
{{--                        <i data-feather="monitor"></i>--}}
{{--                        <span>Dashboard</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            @else--}}
{{--                <li class="dropdown {{ Route::is('dashboard*') && !Route::is('dashboard.client-index') ? 'active' : '' }}">--}}
{{--                    <a href="{{ route('dashboard.index') }}" class="nav-link">--}}
{{--                        <i data-feather="monitor"></i>--}}
{{--                        <span>Dashboard</span>--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li class="dropdown {{ Route::is('client*') ? 'active' : '' }}">--}}
{{--                    <a href="" class="menu-toggle nav-link has-dropdown">--}}
{{--                        <i data-feather="briefcase"></i>--}}
{{--                        <span>Client</span>--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu">--}}
{{--                        <li class="{{ Route::is('client.index') ? 'active' : '' }}"><a class="nav-link" href="{{ route('client.index') }}">Clients List</a></li>--}}
{{--                        <li class="{{ Route::is('client.create') ? 'active' : '' }}"><a class="nav-link" href="{{ route('client.create') }}">Create Client</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="dropdown {{ Route::is('project*') ? 'active' : '' }}">--}}
{{--                    <a href="" class="menu-toggle nav-link has-dropdown">--}}
{{--                        <i data-feather="briefcase"></i>--}}
{{--                        <span>Project</span>--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu">--}}
{{--                        <li class="{{ Route::is('project.index') ? 'active' : '' }}"><a class="nav-link" href="{{ route('project.index') }}">Projects List</a></li>--}}
{{--                        <li class="{{ Route::is('project.create') ? 'active' : '' }}"><a class="nav-link" href="{{ route('project.create') }}">Create Project</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="dropdown {{ Route::is('dashboard.client-index') ? 'active' : '' }}">--}}
{{--                    <a href="{{ route('dashboard.client-index') }}" class="nav-link">--}}
{{--                        <i data-feather="monitor"></i>--}}
{{--                        <span>Project Dashboard</span>--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li class="dropdown {{ Route::is('settings*') ? 'active' : '' }}">--}}
{{--                    <a href="" class="menu-toggle nav-link has-dropdown">--}}
{{--                        <i data-feather="briefcase"></i>--}}
{{--                        <span>Settings</span>--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu">--}}
{{--                        <li class="{{ Route::is('settings.task.show') ? 'active' : '' }}">--}}
{{--                            <a class="nav-link" href="{{ route('settings.task.show') }}">Default Tasks</a>--}}
{{--                        </li>--}}
{{--                        <li class="{{ Route::is('settings.payment.show') ? 'active' : '' }}">--}}
{{--                            <a class="nav-link" href="{{ route('settings.payment.show') }}">Default Payments</a>--}}
{{--                        </li>--}}
{{--                        <li class="{{ Route::is('settings.inspection.show') ? 'active' : '' }}">--}}
{{--                            <a class="nav-link" href="{{ route('settings.inspection.show') }}">Default Inspections</a>--}}
{{--                        </li>--}}
{{--                        <li class="{{ Route::is('settings.element') ? 'active' : '' }}">--}}
{{--                            <a class="nav-link" href="{{ route('settings.element') }}">Client Dashboard Settings</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                        <li class="{{ Route::is('outlook.configuration') ? 'active' : '' }}">--}}
{{--                        <a class="nav-link" href="{{ route('outlook.configuration') }}">Outlook Configuration</a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </li>--}}
{{--            @endif--}}


{{--            <li class="dropdown {{ Route::is('task*') ? 'active' : '' }}">--}}
{{--                <a href="" class="menu-toggle nav-link has-dropdown">--}}
{{--                    <i data-feather="briefcase"></i>--}}
{{--                    <span>Task</span>--}}
{{--                </a>--}}
{{--                <ul class="dropdown-menu">--}}
{{--                    <li class="{{ Route::is('task.index') ? 'active' : '' }}"><a class="nav-link" href="{{ route('task.index') }}">Tasks List</a></li>--}}
{{--                    <li class="{{ Route::is('task.create') ? 'active' : '' }}"><a class="nav-link" href="{{ route('task.create') }}">Create Task</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--        </ul>--}}
    </aside>
</div>
