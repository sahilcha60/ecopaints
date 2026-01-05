<!DOCTYPE html>
<html lang="en">
    <head>
        {!! SEOMeta::generate() !!}
        @include('frontend.layouts.templates.head')
    </head>

    <body>
        
        @include('frontend.layouts.templates.header')
        
        @include('frontend.layouts.templates.offcanvas')

        @yield('content')

        @include('frontend.layouts.templates.scripts')

        @include('frontend.layouts.templates.footer')

    </body>
</html>