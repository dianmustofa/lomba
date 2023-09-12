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
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <form action="<?php echo base_url().'welcome/simpan'?>" method="post" enctype="multipart/form-data">
                                    <div class="container">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-users"></i></span>
                                                </div>
                                                <input class="form-control" name="nama_tim" placeholder="Nama Tim" type="text" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-book"></i></span>
                                                </div>
                                                <input class="form-control" name="judul_karya" placeholder="Judul Karya" type="text" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input class="form-control" name="ketua_tim" placeholder="Nama Ketua Tim" type="text" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                                                </div>
                                                <input class="form-control" name="alamat" placeholder="Alamat" type="text" required>
                                            </div>
                                        </div>
                                    
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                        </div>
                                                        <input class="form-control" id="no_hp" name="no_hp" placeholder="No Handphone" type="tel" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas fa-at"></i></span>
                                                        </div>
                                                        <input class="form-control" name="email" placeholder="Email" type="email" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user-graduate"></i></span>
                                                </div>
                                                <input class="form-control" name="universitas" placeholder="Universitas" type="text" required>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="far fa-address-card"></i></span>
                                                        </div>
                                                        <input class="form-control" name="no_mahasiswa" placeholder="No Mahasiswa" type="text" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas fa-book-open"></i></span>
                                                        </div>
                                                        <input class="form-control" name="jurusan" placeholder="Jurusan" type="text" required>
                                                    </div>
                                                </div>
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
                                                    <span class="input-group-text"><i class="fas fa-link"></i></span>
                                                </div>
                                                <input class="form-control" name="link_web" placeholder="Link Website" type="url" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-link"></i></span>
                                                </div>
                                                <input class="form-control" name="link_data" placeholder="Link Data" type="url" required>
                                            </div>
                                        </div>

                                        <!-- single upload-->
                                        <div class="row" style="margin-bottom: 12px;">
                                            <div class="col">
                                                <div class="form-group" style="display: flex; align-items: center;">
                                                    <label 
                                                        class="custom-file-label" 
                                                        for="fileInput" 
                                                        style="flex: 1; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                                                            Tidak ada file yang dipilih
                                                    </label>
                                                    <input type="file" name="fileDokumen" id="fileInput" accept=".pdf" required>
                                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                                </div>
                                                
                                                
                                                <!-- Elemen di atas (warna merah) -->
                                                <div class="text-danger">
                                                    <small class="text-muted">* Maksimum ukuran file : 10mb (.pdf)</small>
  
                                                </div>

                                            </div>

                                            <div class="col">
                                                <div class="form-group">
                                                    <div id="selectedFileName" style="margin-top: 10px;"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- multiple upload-->
                                        
                                        <!-- <div class="row" style="margin-bottom: 12px;">
                                            <div class="col">
                                                <div class="form-group" style="display: flex; align-items: center;">
                                                    <label class="custom-file-label" for="fileInput" style="flex: 1;">Pilih file ...</label>
                                                    <input type="file" name="fileDokumen" id="fileInput" accept=".pdf" multiple required>
                                                    <div class="invalid-feedback">File tidak valid</div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <div id="selectedFileNames" name="TriggerDokumen" style="margin-top: 10px;"></div>
                                                </div>
                                            </div>
                                        </div> -->

                                        
                                        <div class="form-group mb-3"> <!-- Menambahkan class mb-3 untuk memberikan margin-bottom -->
                                            <textarea class="form-control" name="keterangan" id="exampleTextarea" placeholder="Keterangan" rows="3" required></textarea>
                                        </div>

                                        <div class="form-group text-center">
                                            <div class="card-footer pt-1">
                                                <button 
                                                type="submit" 
                                                class="btn btn-secondary btn-sm" 
                                                data-toggle="modal" 
                                                data-target="#konfirmasiModal"
                                                id="submitBtn"
                                                value="Unggah"
                                                style="border-radius: 10px; width: 20%; height: 40px;">Submit</button>
                                            </div>
                                        </div>
                                        

                                        <!-- Modal Konfirmasi -->
                                        <div class="modal fade" id="konfirmasiModal" tabindex="-1" role="dialog" aria-labelledby="konfirmasiModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="konfirmasiModalLabel">Konfirmasi</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda yakin ingin mengirimkan formulir ini?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-secondary" style="width: 20%">Ya</button>
                                                        <button type="button" class="btn btn-primary" style="width: 20%" data-dismiss="modal">Batal</button>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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

    <script>
        //validasi file upload 

        //1. membatasi size dan ekstensi



        // document.addEventListener("DOMContentLoaded", function () {
        //     var fileInput = document.getElementById("fileInput");
        //     fileInput.addEventListener("change", function () {
        //         var maxSize = 10 * 1024 * 1024; // Ukuran maksimum dalam byte (10 MB)
        //         var selectedFile = this.files[0]; // Mendapatkan file yang dipilih oleh pengguna

        //         // Mendapatkan ekstensi file yang dipilih
        //         var fileExtension = selectedFile.name.split('.').pop().toLowerCase();

        //         if (fileExtension !== "pdf") {
        //             // Jika ekstensi file tidak sama dengan "pdf"
        //             alert("File yang Anda pilih harus memiliki ekstensi PDF.");
        //             fileInput.value = ""; // Mengosongkan input file
        //         } else if (selectedFile.size > maxSize) {
        //             // Jika ukuran file melebihi batas maksimum
        //             alert("File yang Anda pilih melebihi batasan ukuran (Maksimum 10 MB).");
        //             fileInput.value = ""; // Mengosongkan input file
        //         }
        //     });
        // });

        document.addEventListener("DOMContentLoaded", function () {
            var fileInput = document.getElementById("fileInput");
                

            fileInput.addEventListener("change", function () {
                var maxSize = 10 * 1024 * 1024; // Ukuran maksimum dalam byte (10 MB)
                var selectedFile = this.files[0]; // Mendapatkan file yang dipilih oleh pengguna

                // Mendapatkan ekstensi file yang dipilih
                var fileExtension = selectedFile.name.split('.').pop().toLowerCase();

                if (fileExtension !== "pdf") {
                    // Jika ekstensi file tidak sama dengan "pdf"
                    alert("File yang Anda pilih harus memiliki ekstensi PDF.");
                    fileInput.value = ""; // Mengosongkan input file
                    document.querySelector('.custom-file-label').textContent = "Tidak ada file yang dipilih"; // Mengganti label input file
                } else if (selectedFile.size > maxSize) {
                    // Jika ukuran file melebihi batas maksimum
                    alert("File yang Anda pilih melebihi batasan ukuran (Maksimum 10 MB).");
                    fileInput.value = ""; // Mengosongkan input file
                    document.querySelector('.custom-file-label').textContent = "Tidak ada file yang dipilih"; // Mengganti label input file
                    selectedFileName.innerHTML = ''; 
                }
            });
        });


        //2. menampilkan file yg akan di upload (single upload)

        // Menangkap perubahan saat file dipilih =======================

        

        const fileInput = document.getElementById("fileInput");
        const selectedFileName = document.getElementById("selectedFileName");

        fileInput.addEventListener("change", function () {
            // Memeriksa apakah ada file yang dipilih
            if (fileInput.files.length > 0) {
                // Menampilkan nama file di bawah input file
                selectedFileName.innerHTML = `<a href="#" id="view" target="_blank">Lihat Dokumen</a>`; 
                
                // Menambahkan event click ke tautan "Download"
                const downloadLink = document.getElementById("view");
                downloadLink.addEventListener("click", function () {
                    // Mengarahkan tautan ke file yang dipilih
                    window.open(URL.createObjectURL(fileInput.files[0]), '_blank');
                });
            } 
            
            else {
                // Jika tidak ada file yang dipilih, hapus teks di bawah input file
                selectedFileName.innerHTML = "";
            }
        });

        // menampilkan nama file ==============================

        document.getElementById('fileInput').addEventListener('change', function () {
            // Mendapatkan nama file yang dipilih
            const fileName = this.files[0].name;
            
            // Memperbarui label input dengan nama file yang dipilih
            const label = document.querySelector('.custom-file-label');
            label.textContent = fileName;
        });


         //3. menampilkan file yg akan di upload (multiple upload)

        // const fileInput = document.getElementById("fileInput");
        // const selectedFileNames = document.getElementById("selectedFileNames");
        // let filesList = []; // Menyimpan daftar file yang dipilih
        // let nextFileId = 0; // Menyimpan id unik untuk setiap file

        // fileInput.addEventListener("change", function () {
        //     // Mendapatkan daftar file yang dipilih =================
        //     const files = fileInput.files;

        //     // Memeriksa apakah ada file yang dipilih =================

        //     if (files.length > 0) {
        //         for (let i = 0; i < files.length; i++) {
        //             const file = files[i];
        //             const fileId = nextFileId++;

        //             // Menambahkan file ke daftar file yang dipilih ==============

        //             filesList.push({ id: fileId, file });
                    
        //             // Menampilkan nama file di bawah input file beserta tombol "Hapus" =============

        //             selectedFileNames.innerHTML += `<div>
        //                 <a href="#" class="view-file" data-id="${fileId}" target="_blank">${file.name}</a>
        //                 <span class="delete-file" data-id="${fileId}">Hapus</span>
        //             </div>`;
        //         }

        //         // Menambahkan event click ke tautan "View" untuk setiap file ===================

        //         const viewLinks = document.querySelectorAll(".view-file");
        //         viewLinks.forEach(function (link) {
        //             link.addEventListener("click", function (event) {
        //                 event.preventDefault();
        //                 const fileId = event.target.getAttribute("data-id");

        //                 // Mengarahkan tautan ke file yang dipilih ====================

        //                 const selectedFile = filesList.find(file => file.id == fileId);
        //                 if (selectedFile) {
        //                     window.open(URL.createObjectURL(selectedFile.file), '_blank');
        //                 }
        //             });
        //         });

        //         // Menambahkan event click ke elemen <span> "Hapus" untuk menghapus file ================

        //         const deleteButtons = document.querySelectorAll(".delete-file");
        //         deleteButtons.forEach(function (button) {
        //             button.addEventListener("click", function (event) {
        //                 const fileId = event.target.getAttribute("data-id");

        //                 // Menghapus file dari daftar berdasarkan id ======================
        //                 filesList = filesList.filter(file => file.id != fileId);

        //                 // Memperbarui tampilan =================

        //                 const parentDiv = event.target.parentElement;
        //                 parentDiv.remove(); // Menghapus baris yang berisi file yang dihapus

        //                 // Memperbarui label input =====================

        //                 fileInput.value = null;

        //                 // Memperbarui jumlah file yang dipilih ======================

        //                 updateSelectedFileCount();
        //             });
        //         });

        //         // Memperbarui jumlah file yang dipilih =================

        //         updateSelectedFileCount();
        //     }
        // });

        // // Menampilkan jumlah file yang dipilih di label input ==================

        // function updateSelectedFileCount() {
        //     const label = document.querySelector('.custom-file-label');
        //     label.textContent = filesList.length + ' file dipilih';
        // }
        
         // Fungsi untuk menampilkan dialog konfirmasi
         function konfirmasiSubmit(event) {
            event.preventDefault(); // Mencegah pengiriman formulir secara otomatis

            // var konfirmasi = confirm("Apakah Anda yakin ingin mengirimkan formulir ini?");
            // if (konfirmasi) {
            //     // Jika pengguna memilih "OK", submit formulir secara manual
            //     document.querySelector("form").submit();
            // }
        }

        // Tambahkan event listener ke tombol "Submit"
        var submitButton = document.getElementById("submitBtn");
        submitButton.addEventListener("click", konfirmasiSubmit);

   
    </script>



</body>

</html>