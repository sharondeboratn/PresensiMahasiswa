<?php

include("config.php");
include("firebaseRDB.php");
$db = new firebaseRDB($databaseURL);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>UNKLAB-ADMIN</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <img height="45" src="../logo.png" style="float: left; margin: 9px 6px 2px 10px;" width="200"/>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Manage User</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                User
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="../admin/index.php">Admin</a>
                                    <a class="nav-link" href="../villageDean/index.php">Operator</a>
                                    <a class="nav-link" href="../mahasiswa/index.php">Mahasiswa</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">View Student</div>
                            <a class="nav-link collapsed" href="../allStudent/index.php" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                                List Mahasiswa
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Universitas Klabat</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../home.php">Home</a></li>
                            <li class="breadcrumb-item active">Admin</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Login Admin
                            </div>
                            <div class="card-body">
                            <table id="datatablesSimple"> 
                                    <thead class="text-center">
                                        <tr>
                                            <!--nama judul tabel-->
                                            <th class="text-center col-sm-2">Username</th>
                                            <th class="text-center col-sm-2">Password</th>
                                            <th class="text-center col-sm-2">Level</th>
                                            <th class="text-center col-sm-1">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php
                                //tarik data dari firebase loginMahasiswa
                                $data = $db->retrieve("userAdmin");
                                $data = json_decode($data, 1);
                                if(is_array($data)){
                                    foreach($data as $id => $userAdmin){
                                        echo"<tr class='text-center'>
                                        <td>{$userAdmin['username']}</td>
                                        <td>{$userAdmin['password']}</td>
                                        <td>{$userAdmin['level']}</td>
                                        <td>
                                            <a class='btn btn-primary px-3 py-0' href='edit.php?id={$userAdmin['username']}'>EDIT</a>
                                        </td>
                                        </tr>";
                                    }
                                }
                                ?>
                            </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="../js/scripts.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
            <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>
