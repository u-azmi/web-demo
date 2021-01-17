<?php
require_once("config.php");
session_start();

$sql1 = "SELECT COUNT(no_identitas) FROM users WHERE tipe_akun != 'Admin'";
$stmt1 = $db->prepare($sql1);
$stmt1->execute();
$data1 = $stmt1->fetch(PDO::FETCH_ORI_NEXT);
$jmluser = $data1[0];

$sql2 = "SELECT COUNT(id_volunteer) FROM volunteer";
$stmt2 = $db->prepare($sql2);
$stmt2->execute();
$data2 = $stmt2->fetch(PDO::FETCH_ORI_NEXT);
$jmlfol = $data2[0];

?>
<!DOCTYPE html>
<html>
    <html lang="en">
    <head>
        <link rel="stylesheet" href="css/admin.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <section class="sideMenu">
            <nav>
                <a href="admin.php" class="active"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 8 8">
                    <path d="M4 0l-4 3h1v4h2v-2h2v2h2v-4.03l1 .03-4-3z" />
                  </svg>Home</a>
                <a href="inputFenomena.php"><svg class="bi bi-archive-fill" width="17" height="17" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14.643 17C15.979 17 17 15.845 17 14.5V7H3v7.5C3 15.845 4.021 17 5.357 17h9.286zM8 9a.5.5 0 000 1h4a.5.5 0 000-1H8zM3 3a1 1 0 00-1 1v1.5a1 1 0 001 1h14a1 1 0 001-1V4a1 1 0 00-1-1H3z" clip-rule="evenodd"/>
                    </svg>Input Fenomena</a>
                <a href="daftarfenomena.php"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 8 8">
                    <path d="M0 0v8h7v-4h-4v-4h-3zm4 0v3h3l-3-3z" />
                  </svg>Data Fenomena</a>
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 8 8">
                    <path d="M2 0v1h-.75c-.68 0-1.25.57-1.25 1.25v.5c0 .68.44 1.24 1.09 1.41l2.56.66c.14.04.34.29.34.44v.5c0 .14-.11.25-.25.25h-2.5c-.12 0-.21-.04-.25-.06v-.94h-1v1c0 .34.2.63.44.78.23.16.52.22.81.22h.75v1h1v-1h.75c.69 0 1.25-.56 1.25-1.25v-.5c0-.68-.44-1.24-1.09-1.41l-2.56-.66c-.14-.04-.34-.29-.34-.44v-.5c0-.14.11-.25.25-.25h2.5c.11 0 .21.04.25.06v.94h1v-1c0-.34-.2-.63-.44-.78-.23-.16-.52-.22-.81-.22h-.75v-1h-1z"transform="translate(1)" />
                  </svg>Data Donasi</a>
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 8 8">
                    <path d="M5.5 0c-.51 0-.95.35-1.22.88.45.54.72 1.28.72 2.13 0 .29-.03.55-.09.81.19.11.38.19.59.19.83 0 1.5-.9 1.5-2s-.67-2-1.5-2zm-3 1c-.83 0-1.5.9-1.5 2s.67 2 1.5 2 1.5-.9 1.5-2-.67-2-1.5-2zm4.75 3.16c-.43.51-1.02.82-1.69.84.27.38.44.84.44 1.34v.66h2v-1.66c0-.52-.31-.97-.75-1.19zm-6.5 1c-.44.22-.75.67-.75 1.19v1.66h5v-1.66c0-.52-.31-.97-.75-1.19-.45.53-1.06.84-1.75.84s-1.3-.32-1.75-.84z"/>
                  </svg>Data User</a>
            </nav>
        </section>
        <header>
            <div class="user-area">
                <?php include 'head.php'; ?>
            </div> 
        </header>
        <section class="content-area">
            <div class="heading">
                <h1>Dashboard</h1>
                <p>welcome admin</p>
            </div>

            <div class="cards">
                <div class="col-md-4">
                <div class="card">
                    <div class="user-img"></div>
                    <span class="user-name">Admin</span>
                    <!-- <span class="user-title">Modeling</span> -->
                    <hr>
                    <div class="col-md-3">
                    <span class="education">Account</span>
                </div>
                <div class="col-md-9">
                        <span class="school">Akunnya Admin</span>
                </div>
            </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    Jumlah pengguna saat ini :&nbsp;&nbsp;<?php echo "$jmluser";?> Orang
                    <span class="date">
                        Jumlah volunteer :&nbsp;&nbsp;<?php echo "$jmlfol";?> Orang
                    </span>
                    <div class="col-md-2">
                    <span class="icon">IT</span>
                </div>
                <div class="col-md-10">
                        <span class="location">Best Seller in Sukabirus</span>
                        <span class="position">Manager of Oemah Soepatu</span>
                        <span class="time">09:30</span>
                </div>
            </div>
            </div>
        </section>
    </body>
</html>