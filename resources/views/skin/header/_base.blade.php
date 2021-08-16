<!--begin::Header-->
<div id="kt_header" style="" class="header {{ theme()->printHtmlClasses('header', false) }} align-items-stretch" {{ theme()->printHtmlAttributes('header') }}>
	<!--begin::Container-->
	<div class="{{ theme()->printHtmlClasses('header-container', false) }} d-flex align-items-stretch justify-content-between">
		<!--begin::Aside mobile toggle-->
		@if (theme()->getOption('skin', 'aside/display') === true)
			<div class="d-flex align-items-center d-lg-none ms-n3 me-1" data-bs-toggle="tooltip" title="Show aside menu">
				<div class="btn btn-icon btn-active-light-primary" id="kt_aside_mobile_toggle">
					{!! theme()->getSvgIcon("icons/duotone/Text/Menu.svg", "svg-icon-2x mt-1") !!}
				</div>
			</div>
		@endif
		<!--end::Aside mobile toggle-->

		@if (theme()->getOption('skin', 'aside/display') === false)
			<!--begin::Logo-->
			<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
				<a href="{{ theme()->getPageUrl('index') }}">
					<img alt="Logo" src="{{ asset(theme()->getMediaUrlPath() . 'logos/logo-2-dark.svg') }}" class="h-35px"/>
				</a>
			</div>
			<!--end::Logo-->
		@else
			<!--begin::Mobile logo-->
			<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
				<a href="{{ theme()->getPageUrl('index') }}" class="d-lg-none">
					<img alt="Logo" src="{{ asset(theme()->getMediaUrlPath() . 'logos/logo-1-dark.svg') }}" class="h-15px"/>
				</a>
			</div>
			<!--end::Mobile logo-->
		@endif

		<!--begin::Wrapper-->
		<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
			<!--begin::Navbar-->
			@if(theme()->getOption('skin', 'header/left') === 'menu')
				<div class="d-flex align-items-stretch" id="kt_header_nav">
                    {{ theme()->getView('skin/header/_menu') }}
				</div>
			@elseif(theme()->getOption('skin', 'header/left') === 'page-title')
				<div class="d-flex align-items-center" id="kt_header_nav">
					{{ theme()->getView('skin/page-title/_' . theme()->getOption('skin', 'page-title/layout')) }}
				</div>
			@endif
			<!--end::Navbar-->

			<!--begin::Topbar-->
	        <div class="d-flex align-items-stretch flex-shrink-0">
                {{ theme()->getView('skin/topbar/_base') }}
			</div>
			<!--end::Topbar-->
		</div>
		<!--end::Wrapper-->
	</div>
	<!--end::Container-->
</div>
<!--end::Header-->