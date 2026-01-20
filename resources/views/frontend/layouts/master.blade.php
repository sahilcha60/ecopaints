<!DOCTYPE html>
<html lang="en">
    <head>
        {!! SEOMeta::generate() !!}
        @include('frontend.layouts.templates.head')
    </head>

    <body>
        <div class="page-wrapper">
        
        {{--  @include('frontend.layouts.templates.preloader') --}}

            @include('frontend.layouts.templates.header')

            @yield('content')

            @include('frontend.layouts.templates.footer')

            @include('frontend.layouts.templates.offcanvas')

        </div>

        @include('frontend.layouts.templates.scripts')

    </body>
</html>