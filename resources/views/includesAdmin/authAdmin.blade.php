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
                                    <a  href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </ul>
                                </div>
                            @endif
                        @else
                            
                                
                            <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                   
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>

                               
                            
                        @endguest
                    
                
