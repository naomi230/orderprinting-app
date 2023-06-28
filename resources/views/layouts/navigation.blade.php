<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <nav id="navbar" class="navbar"  style="margin-left:1000px;">
        
                

                <div>
                    <ul>
                      <li><a class="nav-link scrollto active" href="{{ url()->current() }}">Order</a></li>
                      <!--<li><a class="nav-link scrollto" href="#about">About</a></li>-->
                      
                      <li><a class="nav-link scrscrolltoollto" href="{{ ('customerExplore')}}">Explore</a></li>
                      
                      <li class="dropdown"><a href="#"><span><img src="assets/img/menu/icon.jpg" style=" height:20px; width:20px;"></span></a>
                        <ul>
                            <li>
                                <a href="#">Notifications</a>
                            </li>
                                                        
                        
                  <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                  </x-responsive-nav-link>

                           </li>
                          <li>
                            <form method="POST" action="{{ route('logout') }}">
                            @csrf
        
                            <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                        </li> 
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </ul>
                </div>
                  </nav><!-- .navbar -->

              

            
            


  

       
              
           
