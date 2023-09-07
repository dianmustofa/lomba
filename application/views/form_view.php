<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pixel Pages - Contact</title>
    <?php $this->load->view("_partials/head.php") ?>
</head>

<body>
    <header class="header-global">
        <?php $this->load->view("_partials/navbar.php") ?>
    </header>
    <main>
        <div class="section section-xl py-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 p-0">
                        <div class="map"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Hero section -->
        <!-- Section -->
        <section class="section section-sm py-0">
            <div class="container">
                <div class="row align-items-center justify-content-center mt-n7">
                    <div class="col-md-12 col-lg-12 mb-5">
                        <!-- Contact Card -->
                        <div class="card shadow-sm border-light p-2 p-md-3 p-lg-5">
                            <div class="card-header">
                                <div class="row justify-content-center">
                                    <div class="col-10 text-center mb-5">
                                        <h1 class="display-2 mb-3">Pendaftaran Lomba Notasi</h1>
                                        <p class="lead">Have a new project in mind? Need help with an ongoing one? Drop us a line about your project needs, we answer same day.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <form action="<?php echo base_url().'welcome/simpan'?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-user"></i></span>
                                            </div>
                                            <input class="form-control" name="nama_tim" placeholder="Nama Tim" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-user"></i></span>
                                            </div>
                                            <input class="form-control" name="judul_karya" placeholder="Judul Karya" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-user"></i></span>
                                            </div>
                                            <input class="form-control" name="ketua_tim" placeholder="Nama Ketua Tim" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-user"></i></span>
                                            </div>
                                            <input class="form-control" name="no_hp" placeholder="No Handphone" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-at"></i></span>
                                            </div>
                                            <input class="form-control" name="email" placeholder="Email" type="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-user"></i></span>
                                            </div>
                                            <input class="form-control" name="no_mahasiswa" placeholder="No Mahasiswa" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-user"></i></span>
                                            </div>
                                            <input class="form-control" name="universitas" placeholder="Universitas" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-user"></i></span>
                                            </div>
                                            <input class="form-control" name="jurusan" placeholder="Jurusan" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-user"></i></span>
                                            </div>
                                            <input class="form-control" name="anggota_pertama" placeholder="Nama Anggota 1" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-user"></i></span>
                                            </div>
                                            <input class="form-control" name="anggota_kedua" placeholder="Nama Anggota 2" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-user"></i></span>
                                            </div>
                                            <input class="form-control" name="link_web" placeholder="Link Website" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-user"></i></span>
                                            </div>
                                            <input class="form-control" name="link_data" placeholder="Link Data" type="text" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-file">
                                            <!-- <input type="file" name="filefoto" class="custom-file-input" id="validatedCustomFile" required> -->
                                            <input type="file" name="filefoto" required>
                                            <!-- <label class="custom-file-label" for="validatedCustomFile">Choose file...</label> -->
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group mb-0">
                                        <textarea class="form-control" name="keterangan" id="exampleTextarea" placeholder="Keterangan" rows="3" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <div class="card-footer pt-1">
                                            <button type="submit" class="btn btn-secondary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- <div class="card-footer pt-1">
                                <button type="submit" class="btn btn-secondary">Submit</button>
                            </div> -->
                        </div>
                        <!-- End of Contact Card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End of section -->
    </main>
    <!-- Footer -->
    <?php $this->load->view("_partials/footer.php") ?>
    <!-- End of Footer -->

    <!-- js -->
  	<?php $this->load->view("_partials/js.php") ?>
    <!-- END js -->

</body>

</html>