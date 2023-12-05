<div data-simplebar class="sidebar-menu-scroll">

<!--- Sidemenu -->
<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">

        <!-- <li class="menu-title">Apps</li>

        <li>
            <a href="/ho6" class=" waves-effect">
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
        </li> -->

        


        @if (auth()->check()) @if (auth()->user()->type == "admin" ) 

        <li>
            <a href="{{route('user.index')}}" class=" waves-effect">
                <i class="ri-calendar-2-line"></i>
                <span>Users</span>
            </a>
        </li>
        @endif @endif

        <li>
            <a href="{{route('courier.index')}}" class=" waves-effect">
                <i class="ri-calendar-2-line"></i>
                <span>Couriers</span>
            </a>
        </li>

        <li>
            <a href="{{route('parcel.index')}}" class=" waves-effect">
                <i class="ri-calendar-2-line"></i>
                <span>Parcels</span>
            </a>
        </li>


        <!-- <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-store-2-line"></i>
                <span>Blog</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="ecommerce-products.html"> Dubai  (1 уровень)</a></li>
                <li><a href="ecommerce-product-detail.html">Turkiye</a></li>
            </ul>
        </li> -->


        <!-- <li>
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
            <a href="/hi" class=" waves-effect">
                <i class="ri-calendar-2-line"></i>
                <span>Reviews</span>
            </a>
        </li>

        <li>
            <a href="/hi1" class=" waves-effect">
                <i class="ri-calendar-2-line"></i>
                <span>Templates</span>
            </a>
        </li>

        <li>
            <a href="/hi2" class=" waves-effect">
                <i class="ri-calendar-2-line"></i>
                <span>User</span>
            </a>
        </li> -->



    </ul>
</div>
<!-- Sidebar -->
</div>
<script>
    var variable_name=document.querySelectorAll('ul.sub-menu');
    for(var i=0;i<variable_name.length;i++){
        // console.log(variable_name[i].firstElementChild);
        variable_name[i].firstElementChild.firstElementChild.style.color = '#121314';
        variable_name[i].firstElementChild.firstElementChild.style.fontWeight = 'bold';
    }
</script>