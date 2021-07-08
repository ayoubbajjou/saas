<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <ul class="nav nav-pills flex-column mb-auto pt-4">
        <li class="text-center">
            <img src="{{ Auth::user()->profile_photo_url }}" class="rounded-circle img-thumbnail">
            @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
              <h5 class="mt-0 mb-0 mt-2 text-center white">{{  Auth::user()->currentTeam->name }}</h5>
            @else
              <h5 class="mt-0 mb-0 mt-2 text-center white">{{ Auth::user()->name }}</h5>
            @endif
            <div class="dropdown">
              <a class="dropdown-toggle white" data-bs-toggle="dropdown" aria-expanded="false">
                Switch Account
              </a>
              <ul class="dropdown-menu" aria-labelledby="accounts">
                <li><a class="dropdown-item" href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">{{ __('Team Settings') }}</a></li>
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                  <li><hr class="dropdown-divider"></li>
                  @foreach (Auth::user()->allTeams() as $team)
                    @if($team->id == Auth::user()->currentTeam->id)
                      @continue
                    @endif
                    <li><a class="dropdown-item" href="#">{{ $team->name }}</a></li>
                  @endforeach                
                @endif
                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="{{ route('teams.create') }}">{{ __('Create New Team') }}</a></li>
                @endcan

              </ul>
            </div>
            
            <hr>
        </li>
    </ul>      
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('sites.index') }}">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file" aria-hidden="true"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
              Sites
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/billing')}}">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart" aria-hidden="true"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
              Billing
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>