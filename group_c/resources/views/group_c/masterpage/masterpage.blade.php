<html>
    <head>
        <title> @yield('title') </title>
        @include('group_c.layouts.head')
        @yield('header_script')
    </head>
    <body>
        {{---Header----}}
        @include('group_c.layouts.header') 
        
        {{-----Content----}}
        @yield('content')  
        
        {{-----Breadscrumb List----}}
        @yield('breadscrumb')
               
        {{-----Content List----}}
        @yield('content_list')
        
        {{-----Detail Product----}}
        @yield('detail')
        
        {{-----Footer-----}}
        @include('group_c.layouts.footer')       
    </body>
</html>

