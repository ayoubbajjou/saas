@props(['team', 'component' => 'jet-dropdown-link'])

<x-dynamic-component :component="$component" href="#" onclick="event.preventDefault();
                                                 document.getElementById('switch-team-form-{{ $team->id }}').submit();">

            @if (Auth::user()->isCurrentTeam($team))
                <span class="menu-title">
                    <svg class="mr-1 text-success" width="20" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>                    
                    {{ $team->name }}
                </span>
            @else
                <span class="menu-title">{{ $team->name }}</span>
            @endif
            
        


    <form method="POST" action="{{ route('current-team.update') }}" id="switch-team-form-{{ $team->id }}">
        @method('PUT')
        @csrf

        <!-- Hidden Team ID -->
        <input type="hidden" name="team_id" value="{{ $team->id }}">
    </form>
</x-dynamic-component>


