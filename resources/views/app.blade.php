<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" class="navbar-horizontal">
    <!--     BEGIN HEAD TAG     -->
       @include('layouts.base.header')
    <!--       END HEAD TAG     -->
    <body>

        <main class="main" id="top">
                <!--     BEGIN TOP NAVBAR TAG     -->  
                @include('layouts.base.menu2')
                <!--     END TOP NAVBAR TAG     -->
                @include('layouts.base.topnavbarbig')
                
                <div class="content">
                    @if (session()->has('success'))
                        <div class="alert alert-outline-success d-flex align-items-center" role="alert">
                            <span class="fas fa-check-circle text-success fs-0 me-3"></span>
                            <p class="mb-0 flex-1">{{session('success')}}</p>
                          
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div id="mainContent">
            
                       @yield('content')
                    
                       @include('layouts.base.contentfooter')   
                    </div>

                </div>
                @include('layouts.base.support_chat')
        </main>
        <!--     BEGIN PAGE FOOTER TAG     --> 
         <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
        @include('layouts.base.footer')
        <!--     BEGIN PAGE FOOTER TAG     --> 
    </body>

</html>
