<div data-simplebar class="sidebar-menu-scroll">

<!--- Sidemenu -->
<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">


        

        @auth('web')
            @if (auth()->check()) @if (auth()->user()->type == "admin" ) 

            <li>
                <a href="{{route('user.index')}}" class=" waves-effect">
                    <i class="ri-calendar-2-line"></i>
                    <span>Пользователи</span>
                </a>
            </li>
            @endif @endif

            <li>
                <a href="{{route('courier.index')}}" class=" waves-effect">
                    <i class="ri-calendar-2-line"></i>
                    <span>Курьеры</span>
                </a>
            </li>
        @endauth
        
        <li>
            <a href="{{route('parcel.index')}}" class=" waves-effect">
                <i class="ri-calendar-2-line"></i>
                <span>Посылки</span>
            </a>
        </li>



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