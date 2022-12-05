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
        <title>UNKLAB-USER</title>
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
                            <div class="sb-sidenav-menu-heading">View Student</div>
                            <a class="nav-link collapsed" href="../allStudent/index.php" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                                List Mahasiswa
                            </a>
                            <div class="sb-sidenav-menu-heading">View Presensi</div>
                            <a class="nav-link collapsed" href="index.php" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-folder"></i></div>
                                Presensi Mahasiswa
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        User
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Universitas Klabat</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="../home.php">Home</a></li>
                        <li class="breadcrumb-item active">Presensi</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            List Presensi
                        </div>
                        <div class="card-body">
                        <table id="datatablesSimple"> 
                            <thead class="text-center">
                                 <tr>
                                    <!--nama judul tabel-->
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Distance</th>
                                    <th class="text-center">NIM</th>
                                    <th class="text-center">Latitude</th>
                                    <th class="text-center">Longitude</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Place</th>
                                    <th class="text-center">Residence</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Time</th>
                                    <th class="text-center">Worship</th>
                                    <th class="text-center">Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //tarik data dari firebase loginMahasiswa
                                $data = $db->retrieve("Absensi");
                                $data = json_decode($data, 1);
                                
                                // fungsi untuk display rows
                                function dislay_row($ArrayRows){
                                    // fungsi round last 3 digits
                                    $jarak = bcadd($ArrayRows['distance'], '0', 1);
                                    $long = bcadd($ArrayRows['long'], '0', 3);
                                    $lat = bcadd($ArrayRows['lat'], '0', 3);
                                
                                    echo"<tr class='text-center'>
                                    <td>{$ArrayRows['date']}</td>
                                    <td>{$jarak} meter</td>
                                    <td>{$ArrayRows['id']}</td>
                                    <td>{$lat}</td>
                                    <td>{$long}</td>
                                    <td>{$ArrayRows['name']}</td>
                                    <td>{$ArrayRows['place']}</td>
                                    <td>{$ArrayRows['residence']}</td>
                                    <td>{$ArrayRows['status']}</td>
                                    <td>{$ArrayRows['time']}</td>
                                    <td>{$ArrayRows['worship']}</td>
                                    <td>
                                    <a class='btn btn-primary px-3 py-0' href='edit.php?id={$ArrayRows['date']}'>EDIT</a>
                                    <a class='btn btn-danger px-1 py-0' href='delete.php?id={$ArrayRows['id']}'>DELETE</a>
                                    </td>
                                    </tr>";
                                }
                                
                                
                                if(is_array($data)){
                                    foreach($data as $date => $datetime){
                                        foreach($datetime as $key => $Absensi) {
                                            //print_r(sizeof($Absensi)); echo "<br /><br />";

                                        if (sizeof($Absensi) == 1){
                                            foreach($Absensi as $key2 => $dataAbsensi) {
                                                // display data
                                                dislay_row($dataAbsensi);
                                            }
                                        }else{
                                           // display data
                                           dislay_row($Absensi);
                                        }
                                        }   
                                    }
                                }
                                
                                
                                ?>
                            </tbody>
                        </table>
                        <div class="pt-1 text-base font-semibold leading-6">
                            <div class="items-center">
                                <a type="submit" href="add.php" class="btn btn-primary  px-4 py-0">Add</a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>
