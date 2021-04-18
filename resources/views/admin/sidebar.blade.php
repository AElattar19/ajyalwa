    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img style="object-fit: cover;width: 68px;
    height: 63px;" src="{{url('')}}/assets/img/avatar-7.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">{{auth()->user()->name}}</h2><span>{{auth()->user()->email}}</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="{{ route('admin.home.index') }}" class="brand-small text-center"> <strong>جمعية</strong><strong class="text-primary">أجيال</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          
          <ul id="side-main-menu" class="side-menu list-unstyled"> 

           <li class="{{ Request::is('admin') ? 'active' : '' }}">
            <a href="{{ route('admin.home.index') }}">
             <i class="fa fa-home"></i>الرئيسية 
            </a>
            </li>

           <li class="{{ Request::is('admin/users*') ? 'active' : '' }}">
            <a href="{{ route('admin.users.index') }}">
             <i class="fa fa-user"></i>المستخدمين
          </a>
          </li>

           <li class="{{ Request::is('admin/cities*') ? 'active' : '' }}">
            <a href="{{route('admin.cities.index')}}"> 
              <i class="fa fa-map-marker"></i>المدن
            </a>
          </li>

               <li class="{{ Request::is('admin/countries*') ? 'active' : '' }}">
            <a href="{{route('admin.countries.index')}}"> 
              <i class="fa fa-map-marker"></i>الدول
            </a>
          </li>


               <li class="{{ Request::is('admin/interests*') ? 'active' : '' }}">
            <a href="{{route('admin.interests.index')}}"> 
              <i class="fa fa-map-marker"></i>الاهتمامات
        </a>
          </li>


                    <li class="{{ Request::is('admin/socials*') ? 'active' : '' }}">
            <a href="{{route('admin.socials.index')}}"> 
              <i class="fa fa-map-marker"></i>التواصل الاجتماعي
        </a>
          </li>

    


              <li class="{{ Request::is('admin/contacts*') ? 'active' : '' }}">
                <a href="{{route('admin.contacts.index')}}"> 
                  <i class="fa fa-envelope"></i>الرسائل
                </a>
              </li>
              
            <li class="{{ Request::is('admin/licenses*') ? 'active' : '' }}">
              <a href="{{route('admin.licenses.index')}}">
               <i class="icon-bill"></i>التراخيص
             </a>
            </li>
          </ul>
        </div>

      </div>
    </nav>