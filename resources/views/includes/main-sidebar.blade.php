<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>

                <li class="active">
                    <a href="{{route('admin.index')}}"><img src="{{asset('styles/assets/img/icons/dashboard.svg')}}" alt="img"><span> Dashboard</span> </a>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{asset('styles/assets/img/icons/settings.svg')}}" alt="img"><span> Settings</span> <span class="menu-arrow"></span></a>
                    <ul>
                        @role('super admin')
                            @canany('Permission access','Permission add','Permission edit','Permission delete')
                                {{--=====================permmissions link =============--}}
                                <li>
                                    <a class=" {{ Route::currentRouteNamed('admin.permissions.index') ? 'active' : '' }}"
                                        href="{{ route('admin.permissions.index') }}">

                                        <span>Permissions</span>
                                    </a>
                                </li>
                                {{--=====================end permissions link =============--}}
                            @endcanany
                            @canany('Role access','Role add','Role edit','Role delete')
                                {{--=====================roles list link =============--}}
                                <li>
                                    <a class=" {{ Route::currentRouteNamed('admin.roles.index') ? 'active' : '' }}"
                                        href="{{ route('admin.roles.index') }}">

                                        <span>Roles </span>
                                    </a>
                                </li>
                                {{--=====================end roles link =============--}}
                                {{--=====================user list link =============--}}
                                <li>
                                    <a class=" {{ Route::currentRouteNamed('admin.members.show') ? 'active' : '' }}"
                                        href="{{ route('admin.members.show') }}">

                                        <span>Users</span>
                                    </a>
                                </li>
                                {{--=====================end user list link =============--}}
                            @endcanany
                        @endrole

                        {{--===================== user profile link =============--}}
                        <li>
                            <a class="{{ Route::currentRouteNamed('admin.index.edit') ? 'active' : '' }}"
                                href="{{ route('admin.index.edit', Auth::user()->uuid) }}">
                                <span>Profile </span>
                            </a>
                        </li>
                        {{--=====================end user profile link =============--}}
                    </ul>
                </li>
                {{--=====================end lectures link =============--}}
                @can('Lectures Create')
                    <li>
                        <a class="{{ Route::currentRouteNamed('admin.lectures.index') ? 'active' : '' }}"
                            href="{{ route('admin.lectures.index') }}">
                            <img src="{{asset('styles/assets/img/icons/dash2.svg')}}" alt="img">
                            <span>Lectures </span>
                        </a>
                    </li>
                @endcan
                {{--=====================end lectures link =============--}}
                {{--================= messenger link ====================--}}
                <li class="{{ Route::currentRouteNamed('chatify') ? 'active' : '' }}">
                    <a href="{{ route('chatify') }}"><img src="{{asset('styles/assets/img/icons/mail.svg')}}" alt="img"><span> Messenger</span> </a>
                </li>
                {{--=================end messenger link ====================--}}
                {{--================= programme link ====================--}}
                @canany('Programme access', 'Programme edit', 'Programme create', 'Programme delete')
                    <li class="{{ Route::currentRouteNamed('programe.index') ? 'active' : '' }}">
                        <a href="{{ route('programe.index') }}"><img src="{{asset('styles/assets/img/icons/product.svg')}}" alt="img"><span> Programmes</span> </a>
                    </li>
                @endcan
                {{--================= end programme link ====================--}}
                {{--================= schollars link ====================--}}
                @canany('Schollar access', 'Schollar edit', 'Schollar create', 'Schollar delete')
                    <li class="{{ Route::currentRouteNamed('schollar.index') ? 'active' : '' }}">
                        <a href="{{ route('schollar.index') }}"><img src="{{asset('styles/assets/img/icons/users1.svg')}}" alt="img"><span> Schollars</span> </a>
                    </li>
                @endcan
                {{--================== end schollars link ====================--}}
                {{--================== audios link ====================--}}
                <li class="{{ Route::currentRouteNamed('audios.index') ? 'active' : '' }}">
                    <a href="{{ route('audios.index') }}"><img src="{{asset('styles/assets/img/icons/users1.svg')}}" alt="img"><span> Audios</span> </a>
                </li>
                {{--================== end audios link ====================--}}
                {{--======================= logout link ===================--}}
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ Storage::url(Auth::user()->profile) }}" class="rounded-circle" alt="img"><span> {{ Auth::user()->name }}</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li>  <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                         </form>
                        </li>
                    </ul>
                </li>
                {{--======================= logout link ===================--}}

            </ul>
        </div>
    </div>
</div>

