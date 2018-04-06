@extends('layouts.app')



          <li class="xn-icon-button pull-right">
            @if (Route::has('login'))
                <div class="fa fa-desktop">
                    @auth
                    <li class="xn-icon-button pull-right">
                        <a href="{{ url('/home') }}"><span class="fa fa-tasks">Home</span> </a>

                        </li>
                      <!--logout -->
                      <li class="xn-icon-button pull-right">
                                                      <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
                                </li>

                                <!--./logout-->
                    @else
                      <li class="xn-icon-button pull-right">

                        <a href="{{ route('login') }}"> <span class="glyphicon glyphicon-user"></span> </a>

                            </li>
                          <li class="xn-icon-button pull-right">

                        <a href="{{ route('register') }}"> <span class="glyphicon glyphicon-new-window"></span> </a>
                      </li>
                    @endauth
                </div>
            @endif

                    </li>



        <!-- END TOGGLE NAVIGATION -->
    </ul>
    <!-- END X-NAVIGATION VERTICAL -->
