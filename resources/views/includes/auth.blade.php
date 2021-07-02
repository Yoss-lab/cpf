
                 

                    <!-- Right Side Of Navbar -->
                   
                        <!-- Authentication Links -->
                        @guest
                           <div>
                           <ul>
                                <a  href="{{ route('login') }}">{{ __('Login') }}</a> 
                                </ul>
                            </div>
                            @if (Route::has('register'))
                               <div>
                               <ul>
                                    <a  href="{{ route('register') }}">{{ __('SignUp') }}</a>
                                    </ul>
                                </div>
                            @endif
                        @else

                        <div class="dropdown">
  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  {{ Auth::user()->name }}
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
  <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
  </ul>
</div>



                       

        
                        @endguest
                    
                

             