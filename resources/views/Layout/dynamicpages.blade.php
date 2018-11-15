
<!DOCTYPE html>
<html lang="en">


<head>
    <title>TechSpot</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="animate.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/admin-style.css" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/admin-style.css') }}">

    <link href='//fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<style>

    #photographyicon { font-size: 100px;
        color: white;
    }

    body {
        font-family: 'Cairo';
        background-color:white;
    }

    #myNavbar {}

    .navbar-brand {

        font-size: 32px;
        font-weight: 100;
        text-transform: capitalize;
        letter-spacing: 3px;
        padding-left: 40px;
    }

    .nav {

        background-color: #1a2226;
        height: 50px;
    }

    #menutext {

        color: #1b6d85;
        letter-spacing: 1px;
        font-size: 16px;
        font-weight: 700;

    }


    #footerid{

        background-color: black;
        font-size: 16px;
        font-weight:200;
        color: #1b6d85;
        margin-bottom: 0px;
        height: 50px;
        margin-right:0px;

    }



    #photographyparallax {

        background-image: url("miguel-mateo-212333.jpg");
        min-height: 600px;
        background-attachment: fixed;
        background-position: center;
        background-repeat:no-repeat;
        background-size: cover;

    }

    .img-rounded {

        width:490px;
        height:318px;
        border-radius: 0px;
        opacity: 1.0;
    }

    .imgmiddle {

        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);

    }

    .text {
        background-color: #4CAF50;
        color: white;
        font-size: 16px;
        padding: 16px 32px;
    }




    .img-rounded:hover .text{

        opacity: 0.3;
    }



    .paddingclass{

        padding-left: 15px;
        padding-right: 13px;
    }

    #rowgap{padding-top: 1px;
        padding-bottom: 1px;}


    .no-gutter {
        margin-right: 0;
        margin-left: 0;
    }

    .no-gutter > [class*="col-"] {
        padding-right: 0;
        padding-left: 0;
    }

    .top-buffer { margin-top:4px; }



    .pagination-lg > [class*="pagination"]:hover {

        background-color: black;

    }

    .back-to-top {

        background: none;

        margin: 0;

        position: fixed;

        border-radius: 0px;



        bottom: 0;

        right: 0;

        width: 50px;

        height: 50px;

        z-index: 100;

        display: none;

        text-decoration: none;

        color: #ffffff;

        /*  background-color: #ff9000; */
        background-color: #1b6d85;

    }


    .back-to-top i {

        font-size: 40px;
        padding-left: 8px;
        padding-top: 5px;

    }


    .back-to-top:hover{

        color: white;
        background-color: #1b6d85;
    }


        /*** styling for side nav bar **/


    :focus {
        outline: none;
    }
    .row {
        margin-right: 0;
        margin-left: 0;
    }
    /*
        Sometimes the sub menus get too large for the page and prevent the menu from scrolling, limiting functionality
        A quick fix is to change .side-menu to

        -> position:absolute

        and uncomment the code below.
        You also need to uncomment

        -> <div class="absolute-wrapper"> </div> in the html file

        you also need to tweek the animation. Just uncomment the code in that section
        --------------------------------------------------------------------------------------------------------------------
        If you want to make it really neat i suggest you look into an alternative like http://areaaperta.com/nicescroll/
        This will allow the menu to say fixed on body scoll and scoll on the side bar if it get to large
    */
    /*.absolute-wrapper{
        position: fixed;
        width: 300px;
        height: 100%;
        background-color: #f8f8f8;
        border-right: 1px solid #e7e7e7;
    }*/

    .side-menu {
        position: fixed;
        width: 300px;
        height: 100%;
        background-color: #f8f8f8;
        border-right: 1px solid #e7e7e7;
    }
    .side-menu .navbar {
        border: none;
    }
    .side-menu .navbar-header {
        width: 100%;
        border-bottom: 1px solid #e7e7e7;
    }
    .side-menu .navbar-nav .active a {
        background-color: transparent;
        margin-right: -1px;
        border-right: 5px solid #e7e7e7;
    }
    .side-menu .navbar-nav li {
        display: block;
        width: 100%;
        border-bottom: 1px solid #e7e7e7;
    }
    .side-menu .navbar-nav li a {
        padding: 15px;
    }
    .side-menu .navbar-nav li a .glyphicon {
        padding-right: 10px;
    }
    .side-menu #dropdown {
        border: 0;
        margin-bottom: 0;
        border-radius: 0;
        background-color: transparent;
        box-shadow: none;
    }
    .side-menu #dropdown .caret {
        float: right;
        margin: 9px 5px 0;
    }
    .side-menu #dropdown .indicator {
        float: right;
    }
    .side-menu #dropdown > a {
        border-bottom: 1px solid #e7e7e7;
    }
    .side-menu #dropdown .panel-body {
        padding: 0;
        background-color: #f3f3f3;
    }
    .side-menu #dropdown .panel-body .navbar-nav {
        width: 100%;
    }
    .side-menu #dropdown .panel-body .navbar-nav li {
        padding-left: 15px;
        border-bottom: 1px solid #e7e7e7;
    }
    .side-menu #dropdown .panel-body .navbar-nav li:last-child {
        border-bottom: none;
    }
    .side-menu #dropdown .panel-body .panel > a {
        margin-left: -20px;
        padding-left: 35px;
    }
    .side-menu #dropdown .panel-body .panel-body {
        margin-left: -15px;
    }
    .side-menu #dropdown .panel-body .panel-body li {
        padding-left: 30px;
    }
    .side-menu #dropdown .panel-body .panel-body li:last-child {
        border-bottom: 1px solid #e7e7e7;
    }
    .side-menu #search-trigger {
        background-color: #f3f3f3;
        border: 0;
        border-radius: 0;
        position: absolute;
        top: 0;
        right: 0;
        padding: 15px 18px;
    }
    .side-menu .brand-name-wrapper {
        min-height: 50px;
    }
    .side-menu .brand-name-wrapper .navbar-brand {
        display: block;
    }
    .side-menu #search {
        position: relative;
        z-index: 1000;
    }
    .side-menu #search .panel-body {
        padding: 0;
    }
    .side-menu #search .panel-body .navbar-form {
        padding: 0;
        padding-right: 50px;
        width: 100%;
        margin: 0;
        position: relative;
        border-top: 1px solid #e7e7e7;
    }
    .side-menu #search .panel-body .navbar-form .form-group {
        width: 100%;
        position: relative;
    }
    .side-menu #search .panel-body .navbar-form input {
        border: 0;
        border-radius: 0;
        box-shadow: none;
        width: 100%;
        height: 50px;
    }
    .side-menu #search .panel-body .navbar-form .btn {
        position: absolute;
        right: 0;
        top: 0;
        border: 0;
        border-radius: 0;
        background-color: #f3f3f3;
        padding: 15px 18px;
    }
    /* Main body section */
    .side-body {
        margin-left: 310px;
    }
    /* small screen */
    @media (max-width: 768px) {
        .side-menu {
            position: relative;
            width: 100%;
            height: 0;
            border-right: 0;
            border-bottom: 1px solid #e7e7e7;
        }
        .side-menu .brand-name-wrapper .navbar-brand {
            display: inline-block;
        }
        /* Slide in animation */
        @-moz-keyframes slidein {
            0% {
                left: -300px;
            }
            100% {
                left: 10px;
            }
        }
        @-webkit-keyframes slidein {
            0% {
                left: -300px;
            }
            100% {
                left: 10px;
            }
        }
        @keyframes slidein {
            0% {
                left: -300px;
            }
            100% {
                left: 10px;
            }
        }
        @-moz-keyframes slideout {
            0% {
                left: 0;
            }
            100% {
                left: -300px;
            }
        }
        @-webkit-keyframes slideout {
            0% {
                left: 0;
            }
            100% {
                left: -300px;
            }
        }
        @keyframes slideout {
            0% {
                left: 0;
            }
            100% {
                left: -300px;
            }
        }
        /* Slide side menu*/
        /* Add .absolute-wrapper.slide-in for scrollable menu -> see top comment */
        .side-menu-container > .navbar-nav.slide-in {
            -moz-animation: slidein 300ms forwards;
            -o-animation: slidein 300ms forwards;
            -webkit-animation: slidein 300ms forwards;
            animation: slidein 300ms forwards;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }
        .side-menu-container > .navbar-nav {
            /* Add position:absolute for scrollable menu -> see top comment */
            position: fixed;
            left: -300px;
            width: 300px;
            top: 43px;
            height: 100%;
            border-right: 1px solid #e7e7e7;
            background-color: #f8f8f8;
            -moz-animation: slideout 300ms forwards;
            -o-animation: slideout 300ms forwards;
            -webkit-animation: slideout 300ms forwards;
            animation: slideout 300ms forwards;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }
        /* Uncomment for scrollable menu -> see top comment */
        /*.absolute-wrapper{
              width:285px;
              -moz-animation: slideout 300ms forwards;
              -o-animation: slideout 300ms forwards;
              -webkit-animation: slideout 300ms forwards;
              animation: slideout 300ms forwards;
              -webkit-transform-style: preserve-3d;
              transform-style: preserve-3d;
          }*/
        @-moz-keyframes bodyslidein {
            0% {
                left: 0;
            }
            100% {
                left: 300px;
            }
        }
        @-webkit-keyframes bodyslidein {
            0% {
                left: 0;
            }
            100% {
                left: 300px;
            }
        }
        @keyframes bodyslidein {
            0% {
                left: 0;
            }
            100% {
                left: 300px;
            }
        }
        @-moz-keyframes bodyslideout {
            0% {
                left: 300px;
            }
            100% {
                left: 0;
            }
        }
        @-webkit-keyframes bodyslideout {
            0% {
                left: 300px;
            }
            100% {
                left: 0;
            }
        }
        @keyframes bodyslideout {
            0% {
                left: 300px;
            }
            100% {
                left: 0;
            }
        }
        /* Slide side body*/
        .side-body {
            margin-left: 5px;
            margin-top: 70px;
            position: relative;
            -moz-animation: bodyslideout 300ms forwards;
            -o-animation: bodyslideout 300ms forwards;
            -webkit-animation: bodyslideout 300ms forwards;
            animation: bodyslideout 300ms forwards;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }
        .body-slide-in {
            -moz-animation: bodyslidein 300ms forwards;
            -o-animation: bodyslidein 300ms forwards;
            -webkit-animation: bodyslidein 300ms forwards;
            animation: bodyslidein 300ms forwards;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }
        /* Hamburger */
        .navbar-toggle {
            border: 0;
            float: left;
            padding: 18px;
            margin: 0;
            border-radius: 0;
            background-color: #f3f3f3;
        }
        /* Search */
        #search .panel-body .navbar-form {
            border-bottom: 0;
        }
        #search .panel-body .navbar-form .form-group {
            margin: 0;
        }
        .navbar-header {
            /* this is probably redundant */
            position: fixed;
            z-index: 3;
            background-color: #f8f8f8;
        }
        /* Dropdown tweek */
        #dropdown .panel-body .navbar-nav {
            margin: 0;
        }
    }



