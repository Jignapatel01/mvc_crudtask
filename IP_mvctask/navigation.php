<?php
$mainurl="http://localhost/IP_mvctask/";
$baseurl="http://localhost/IP_mvctask/assets";
?>


    <!DOCTYPE html>
    <html>

    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Page Title</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='/assets/style.css'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

        <script src='main.js'></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    </head>

    <body>

        <!-- header start -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                    <b> Call Us:<i class="bi bi-phone"></i>+91-9856321478  </b>
                </div>
                <div class="col-md-5">
                    <input type="text" name="search" placeholder="Search Here..............." class="form-control">
                </div>
                <div class="col-md-4  fs-5  ">
                    <a href=""><i class="bi bi-person-add ms-4"></i></a>
                    <a href=""><i class="bi bi-whatsapp ms-2"></i></a>
                    <a href=""><i class="bi bi-instagram ms-2"></i></a>
                    <a href=""><i class="bi bi-linkedin ms-2"></i></a>

                </div>
            </div>

        </div>

        <!-- navbar start -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light mt-5">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse" id="navbarSupportedConte
            
            nt">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left:65%">
                        <li class="nav-item" >
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Account
                </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item"  href="./login">SignIn</a></li>
                                <li><a class="dropdown-item"  href="#">SignUp</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Disabled</a>
                        </li>
                    </ul>
                    <!-- <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                </div>
            </div>
        </nav>


    </body>

    </html>