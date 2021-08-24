<!--begin::Toolbar-->
<div class="toolbar" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="{{ theme()->printHtmlClasses('toolbar-container', false) }} d-flex flex-stack">
        @if (theme()->getOption('skin', 'page-title/display') && theme()->getOption('skin', 'header/left') !== 'page-title')
            {{ theme()->getView('skin/page-title/_default') }}
        @endif
		<!--begin::Actions-->
        <div class="d-flex align-items-center py-1">
            <div class="me-4">
            </div>
            @switch(Route::currentRouteName())
            @case('sites.index')
            <div class="d-flex align-items-center">
                <a href="{{route('sites.create')}}" class="btn btn-sm btn-secondary fw-bolder disabled me-4">
                    {{__('Accept Transfer')}}
                </a>

                <a href="{{route('sites.create')}}" class="btn btn-sm btn-primary fw-bolder">
                    {{__('Add Site')}}
                </a>

            </div>
                    
                @break
            @case(2)
                
                @break
            @default
                
        @endswitch


        </div>
		<!--end::Actions-->
    </div>
    <!--end::Container-->
</div>
<!--end::Toolbar-->
