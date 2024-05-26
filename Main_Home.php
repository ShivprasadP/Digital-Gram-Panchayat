<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="/CSS/User Home Page.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <style>
        body {
            -ms-overflow-style: none;
            scrollbar-width: none;
            overflow-y: scroll;
        }

        body::-webkit-scrollbar {
            display: none;
        }

        .logo {
            width: 5%;
            margin-left: 1rem;
            border-radius: 3rem;
            border: 3px solid #555;
        }

        .navbar {
            background-color: wheat;
        }

        body {
            font-family: poppins;
        }

        .navbar-inverse {
            background-color: transparent;
            border-color: transparent;
        }

        .navbar-inverse .navbar-brand {
            color: rgb(0, 0, 0);
            background-color: white;
            border-radius: 2rem;
        }

        .navbar-inverse img {
            width: 50px;
            border-radius: 2rem;
            margin-left: -15px;
            margin-top: -15px;
            float: left;
        }

        .navbar-inverse .navbar-nav>li>a {
            color: rgb(0, 0, 0);
            background-color: white;
            border-radius: 2rem;
            text-transform: uppercase;
            font-weight: 900;
        }

        header .carousel-inner .item {
            height: 100vh;
        }

        header .carousel-inner .item img {
            width: 100%;
        }

        .carousel-control.right {
            background-image: none;
        }

        .carousel-control.left {
            background-image: none;
        }

        .dropbtn1 {
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropdown1 {
            position: relative;
            display: inline-block;
        }

        .dropdown-content1 {
            display: none;
            position: absolute;
            min-width: 160px;
            overflow: auto;
            z-index: 1;
            border: none;
            border-radius: 2rem;
        }

        .dropdown-content1 a {
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            color: black;
            background-color: white;
        }

        .dropdown2 {
            position: relative;
            display: inline-block;
        }

        .dropdown-content2 {
            display: none;
            position: absolute;
            min-width: 160px;
            overflow: auto;
            z-index: 1;
            border: none;
            border-radius: 2rem;
        }

        .dropdown-content2 a {
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            color: black;
            background-color: white;
        }
    </style>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <img src="/Digital Gram Panchayat/Images/Logo.png" class="logo" alt="">
            <a class="navbar-brand" href="#">Digital Gram Panchayat</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto" style="float:right">
                    <li class="nav-item active">
                        <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Login/Register
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="User/register.php">User Register</a>
                            <a class="dropdown-item" href="User/login.php">User Login</a>
                            <a class="dropdown-item" href="Staff/login.php">Staff Login</a>
                            <a class="dropdown-item" href="Admin/login.php">Admin Login</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="https://wallpaperaccess.com/full/2330483.jpg" style="width: 100%;">
                </div>
                <div class="item">
                    <img src="https://wallpaperaccess.com/full/2330581.jpg" style="width: 100%;">
                </div>
                <div class="item">
                    <img src="https://media.istockphoto.com/photos/farmer-ploughing-rice-field-at-sunrise-picture-id806276128?b=1&k=20&m=806276128&s=170667a&w=0&h=c6o1gKVtkY0GkQPhTPsJpBdY_P25UENyzvPnKp8eunA=" style="width: 100%;">
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <!-- footer -->
    <div class="row bg-dark justify-content-center mt-4 py-3">
        <footer class="text-white">
            Contact Number: (02325)-254950, (02325)-254255.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email Id: bidripanchayat@gmail.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address: Bidri Gram Panchayat, Valva Road, Bidri, Tal- Kagal, Dist- Kolhapur.
        </footer>
    </div>
    </div>
    <script lang="javascript" type="text/javascript">
        window.history.forward();
    </script>
</body>

</html>