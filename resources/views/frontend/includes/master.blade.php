<!DOCTYPE html>
<html>
    @include('frontend.includes.head')
    <body>
        <div class="content">
            <!-------------------------------
            ------------NAVBAR START---------
            -------------------------------->
            @include('frontend.includes.navbar')
            <!-------------------------------
            -------------NAVBAR END----------
            -------------------------------->
            <!-- <div class="container-fluid"> -->
                @yield('main-content')
            <!-- </div> -->

            <!-------------------------------
            ------------FOOTER START---------
            -------------------------------->
            @include('frontend.includes.footer')
            <!-------------------------------
            -------------FOOTER END----------
            -------------------------------->
        </div>
    </body>
</html>