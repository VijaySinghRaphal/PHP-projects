<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style>
        .hero-container{
        background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
        url("<?php echo $image_url ;?>");
        height:300px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }
    </style>
</head>
<body>
    <header class="container-fluid hero-container pt-5 pb-5" >
        <div class="container d-flex flex-column justify-content-center align-items-center h-100">
            <h1 class="text-white">Welcome To <?php echo $page_title ?></h1>
            <div class="container d-flex justify-content-center gap-2">
                <a href="index.php" class="btn btn-outline-light">Home</a>
                <a href="python.php" class="btn btn-outline-light">Python</a>
                <a href="csharp.php" class="btn btn-outline-light">CSharp</a>
            </div>
        </div> 
    </header>
    