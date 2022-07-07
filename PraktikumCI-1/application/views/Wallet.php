<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Wallet</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
        <link rel="stylesheet" href="<?php echo base_url('style/sylesheet.css');?>">
    </head>
    <body>
        <!-- Pertama -->
        <div class="slide d-flex h-100 text-white bg-dark">
            <!-- Kedua -->
            <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">
                <!-- Header -->
                <div class="mb-auto">
                    <h3 class="float-md-start mb-0">Cryptod.id</h3>
                    <nav class="nav nav-masthead justify-content-center float-md-end">
                        <a class="nav-link dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" aria-current="page" href="#">Wallet</a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalApi">Get API Key</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?php echo base_url()."sessionauth/keluarPengguna" ?>">Keluar</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Header -->
                
                <div class="modal fade text-dark" id="modalApi" tabindex="-1" role="dialog" aria-labelledby="modalApiLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalApiLabel">Your API Key</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    <?php echo $token; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider -->
                <div class="container-fluid">
                    <div class="position-relative" style="height: 650px">
                        <div class="row position-absolute top-50 start-0 translate-middle-y">
                            <div class="col">
                                <h1 style="font-size: 100px">Hi, <?php echo $pengguna?></h1>
                                <p class="fs-5 text-left">Hari ini mau lihat asset atau mau beli lagi nih?</p>
                                <a href="#beli" class="btn btn-lg btn-outline-light mt-2">Beli</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider -->
            </div>
            <!-- Kedua -->
        </div>
        <!-- Pertama -->

        <!-- Market -->
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-4 align-items-start">
                    <div class="content" id="beli">
                        <form action="<?php echo base_url()."welcome/tambah"?>" method="post">
                            <div class="row">
                                <h3>Beli</h3>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <p>Crypto</p>
                                </div>
                                <div class="col-8 ms-2">
                                    <select class="form-select" name="namaCrypto">
                                        <option selected>Pilih</option>
                                        <?php
                                            foreach($dataMarket as $dm) {
                                        ?>
                                            <option value="<?php echo $dm['nama_crypto'];?>"><?php echo $dm['nama_crypto'];?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <p>Dana</p>
                                </div>
                                <div class="col-8 ms-2">
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping">Rp. </span>
                                        <input name="nilaiRupiah" type="number" class="form-control" aria-describedby="addon-wrapping" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <p>Jumlah</p>
                                </div>
                                <div class="col-8 ms-2">
                                    <div class="input-group flex-nowrap">
                                        <input name="jumlahCrypto" type="text" class="form-control" aria-describedby="addon-wrapping" />
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-3">
                                    <p>Biaya</p>
                                </div>
                                <div class="col-8 ms-2">
                                    <p>0.05 %</p>
                                </div>
                            </div> -->
                            <div class="text-end">
                                <button class="more-btn" type="submit">Beli</button>
                            </div>
                        </form>
                    </div>
                    <div class="contentU mt-3" id="jual">
                        <form action="<?php echo base_url()."welcome/update"?>" method="post">
                            <div class="row">
                                <h3>Jual Limit</h3>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <p>Crypto</p>
                                </div>
                                <div class="col-8 ms-2">
                                    <select class="form-select" name="namaCryptoUpdate">
                                        <option selected>Pilih</option>
                                        <?php
                                            foreach($walletku as $walletku) {
                                        ?>
                                            <option value="<?php echo $walletku['nama_crypto'];?>"><?php echo $walletku['nama_crypto'];?></option>
                                        <?php
                                            }
                                        ?>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <p>Dana</p>
                                </div>
                                <div class="col-8 ms-2">
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping">Rp. </span>
                                        <input name="nilaiRupiah" type="number" class="form-control" aria-describedby="addon-wrapping" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <p>Jumlah</p>
                                </div>
                                <div class="col-8 ms-2">
                                    <div class="input-group flex-nowrap">
                                        <input name="jumlahCrypto" type="text" class="form-control" aria-describedby="addon-wrapping" />
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <button class="more-btn" type="submit">Jual</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8" >
                    <div class="box">
                    <h4 class="display-4 text-center">Wallet</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">
                                    NO
                                </th>
                                <th scope="col" class="text-center">
                                    Crypto
                                </th>
                                <th scope="col" class="text-center">
                                    Jumlah
                                </th>
                                <th scope="col" class="text-center">
                                    Nilai Rupiah
                                </th>
                                <th scope="col" class="text-center">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 0;
                                foreach($wallet as $wallet) {
                                    ++$i;
                            ?>
                                <tr>
                                    <td class="text-center">
                                        <?php echo $i;?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo $wallet['nama_crypto'];?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo $wallet['jumlah_crypto'];?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo $wallet['nilai_rupiah'];?>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?php echo base_url()."welcome/hapus/".$wallet['id']?>" type="button" class="btn btn-danger">Jual Instan</a>
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
