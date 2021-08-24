<x-app-layout>
    <div class="card mb-5 mb-xl-10">
        <div class="card-body pt-9 pb-0">
            <div class="table-responsive">
                <table class="table table-striped gy-7 gs-7">
                    <thead>
                        <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
                            <th>{{__('Site Name')}}</th>
                            <th>{{__('PHP')}}</th>
                            <th>{{__('Group')}}</th>
                            <th>{{__('Storage')}}</th>
                            <th>{{__('Bandwidth')}}</th>
                            <th>{{__('Visits')}}</th>
                            <th>{{__('Actions')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p class="fw-bolder">My Main Enviroment</p>
                            </td>
                            <td></td>
                            <td></td>
                            <td>100 MB</td>
                            <td>0 Bytes</td>
                            <td>2</td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="row">
                                    <div class="col-md-2 col-xs-4"><p class="badge badge-primary">PRD</p></div>
                                    <div class="col-md-10 col-xs-8">
                                        <p class="text-gray-900">portfolioenv</p>
                                        <a href="#">alias.steercampaign.com</a>
                                    </div>
                                </div>                            
                            </td>
                            <td></td>
                            <td></td>
                            <td>100 MB</td>
                            <td>0 Bytes</td>
                            <td>2</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-active-light-primary rotate"
                                data-kt-menu-trigger="click"
                                data-kt-menu-placement="bottom-start"
                                data-kt-menu-flip="top-start">
                                <span class="svg-icon svg-icon-5 rotate-180 ms-3 me-0"><i class="bi bi-three-dots"></i></span>
                            </button>                            
    <!--begin::Menu-->
    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-200px py-4"
        data-kt-menu="true">
        <!--begin::Menu item-->
        <div class="menu-item px-3">
            <a href="#" class="menu-link px-3">
                Backup
            </a>
        </div>
        <!--end::Menu item-->
    
        <!--begin::Menu item-->
        <div class="menu-item px-3">
            <a href="#" class="menu-link px-3">
                Purge Cache
            </a>
        </div>
        <!--end::Menu item-->
    
        <!--begin::Menu item-->
        <div class="menu-item px-3">
            <a href="#" class="menu-link px-3">
                Seamless login
            </a>
        </div>
        <!--end::Menu item-->
    
        <!--begin::Menu item-->
        <div class="menu-item px-3">
            <a href="#" class="menu-link px-3">
                Delete Enviroment
            </a>
        </div>
        <!--end::Menu item-->
    </div>
    <!--end::Menu-->
    
                            </td>
                        </tr>
                     </tbody>
                </table>                
            </div>

        </div>
    </div>    
</x-app-layout>