<div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
      

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
              <a href="/admin" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

           

           
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">File manager</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{route ('files.index')}}" class="menu-link">
                    <div data-i18n="Notifications">Index</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{route ('files.create')}}" class="menu-link">
                    <div data-i18n="Account">Create</div>
                  </a>
                </li>
                
                
              </ul>
            </li>


            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class=' menu-icon tf-icons bx bxs-image'></i>
                <div data-i18n="Account Settings">Carousel</div>
              </a>
              <ul class="menu-sub">
                
                <li class="menu-item">
                  <a href="{{route ('carousels.index')}}" class="menu-link">
                    <div data-i18n="Notifications">Index</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{route ('carousels.create')}}" class="menu-link">
                    <div data-i18n="Account">Create</div>
                  </a>
                </li>
                
              </ul>
            </li>
         

          
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class=' menu-icon tf-icons bx bx-home'></i>
                <div data-i18n="Account Settings">About</div>
              </a>
              <ul class="menu-sub">
                
                <li class="menu-item">
                  <a href="{{route ('abouts.index')}}" class="menu-link">
                    <div data-i18n="Notifications">Index</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{route ('abouts.create')}}" class="menu-link">
                    <div data-i18n="Account">Create</div>
                  </a>
                </li>
                
              </ul>
            </li>

            
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='menu-icon tf-icons bx bxs-file-image'></i>
                <div data-i18n="Account Settings">Facts</div>
              </a>
              <ul class="menu-sub">
              <li class="menu-item">
                  <a href="{{route ('facts.index')}}" class="menu-link">
                    <div data-i18n="Notifications">Index</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{route ('facts.create')}}" class="menu-link">
                    <div data-i18n="Account">Create</div>
                  </a>
                </li>
                
                
              </ul>
            </li>

             <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='menu-icon tf-icons bx bxs-factory'></i>
                <div data-i18n="Account Settings">Property</div>
              </a>
              <ul class="menu-sub">
                
                <li class="menu-item">
                  <a href="{{route ('properties.index')}}" class="menu-link">
                    <div data-i18n="Notifications">Index</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{route ('properties.create')}}" class="menu-link">
                    <div data-i18n="Account">Create</div>
                  </a>
                </li>
                
              </ul>
            </li>
         
       

            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons fa-solid fa-business-time"></i>
                <div data-i18n="Account Settings">Best deals</div>
              </a>
              <ul class="menu-sub">
                
                <li class="menu-item">
                  <a href="{{route ('best_deals.index')}}" class="menu-link">
                    <div data-i18n="Notifications">Index</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{route ('best_deals.create')}}" class="menu-link">
                    <div data-i18n="Account">Create</div>
                  </a>
                </li>
                
              </ul>
            </li>

            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class=" menu-icon tf-icons fa-solid fa-gears"></i>
                <div data-i18n="Account Settings">Site Config</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{route ('siteconfig.index')}}" class="menu-link">
                    <div data-i18n="Account">Index</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{route ('siteconfig.create')}}" class="menu-link">
                    <div data-i18n="Account">Create</div>
                  </a>
                </li>
                
                
              </ul>
            </li>
         
       
        </aside>