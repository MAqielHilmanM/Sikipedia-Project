<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Halaman Utama</title>
	<link rel="stylesheet" href="<?= base_url('assets/home_search/halaman.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	<script src="<?= base_url('assets/css/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/css/bootstrap.min.js') ?>"></script></head>
<!--/head-->

<body>
    <!--body-->
    <div class="row">
        <!--row-->
        <div class="col-md-2 search" <!--col-md-2-->
            <img class="imagewiki" src="images/wikipedia.png" alt="">
            <ul class="tbl_menu">
                <li>
                    <a href="#" class="tbl_menu">Main page
                    </a>
                </li>
                <li>
                    <a href="#" class="tbl_menu">Contents</a>
                </li>
                <li>
                    <a href="#" class="tbl_menu">Featured content
                    </a>
                </li>
                <li>
                    <a href="#" class="tbl_menu">Current events</a>
                </li>
                <li>
                    <a href="#" class="tbl_menu">Random article</a>
                </li>
                <li>
                    <a href="#" class="tbl_menu">Donate to Wikipedia
                    </a>
                </li>
                <li>
                    <a href="#" class="tbl_menu">Wikipedia store</a>
                </li>

            </ul>

            <ul class="tbl_menu">
                <li class="jdl_menu">Interaction</li>
                <img class="imagerow" src="images/row.png" alt="">
                <li>
                    <a href="#" class="tbl_menu">Help</a>
                </li>
                <li>
                    <a href="#" class="tbl_menu">About Wikipedia
                    </a>
                </li>
                <li>
                    <a href="#" class="tbl_menu">Community portal</a>
                </li>

                <li>
                    <a href="#" class="tbl_menu">Recent changes
                    </a>
                </li>

                <li>
                    <a href="#" class="tbl_menu">Contact page</a>
                </li>
            </ul>

            <ul class="tbl_menu">
                <li class="jdl_menu">Tools</li>
                <img class="imagerow" src="images/row.png" alt="">
                <li>
                    <a href="#" class="tbl_menu">Upload file</a>
                </li>
                <li>
                    <a href="#" class="tbl_menu">Special pages</a>
                </li>
                <li>
                    <a href="#" class="tbl_menu">Printable version</a>
                </li>
            </ul>

            <ul class="tbl_menu">
                <li class="jdl_menu">Language
                    <img src="images/pengaturan.png" alt="" class="imagepengaturan">
                </li>
                <img class="imagerow" src="images/row.png" alt="">
            </ul>



        </div>
        <!--/col-md-2-->

        <div class="col-md-10">
            <!--col-md-10-->
            <nav class="navbar navbar-expand-lg">
                <!--nav-expand-->
                <ul class="navbar-nav ml-auto">
                    <li class="navbar-top">
                        <img class="imageuser" src="images/user.png" alt="">
                        <a class="menu_log" href="#">Belum masuk log</a>
                    </li>
                    <li class="navbar-top">
                        <a class="menu_top_nav" href="#">Pembicaraan</a>
                    </li>

                    <li class="navbar-top">
                        <a class="menu_top_nav" href="#">Kontribusi</a>
                    </li>

                    <li class="navbar-top">
                        <a class="menu_top_nav" href="#">Buat akun baru</a>
                    </li>

                    <li class="navbar-top">
                        <a class="menu_login_log" href="#">Masuk log</a>
                    </li>
                </ul>
            </nav>
            <!--/nav-expand-->

            <div class="menu">

                <div id="content">
                    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                        <li class="active">
                            <a class="menu_utama_black" href="#tab-1" data-toggle="tab">Utama</a>
                        </li>
                        <li>
                            <a class="menu_utama_biru" href="#tab-2" data-toggle="tab">Pembicaraan</a>
                        </li>

                        <li class="ml-auto active">
                            <a class="menu_utama_black" href="#baca" data-toggle="tab">Baca</a>
                        </li>
                        <li class="navbar-top">
                            <a class="menu_utama_biru" href="#lihat" data-toggle="tab">Lihat sumber</a>
                        </li>

                        <li class="navbar-top">
                            <a class="menu_utama_biru" href="#versi" data-toggle="tab">Versi terdahulu</a>
                        </li>
                        <li class="navbar-top">
                            <div class="txt_search">
                                <input type="search" id="search" placeholder="Cari Wikipedia">
                                <button class="btn_search">
                                    <img src="images/search.png" alt="" class="imagesearch">
                                </button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!--/nav-expand-->
            <p class="txt_lamansearch">Search</p>
            <hr class="garislurus">
            <input type="text" class="text_lamansearch">
            <button class="btn_lamansearch">
                <span class="txt_bergabung">Search</span>
            </button>
            <br>
            <button class="advanced">
                <span class="txt_advanced">Advanced parameters:</span>
                <img src="images/garisbawah.png" alt="" class="imagetandapanah">
            </button>
            <div class="form_advanced">
                <p class="lurus_advanced">
                    <img src="images/garislurus.jpg" alt="" class="garis_advanced">Search in page text
                    <img src="images/garislurus.jpg" alt="" class="garis_lurus">
                </p>
                <table class="tbl_advanced">
                    <tr>
                        <td>These words</td>
                        <td>
                            <img src="images/peringatan.jpg" alt="" class="peringatan">
                        </td>
                        <td>
                            <input type="text" class="text_lamanadvanced">
                        </td>
                    </tr>
                    <tr>
                        <td class="txt_these">Exactly this text</td>
                        <td>
                            <img src="images/peringatan.jpg" alt="" class="peringatan">
                        </td>
                        <td>
                            <input type="text" class="text_lamanadvanced">
                        </td>
                    </tr>
                    <tr>
                        <td class="txt_these">Not these words</td>
                        <td>
                            <img src="images/peringatan.jpg" alt="" class="peringatan">
                        </td>
                        <td>
                            <input type="text" class="text_lamanadvanced">
                        </td>
                    </tr>

                    <tr>
                        <td class="txt_these">One of these words

                        </td>
                        <td>
                            <img src="images/peringatan.jpg" alt="" class="peringatan">
                        </td>
                        <td>
                            <input type="text" class="text_lamanadvanced">
                        </td>
                    </tr>

                </table>
                <p class="lurus_advanced">
                    <img src="images/garislurus.jpg" alt="" class="garis_advanced">Structure
                    <img src="images/garislurus.jpg" alt="" class="garis_lurus">
                </p>
                <table class="tbl_structure">
                    <tr>
                        <td>Page title contains</td>
                        <td>
                            <img src="images/peringatan.jpg" alt="" class="peringatan">
                        </td>
                        <td>
                            <input type="text" class="text_lamanstructure">
                        </td>
                    </tr>
                    <tr>
                        <td class="txt_these">Subpages of this page</td>
                        <td>
                            <img src="images/peringatan.jpg" alt="" class="peringatan">
                        </td>
                        <td>
                            <input type="text" class="text_lamanstructure">
                        </td>
                    </tr>
                    <tr>
                        <td class="txt_these">Pages in these categories</td>
                        <td>
                            <img src="images/peringatan.jpg" alt="" class="peringatan">
                        </td>
                        <td>
                            <input type="text" class="text_lamanstructure">
                        </td>
                    </tr>

                    <tr>
                        <td class="txt_these">Pages with these templates


                        </td>
                        <td>
                            <img src="images/peringatan.jpg" alt="" class="peringatan">
                        </td>
                        <td>
                            <input type="text" class="text_lamanstructure">
                        </td>
                    </tr>

                </table>
                <p class="lurus_advanced">
                    <img src="images/garislurus.jpg" alt="" class="garis_advanced">Files and images

                    <img src="images/garislurus.jpg" alt="" class="garis_lurus">
                </p>
                <table class="tbl_files">
                    <tr>
                        <td>These words</td>
                        <td>
                            <img src="images/peringatan.jpg" alt="" class="peringatan">
                        </td>
                        <td>
                            <button class="btn_select">Select file type
                                <img src="images/garisbawah.png" alt="" class="imagetandaselect">
                            </button>
                        </td>
                    </tr>
                </table>
            </div>
            <button class="advanced">
                <span class="txt_advanced">Advanced parameters:</span>
                <img src="images/garisbawah.png" alt="" class="imagetandapanah">
            </button>
            <div class="form_search">
                <table class="tbl_search">
                    <tr>
                        <td class="txt_searchbox">
                            <input type="checkbox" name="nama_checkbox" class="txt_checkbox" />
                        </td>
                        <td class="text_default">Default</td>
                        <td class="txt_searchbox">
                            <input type="checkbox" name="nama_checkbox" class="txt_checkbox" />
                        </td>
                        <td class="text_default">Discussion
                        </td>
                        <td class="txt_searchbox">
                            <input type="checkbox" name="nama_checkbox" class="txt_checkbox" />
                        </td>
                        <td class="text_default">General Help</td>
                        <td class="txt_searchbox">

                            <input type="checkbox" name="nama_checkbox" class="txt_checkbox" />
                        </td>
                        <td class="text_default">All</td>
                    </tr>
                </table>

            </div>

            <input type="text" class="text_addspace" placeholder="Add name space">
            <button class="btn_menu">
                <img src="images/menu.png" alt="" class="imagemenu">
            </button>
            <div class="form_search1">
                    <p class="txt_lamansearch">Hasil Search</p> 

            </div>
            <div class="batasfootersearch">
                <p class="kebijakan1">
                    <span class="txt_sama">Kebijakan privasi </span>
                    <span class="txt_bagian">Tentang Wikipedia</span>
                    <span class="txt_bagian"> Penyangkalan</span>
                    <span class="txt_bagian"> Pengembang</span>
                    <span class="txt_bagian"> Penyataan kuki</span>
                    <span class="txt_bagian"> Tampilan seluler</span>


                    <img src="images/powered.png" alt="" class="project">
                    <img src="images/project.png" alt="" class="project">

                </p>
            </div>
        </div>
        <!--/row-->
        <script>

            jQuery(document).ready(function ($) {
                $('#tabs').tab();
            });
        </script>

</body>
<!--/body-->

</html>