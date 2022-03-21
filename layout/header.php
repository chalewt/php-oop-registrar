<?php 
$path = $_SERVER['DOCUMENT_ROOT'] . "/registrar/";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar System</title>
    <link rel="stylesheet" href="content/bootstrap-5/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php $path; ?>index.php">Registrar System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php $path; ?>index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Organization
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php $path; ?>views/college/registerform.php">College</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                
                </ul>
                <ul class="navbar-nav navbar-right">
                    <li class="nav-item pull-right">
                        <a class="nav-link" href="#">[Chalew T]</a>
                    </li>
                    <li class="nav-item pull-right">
                        <a class="nav-link" href="#">[Sign out]</a>
                    </li>
                    <li class="nav-item pull-right">
                        <a class="nav-link" href="#">[Sign in]</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>