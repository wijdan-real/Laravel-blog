<!DOCTYPE html>
<html lang="en">
<head>
    <title>TechSpot UserPanel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="animate.css" rel="stylesheet" type="text/css">
    <link href='//fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<style>

    #photographyicon { font-size: 100px;
        color: white;
    }

    body {
        font-family: 'Cairo';
        background-color: white;
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


</style>


<body>


<nav class="navbar navbar-inverse navbar-fixed-top">
    <div  class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a  class="navbar-brand" href="#">PSSTOCK</a>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">

                <li class="active"><a id="menutext" href="{{route('blog.index')}}" target="_self">Home</a></li>
                <li><a id="menutext"  href="#" target="_self">Google</a></li>
                <li><a id="menutext" href="#" target="_self">Apple</a></li>
                <li><a id="menutext" href="#" target="_self">Microsoft</a></li>
                <li><a id="menutext" href="#" target="_self">Facebook</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="fa fa-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="fa fa-paint-brush"></span> Login</a></li>
            </ul>


        </div>
    </div>

</nav>

<br>
<br>



</body>
</html>