</style>

<script>


    $(function () {
        $('.navbar-toggle').click(function () {
            $('.navbar-nav').toggleClass('slide-in');
            $('.side-body').toggleClass('body-slide-in');
            $('#search').removeClass('in').addClass('collapse').slideUp(200);

            /// uncomment code for absolute positioning tweek see top comment in css
            //$('.absolute-wrapper').toggleClass('slide-in');

        });

        // Remove menu for searching
        $('#search-trigger').click(function () {
            $('.navbar-nav').removeClass('slide-in');
            $('.side-body').removeClass('body-slide-in');

            /// uncomment code for absolute positioning tweek see top comment in css
            //$('.absolute-wrapper').removeClass('slide-in');

        });
    });

</script>


<body>


<div class="row">
    <!-- uncomment code for absolute positioning tweek see top comment in css -->
    <!-- <div class="absolute-wrapper"> </div> -->
    <!-- Menu -->
    <div class="side-menu">

        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <div class="brand-wrapper">
                    <!-- Hamburger -->
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Brand -->
                    <div class="brand-name-wrapper">
                        <a class="navbar-brand" href="{{route('blog.index')}}">
                            TechSpot
                        </a>
                    </div>

                    <!-- Search -->
                    <a data-toggle="collapse" href="#search" class="btn btn-default" id="search-trigger">
                        <span class="glyphicon glyphicon-search"></span>
                    </a>

                    <!-- Search body -->
                    <div id="search" class="panel-collapse collapse">
                        <div class="panel-body">
                            <form class="navbar-form" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                                <button type="submit" class="btn btn-default "><span class="glyphicon glyphicon-ok"></span></button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Main Menu -->
            <div class="side-menu-container">
                <ul class="nav navbar-nav">

                 <!--   <li><a href="#"><span class="glyphicon glyphicon-dashboard "></span> Link</a></li>-->
                    <li class="active"><a href="{{route('admin-dashboard')}}" ><span class="glyphicon glyphicon-home"></span>Admin Home</a></li>
                    <li class="active"><a href="{{route('about')}}" ><span class="glyphicon glyphicon-plane"></span>About Us</a></li>
                    <li class="active"><a href="{{route('contact')}}" ><span class="glyphicon glyphicon-plane"></span>Contact</a></li>

                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> <span class="glyphicon glyphicon-off"></span>
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>




                    <!-- Dropdown-->
                    <li class="panel panel-default" id="dropdown">
                        <a data-toggle="collapse" href="#dropdown-lvl1">
                            <span class="glyphicon glyphicon-user"></span>Cruds<span class="caret"></span>
                        </a>

                        <!-- Dropdown level 1 -->
                        <div id="dropdown-lvl1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="nav navbar-nav">
                                    <li><a href="{{url('/posts')}}"><span class="glyphicon glyphicon-pencil"></span>Posts</a></li>
                                    <li><a href="{{url('/categories')}}"><span class="glyphicon glyphicon-th-list"></span>Categories</a></li>
                                    <li><a href="{{url('/tags')}}"><span class="glyphicon glyphicon-tag"></span>Tags</a></li>
                                    <li><a href="{{url('/comments')}}"><span class="glyphicon glyphicon-comment"></span>Comments</a></li>

                                    <!-- Dropdown level 2 -->

                                </ul>
                            </div>
                        </div>
                    </li>




                </ul>



            </div><!-- /.navbar-collapse -->
        </nav>

    </div>


<br>
<br>







<div class="container">


    @include('partials._messages')


    @yield(('content'))




    <a href="#" class="back-to-top" style="display: inline;"  >

        <i class="fa fa-arrow-circle-up"></i>

    </a>

    <hr>

    <p class="text-center">Copyright Techspot - All Rights Reserved</p>


</div>

<!-- end of container -->


<!-- Latest compiled and minified JavaScript -->
</div>

</body>


<script>


    $(function () {
        $('.navbar-toggle').click(function () {
            $('.navbar-nav').toggleClass('slide-in');
            $('.side-body').toggleClass('body-slide-in');
            $('#search').removeClass('in').addClass('collapse').slideUp(200);

            /// uncomment code for absolute positioning tweek see top comment in css
            //$('.absolute-wrapper').toggleClass('slide-in');

        });

        // Remove menu for searching
        $('#search-trigger').click(function () {
            $('.navbar-nav').removeClass('slide-in');
            $('.side-body').removeClass('body-slide-in');

            /// uncomment code for absolute positioning tweek see top comment in css
            //$('.absolute-wrapper').removeClass('slide-in');

        });
    });

</script>


</html>




