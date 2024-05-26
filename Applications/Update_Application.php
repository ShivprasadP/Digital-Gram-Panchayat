<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="/CSS/User Home Page.css">
    <link rel="stylesheet" href="/CSS/Officer/Update Application Status.css">
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

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
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
    </header>

    <!-- footer -->
    <div class="row bg-dark justify-content-center mt-4 py-3">
        <footer class="text-white">
            Contact Number: (02325)-254950, (02325)-254255.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email Id: bidripanchayat@gmail.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address: Bidri Gram Panchayat, Valva Road, Bidri, Tal- Kagal, Dist- Kolhapur.
        </footer>
    </div>
</body>

</html>