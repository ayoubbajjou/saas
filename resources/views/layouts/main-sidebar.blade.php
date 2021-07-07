
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                        
                        <li>
                        <a class="text-center">
                        <img src="{{ Auth::user()->profile_photo_url }}" class="rounded-circle img-thumbnail">
                    </a>

                      
                                    <h5 class="mt-0 mb-0 text-center" style="color: #fff">{{ Auth::user()->name }}</h5>

                                    <a class="text-center link" style="color:#fff" href="#"> <i class="fa fa-external-link"></i> Switch Account</a>
                        <div class="dropdown-divider"></div>

                    </li>


                    <li> <a href="{{ route('sites.index') }}"> <i class="fa fa-sitemap" aria-hidden="true"></i> Sites </a>   </li>
                        
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard">
                            <div class="pull-left"> <i class="fa fa-braille" aria-hidden="true"></i> <span class="right-nav-text"> Billing</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="dashboard" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="index.html">Dashboard 01</a> </li>
                            <li> <a href="index-02.html">Dashboard 02</a> </li>
                            
                        </ul>
                    </li>
                    <!-- menu title -->
                    {{-- <li class="pl-4 mt-10 mb-10 font-medium text-muted menu-title">Components </li> --}}
                
                </ul>
            </div>
        </div>
    </div>

        <!-- Left Sidebar End-->

        <!--=================================
