<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>
        @include("partials.meta")
        <title>@yield('mytitle')</title>
        @yield("head")
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" id="cssmain" type="text/css" href="{{ mix('css/app.css') }}" />
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
        <!--link rel="stylesheet" href="/css/font-icons.css" type="text/css" /-->
        <!--link rel="stylesheet" href="/css/animate.css" type="text/css" /-->
        @yield("css")
    </head>

    <body> 
        @yield("preheader")

        <header>

            @yield("postheader")
            @include("partials.logo")

            @yield("premenu")
            @include("partials.menu")

            @yield("postmenu")

        </header>
        <div class="clearfix"></div>
        @include("partials.error")
        @yield("precontent")
        <!-----------------------------------MAIN BODY------------------------------>
      
       @yield("content")  <!-- main content-->
        <!-----------------------------------END MAIN BODY------------------------------>

        @yield("postcontent")
        <!-----------------------------------START FOOTER SECTION------------------------------>

        <footer id="footer" >
            <!-- Return to Top -->
            <a href="javascript:" id="return-to-top">
                <i class="fa fa-angle-up" aria-hidden="true"></i>
            </a>

            @yield("footer")

        </footer>

        <!-----------------------------------END FOOTER SECTION------------------------------>
    <!--wrapper-->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

        <section class="js-wrapper">
            <script src="https://use.fontawesome.com/50f8ab47a1.js"></script>
            <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
            
            <script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
            <script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
            <script type="text/javascript" id="jsvendor"     src="{{ mix('js/vendor.js') }}"></script>
            <script type="text/javascript" id="jsmain"     src="{{ mix('js/app.js') }}"></script>
            <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
            @include("partials.js")
            @yield("js")
    </section>
    <!-----------------------------------END JS SECTION------------------------------>


</body>
</html>
