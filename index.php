<!doctype html>
<html lang="en">

<head>
    <title>Perpustakaan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <header>
        <?php
        session_start();
        if (!isset($_SESSION["isLogin"])) {
            header("Location:login.php");
        }
        ?>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/Perpustakaan">Home &#160;&#160;&#160;</a>
                </li>
                <li class="nav-item">
                    <a href="/perpustakaan/index.php/anggota" class="nav-link">Anggota &#160;&#160;&#160;</a>
                </li>
                <li class="nav-item">
                    <a href="/perpustakaan/index.php/buku" class="nav-link">Buku &#160;&#160;&#160;</a>
                </li>
                <li class="nav-item">
                    <a href="/perpustakaan/index.php/peminjaman" class="nav-link">Peminjaman &#160;&#160;&#160;</a>
                </li>
                <li class="nav-item">
                    <a href="/perpustakaan/index.php/petugas" class="nav-link">Petugas &#160;&#160;&#160;</a>
                </li>
                <li class="nav-item">
                    <a href="/perpustakaan/app/logout.php" class="nav-link">Logout</a>
                </li>
            </ul>
        </nav>
    </header>
    <main role="main" class="mt-6">
        <div class="container">
            <div class="col-md-12">
                <div class="row" style="margin-top : 75px !important;">
                    <?php
                    $project_location = "/perpustakaan";
                    $me = $project_location;
                    $request = strtok($_SERVER['REQUEST_URI'], "?");
                    switch ($request) {
                        case $me . '/index.php':
                            require "layout/home.php";
                            break;
                        case $me . '/index.php/anggota':
                            require "layout/anggota.php";
                            break;
                        case $me . '/index.php/anggota/add':
                            require "layout/tambah_anggota.php";
                            break;
                        case $me . '/index.php/buku':
                            require "layout/buku.php";
                            break;
                        case $me . '/index.php/buku/add':
                            require "layout/tambah_buku.php";
                            break;
                        case $me . '/index.php/peminjaman':
                            require "layout/peminjaman.php";
                            break;
                        case $me . '/index.php/peminjaman/add':
                            require "layout/tambah_peminjaman.php";
                            break;
                        case $me . '/index.php/petugas':
                            require "layout/petugas.php";
                            break;
                        case $me . '/index.php/petugas/add':
                            require "layout/tambah_petugas.php";
                            break;
                        case $me . '/index.php/anggota/ubah':
                            require "layout/ubah_anggota.php";
                            break;
                        case $me . '/index.php/buku/ubah':
                            require "layout/ubah_buku.php";
                            break;
                        case $me . '/index.php/peminjaman/ubah':
                            require "layout/ubah_peminjaman.php";
                            break;
                        case $me . '/index.php/petugas/ubah':
                            require "layout/ubah_petugas.php";
                            break;
                        default:
                            http_response_code(404);
                            echo "Not Found";
                            break;
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>