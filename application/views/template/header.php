<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title><?= $title ?></title>
    <style>
    .btn{
        margin-left:3px;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">CODEIGNITER</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <div class="container">
                <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="<?= base_url() . 'mahasiswa'; ?>">Data Mahasiswa <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="<?= base_url() . 'siswa'; ?>">Data Siswa <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="<?= base_url() . 'about'; ?>">about</a>

            </div>
        </div>
        <a class="btn btn-danger float-right" href="<?= base_url() . 'login/logout'; ?>"><i class="fa fa-sign-out" aria-hidden="true"></i>
            Logout</a>
    </nav>
    </div>