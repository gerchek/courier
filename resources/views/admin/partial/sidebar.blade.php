<div data-simplebar class="sidebar-menu-scroll">

<!--- Sidemenu -->
<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">

        <li class="menu-title">Apps</li>

        <li>
            <a href="" class=" waves-effect">
                <i class="ri-calendar-2-line"></i>
                <span>Orders</span>
            </a>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-store-2-line"></i>
                <span>City</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="ecommerce-products.html">City detail</a></li>
                <li><a href="ecommerce-products.html">Dubai</a></li>
                <li><a href="ecommerce-product-detail.html">Turkiye</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-layout-3-line"></i>
                <span>Tour</span>
            </a>
            <ul class="sub-menu" aria-expanded="true">
                <li><a href="{{route('detail.index')}}">Tour detail <x-sidebar/></a></li>

                @foreach ($tours as $tour)
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">{{$tour->id}} {{$tour->name}} (1 уровень)</a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">OAE (2 уровень)</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow">Dubai  (3 уровень)</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li>
                                            <a href="javascript: void(0);" class="has-arrow">Tickets (4 уровень)</a>
                                            <ul class="sub-menu" aria-expanded="true">
                                                <li>
                                                    <a href="javascript: void(0);" class="has-arrow">Theme Parks in Dubai (5 уровень)</a>
                                                    <ul class="sub-menu" aria-expanded="true">
                                                        <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
                                                        <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                                        <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                                        <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                                        <li><a href="layouts-preloader.html">Preloader</a></li>
                                                        <li><a href="layouts-colored-sidebar.html">Colored Sidebar</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                @endforeach
                <!-- <li>
                    <a href="javascript: void(0);" class="has-arrow">Asia (1 уровень)</a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">OAE (2 уровень)</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow">Dubai  (3 уровень)</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li>
                                            <a href="javascript: void(0);" class="has-arrow">Tickets (4 уровень)</a>
                                            <ul class="sub-menu" aria-expanded="true">
                                                <li>
                                                    <a href="javascript: void(0);" class="has-arrow">Theme Parks in Dubai (5 уровень)</a>
                                                    <ul class="sub-menu" aria-expanded="true">
                                                        <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
                                                        <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                                        <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                                        <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                                        <li><a href="layouts-preloader.html">Preloader</a></li>
                                                        <li><a href="layouts-colored-sidebar.html">Colored Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                                <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                                <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                                <li><a href="layouts-preloader.html">Preloader</a></li>
                                                <li><a href="layouts-colored-sidebar.html">Colored Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                        <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                        <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                        <li><a href="layouts-preloader.html">Preloader</a></li>
                                        <li><a href="layouts-colored-sidebar.html">Colored Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                <li><a href="layouts-preloader.html">Preloader</a></li>
                                <li><a href="layouts-colored-sidebar.html">Colored Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                        <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                        <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                        <li><a href="layouts-preloader.html">Preloader</a></li>
                        <li><a href="layouts-colored-sidebar.html">Colored Sidebar</a></li>
                    </ul>
                </li> -->

            </ul>
        </li>

        <li>
            <a href="" class=" waves-effect">
                <i class="ri-calendar-2-line"></i>
                <span>Guide</span>
            </a>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-layout-3-line"></i>
                <span>Transfer</span>
            </a>
            <ul class="sub-menu" aria-expanded="true">
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">Asia (1 уровень)</a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">OAE (2 уровень)</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow">Dubai  (3 уровень)</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li>
                                            <a href="javascript: void(0);" class="has-arrow">Tickets (4 уровень)</a>
                                            <ul class="sub-menu" aria-expanded="true">
                                                <li>
                                                    <a href="javascript: void(0);" class="has-arrow">Theme Parks in Dubai (5 уровень)</a>
                                                    <ul class="sub-menu" aria-expanded="true">
                                                        <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
                                                        <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                                        <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                                        <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                                        <li><a href="layouts-preloader.html">Preloader</a></li>
                                                        <li><a href="layouts-colored-sidebar.html">Colored Sidebar</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">Asia (1 уровень)</a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">OAE (2 уровень)</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow">Dubai  (3 уровень)</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li>
                                            <a href="javascript: void(0);" class="has-arrow">Tickets (4 уровень)</a>
                                            <ul class="sub-menu" aria-expanded="true">
                                                <li>
                                                    <a href="javascript: void(0);" class="has-arrow">Theme Parks in Dubai (5 уровень)</a>
                                                    <ul class="sub-menu" aria-expanded="true">
                                                        <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
                                                        <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                                        <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                                        <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                                        <li><a href="layouts-preloader.html">Preloader</a></li>
                                                        <li><a href="layouts-colored-sidebar.html">Colored Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                                <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                                <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                                <li><a href="layouts-preloader.html">Preloader</a></li>
                                                <li><a href="layouts-colored-sidebar.html">Colored Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                        <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                        <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                        <li><a href="layouts-preloader.html">Preloader</a></li>
                                        <li><a href="layouts-colored-sidebar.html">Colored Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                <li><a href="layouts-preloader.html">Preloader</a></li>
                                <li><a href="layouts-colored-sidebar.html">Colored Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                        <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                        <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                        <li><a href="layouts-preloader.html">Preloader</a></li>
                        <li><a href="layouts-colored-sidebar.html">Colored Sidebar</a></li>
                    </ul>
                </li>

            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-store-2-line"></i>
                <span>Blog</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="ecommerce-products.html"> Dubai  (1 уровень)</a></li>
                <li><a href="ecommerce-product-detail.html">Turkiye</a></li>
            </ul>
        </li>


        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-store-2-line"></i>
                <span>Remain</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="ecommerce-products.html">Contact</a></li>
                <li><a href="ecommerce-product-detail.html">Privacy policy</a></li>
                <li><a href="ecommerce-product-detail.html">FAQ</a></li>
                <li><a href="ecommerce-product-detail.html">Company</a></li>
            </ul>
        </li>



        <li>
            <a href="" class=" waves-effect">
                <i class="ri-calendar-2-line"></i>
                <span>Reviews</span>
            </a>
        </li>

        <li>
            <a href="" class=" waves-effect">
                <i class="ri-calendar-2-line"></i>
                <span>Templates</span>
            </a>
        </li>

        <li>
            <a href="" class=" waves-effect">
                <i class="ri-calendar-2-line"></i>
                <span>User</span>
            </a>
        </li>



    </ul>
</div>
<!-- Sidebar -->
</div>
<script>
    var variable_name=document.querySelectorAll('ul.sub-menu');
    for(var i=0;i<variable_name.length;i++){
        console.log(variable_name[i].firstElementChild);
        variable_name[i].firstElementChild.firstElementChild.style.color = '#121314';
        variable_name[i].firstElementChild.firstElementChild.style.fontWeight = 'bold';
    }
</script>