    <nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
        <a class="navbar-brand" href="#">{{trans('messages.Proyecto')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <ul class="navbar-nav ml-auto">
                    @if(Auth::user() == "")
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" id="navbarDropdownMenuLink-4" href="{{route('login')}}" aria-haspopup="true" aria-expanded="true">
                            <i class="fas fa-user"></i> {{trans('messages.login')}} </a>
                        @elseif(Auth::user()->user_type_id == 1)
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="{{route('users.index')}}">
                            <i class="fas fa-users-cog"></i>{{trans('messages.admin_admins')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="{{route('manageplayers')}}">
                            <i class="fas fa-cogs"></i> {{trans('messages.admin_jugadores')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="{{route('teams.index')}}">
                            <i class="fas fa-cogs"></i> {{trans('messages.admin_equipos')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="{{route('competitions.index')}}">
                            <i class="fas fa-cogs"></i> {{trans('messages.admin_competiciones')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="{{route('match.index')}}">
                            <i class="fas fa-cogs"></i> {{trans('messages.admin_calendario')}}</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <i class="fas fa-user"></i> {{Auth::user()->name}} </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
{{--                            <i class="dropdown-item waves-effect waves-light" href="#"><i class="fas fa-users-cog"></i>{{trans('messages.admin_admins')}}</i>--}}
{{--                            <i class="dropdown-item waves-effect waves-light" href="#"><i class="fas fa-cog"></i>{{trans('messages.admin_equipos')}}</i>--}}
{{--                            <i class="dropdown-item waves-effect waves-light" href="#"><i class="fas fa-cog"></i>{{trans('messages.admin_competiciones')}}</i>--}}
{{--                            <i class="dropdown-item waves-effect waves-light" href="#"><i class="fas fa-cog"></i>{{trans('messages.admin_calendario')}}</i>--}}
                            <a href="{{route('logout')}}"><i class="dropdown-item waves-effect waves-light" href="#"><i class="fas fa-sign-out-alt"></i>{{trans('messages.cerrarsesion')}}</i></a>
                        </div>
                        @elseif(Auth::user()->user_type_id ==2)
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="{{route('users.index')}}">
                            <i class="fas fa-cogs"></i> {{trans('messages.Admin_users')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="{{route('teams.index')}}">
                            <i class="fas fa-cogs"></i> {{trans('messages.admin_equipos')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="{{route('manageplayers')}}">
                            <i class="fas fa-cogs"></i> {{trans('messages.admin_jugadores')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="{{route('competitions.index')}}">
                            <i class="fas fa-cogs"></i> {{trans('messages.admin_competiciones')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="{{route('match.index')}}">
                            <i class="fas fa-cogs"></i> {{trans('messages.admin_calendario')}}</a>
                    </li>
                <!-- lang -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <i class="fas fa-language"></i> {{trans('messages.idiomas')}}</a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-info">
                            <a class="dropdown-item waves-effect waves-light" href="setlocale/en">{{trans('messages.en')}}</a>
                            <a class="dropdown-item waves-effect waves-light" href="setlocale/es">{{trans('messages.es')}}</a>
                            <a class="dropdown-item waves-effect waves-light" href="setlocale/ca">{{trans('messages.ca')}}</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <i class="fas fa-user"></i> {{Auth::user()->name}} </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                            {{--                            <i class="dropdown-item waves-effect waves-light" href="#"><i class="fas fa-users-cog"></i>{{trans('messages.admin_admins')}}</i>--}}
                            {{--                            <i class="dropdown-item waves-effect waves-light" href="#"><i class="fas fa-cog"></i>{{trans('messages.admin_equipos')}}</i>--}}
                            {{--                            <i class="dropdown-item waves-effect waves-light" href="#"><i class="fas fa-cog"></i>{{trans('messages.admin_competiciones')}}</i>--}}
                            {{--                            <i class="dropdown-item waves-effect waves-light" href="#"><i class="fas fa-cog"></i>{{trans('messages.admin_calendario')}}</i>--}}
                            <a href="{{route('logout')}}"><i class="dropdown-item waves-effect waves-light" href="#"><i class="fas fa-sign-out-alt"></i>{{trans('messages.cerrarsesion')}}</i></a>
                        </div>
                        @elseif(Auth::user()->user_type_id==3)
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="#contacto">
                            <i class="fas fa-envelope"></i> {{trans('messages.contacto')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="{{route('dashboard')}}">
                            <i class="fas fa-cogs"></i> {{trans('messages.configuracion')}}</a>
                    </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="fas fa-user"></i> {{Auth::user()->name}} </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                                    {{--                            <i class="dropdown-item waves-effect waves-light" href="#"><i class="fas fa-users-cog"></i>{{trans('messages.admin_admins')}}</i>--}}
                                    {{--                            <i class="dropdown-item waves-effect waves-light" href="#"><i class="fas fa-cog"></i>{{trans('messages.admin_equipos')}}</i>--}}
                                    {{--                            <i class="dropdown-item waves-effect waves-light" href="#"><i class="fas fa-cog"></i>{{trans('messages.admin_competiciones')}}</i>--}}
                                    {{--                            <i class="dropdown-item waves-effect waves-light" href="#"><i class="fas fa-cog"></i>{{trans('messages.admin_calendario')}}</i>--}}
                                    <a href="{{route('logout')}}"><i class="dropdown-item waves-effect waves-light" href="#"><i class="fas fa-sign-out-alt"></i>{{trans('messages.cerrarsesion')}}</i></a>
                                </div>
                            </li>
                @endif

            </ul>
        </div>
    </nav>
