<html>
    <head>
        <title> @yield('title') </title>
        @include('admin.layouts.head')
    </head>
    <body>
        <div class="menu">
            @include('admin.layouts.menu')
            <div class="clear"></div>
        </div>
        <div class="content">
            <div class="col-md-3">
                @include('admin.layouts.sidebar_left')
            </div>
            <div class="col-md-6">
                @yield('main_content') 
            </div>
            <div class="col-md-3">
                @yield('search_right') 
               <!--@include('admin.layouts.sidebar_right') -->
            </div>
            <div class="clear"></div>
        </div>
    </body>
    
    
</html>
