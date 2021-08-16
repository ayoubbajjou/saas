<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
    <span class="menu-link">
       <span class="menu-icon">
          <!--begin::Svg Icon | path: icons/duotone/General/User.svg-->
          <span class="svg-icon svg-icon-2">
             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                   <polygon points="0 0 24 0 24 24 0 24"></polygon>
                   <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                   <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                </g>
             </svg>
          </span>
          <!--end::Svg Icon-->
       </span>
       <span class="menu-title">{{__('Teams')}}</span><span class="menu-arrow"></span>
    </span>
    <div class="menu-sub menu-sub-accordion menu-active-bg">
        <span class="menu-link">
            <span class="menu-title text-muted">{{ __('Manage Team') }}</span>
        </span>        
        <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
            {{ __('Team Settings') }}
        </x-jet-dropdown-link>        

        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
        <x-jet-dropdown-link href="{{ route('teams.create') }}">
            {{ __('Create New Team') }}
        </x-jet-dropdown-link>
        @endcan        

        <div class="separator"></div>

        <span class="menu-link">
            <span class="menu-title text-muted">{{ __('Switch Team') }}</span>
        </span>        
        @foreach (Auth::user()->allTeams() as $team)
            <x-jet-switchable-team :team="$team" />
        @endforeach

    </div>
 </div>

 <div class="separator my-10"></div>