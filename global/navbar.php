<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/1.PNG" type="image/x-icon">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    
    <style>
        header{
            height: 100vh;
            background-image:linear-gradient(to right,rgba(0, 0, 0, 0.582),rgba(0, 0, 0, 0.582)), url(img/2.JPG);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        
        }
        .banner{
            padding: 140px 0px 0px 0px;
        }
        header .banner h1{
            font-size: 109px;
            font-weight: 450;
        }
        header .banner h2{
            font-size: 50px;
            font-weight: 600px;
        }
        header img{
            display:none;
        }
        @media (min-width:900px){
           header img{
                display:block;
            }
            header p{
                width:760px;
            }
        }
     </style>    
    <title>Online Library</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="img/logo1.png" width="50px" alt="">
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Books.php">Books</a>
                </li>
            </ul>
        </div>
    </nav>