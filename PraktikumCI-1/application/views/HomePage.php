<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>HOME</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('style/sylesheet.css');?>">
        
    </head>
    <body>
        <!-- Pertama -->
        <div class="slide d-flex h-100 text-center text-white bg-dark">
            <!-- Kedua -->
            <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">
                <!-- Header -->
                <div class="mb-auto">
                    <h3 class="float-md-start mb-0">Cryptod.id</h3>
                    <nav class="nav nav-masthead justify-content-center float-md-end">
                        <a class="nav-link" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">DAFTAR</a>
                    </nav>
                </div>
                <!-- Header -->

                <!-- Slider -->
                <div class="container-fluid">
                    <div class="position-relative" style="height: 650px">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <h1 style="font-size: 150px">Cryptod.id</h1>
                            <p class="mt-4 fs-6 lead">Cryptod.id merupakan sebuah Platform untuk Cek Pasar dan Jual Beli Crypto. Terdapat berbagai aset seperti Bitcoin, Ethereum, Dogecoin dan aset lainnya yang bisa anda beli maupun menjualnya dengan mudah dan aman. Gabunglah sekarang untuk menjadi Trader Crypto di Cryptod.id Sekarang!</p>
                            <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">MASUK</a>
                        </div>
                        
                    </div>
                </div>
                <!-- Slider -->

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <form action="<?php echo base_url()."sessionauth/masukPengguna"?>" method="post">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header text-dark">
                                    <h5 class="modal-title" id="staticBackdropLabel">MASUK</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    
                                    <div class="form-group mb-3">
                                        <!-- <label for="name">Nama</label> -->
                                        <input type="text" class="form-control" id="name" name="username" placeholder="Username" />
                                    </div>

                                    <div class="form-group mt-3">
                                        <!-- <label for="email">Email</label> -->
                                        <input type="password" class="form-control" id="email" name="password" placeholder="password" />
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-secondary text-white">KIRIM</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel1" aria-hidden="true">
                    <form action="<?php echo base_url()."sessionauth/daftarPengguna"?>" method="post">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header text-dark">
                                    <h5 class="modal-title" id="staticBackdropLabel">DAFTAR</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" id="name" name="usernameDaftar" placeholder="Username" />
                                    </div>

                                    <div class="form-group my-3">
                                        <input type="password" class="form-control" name="passwordDaftar" placeholder="password" />
                                    </div>

                                    <div class="form-group mb-3">
                                        <input type="email" class="form-control" name="emailDaftar" placeholder="E-mail" />
                                    </div>

                                    <div class="form-group mt-3">
                                        <input type="number" class="form-control" name="nohpDaftar" placeholder="No HP" />
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-secondary text-white">KIRIM</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Modal -->

            </div>
            <!-- Kedua -->
        </div>
        <!-- Pertama -->

        <!-- Market -->
        <div class="container tab">
            <div class="box">
                <h4 class="display-4 text-center">MARKET</h4>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">
                                NO
                            </th>
                            <th scope="col" class="text-center">
                                Market
                            </th>
                            <th scope="col" class="text-center">
                                Crypto
                            </th>
                            <th scope="col" class="text-center">
                                Harga Terakhir
                            </th>
                            <th scope="col" class="text-center">
                                Change
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($dataMarket as $dataMarket) {
                        ?>
                            <tr>
                                <td class="text-center">
                                    <?php echo $dataMarket['id_market'];?>
                                </td>
                                <td class="text-center">
                                    <?php echo $dataMarket['nama_market'];?>
                                </td>
                                <td class="text-center">
                                    <?php echo $dataMarket['nama_crypto'];?>
                                </td>
                                <td class="text-center">
                                    <?php echo $dataMarket['harga_crypto'];?>
                                </td>
                                <td class="text-center">
                                    <?php echo $dataMarket['persentasi_market']."% | "."<SPAN class='text-danger'>".$dataMarket['pergerakan_market']."</SPAN>";?>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Market -->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
