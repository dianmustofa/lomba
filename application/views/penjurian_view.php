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
                                        <h1 class="display-2 mb-3">Data Peserta Lomba</h1>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <form action="<?php echo base_url().'welcome/simpan'?>" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    <div class="input-group mb-4">
                                        <input class="form-control" id="searchInput" placeholder="Cari Tim ..." type="text">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                                        </div>
                                    </div>
                                </div>
                                    
                                    <!-- <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead class="thead-inverse">
                                                        <tr>
                                                            <th class="h4 py-4" style="width: 3%;">No</th>
                                                            <th class="h4 py-4" >Nama Tim</th>
                                                            <th class="h4 py-4">Universitas</th>
                                                            <th class="h4 py-4">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            
                                                            <td class="font-weight-light">1</td>
                                                            <td class="font-weight-light">100 components</td>
                                                            <td class="font-weight-light">100 components</td>
                                                            <th class="py-4"><a href="https://themesberg.com/product/pixel-lite-free-bootstrap-4-ui-kit" role="button" target="_blank" class="btn btn-sm btn-outline-dark font-weight-bold">Lihat Data</a></th>
                                                        </tr>
                                                     
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead class="thead-inverse">
                                                        <tr>
                                                            <th class="h5 py-4" style="width: 1%;">No</th>
                                                            <th class="h5 py-4" style="width: 5%;">Nama Tim</th>
                                                            <th class="h5 py-4" style="width: 5%;">Judul Karya</th>
                                                            <th class="h5 py-4" style="width: 5%;">Link Website</th>
                                                            <th class="h5 py-4" style="width: 5%;">Link Data</th>
                                                            <th class="h5 py-4" style="width: 3%;">Dokumen</th>
                                                            <th class="h5 py-4">Profil Tim</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                        <?php 
                                                            $nomor = 1; // Inisialisasi nomor
                                                            foreach ($peserta as $p): ?>
                                                                <tr>
                                                                    <td class="font-weight-light"><?php echo $nomor; ?></td>
                                                                    <td class="font-weight-light show-details" style="cursor: pointer; text-decoration: underline; color: blue;"><a href="#" class="get-detail" data-id="<?= $p->id; ?>" data-toggle="modal" data-target="#pesertaModal"><?= $p->nama_tim; ?></a></td>
                                                                    <td class="font-weight-light"><?= $p->judul_karya; ?></td>
                                                                    <!-- <td class="font-weight-light" >
                                                                        <a href="<?php echo $team->link_web; ?>" target="_blank" style="cursor: pointer; text-decoration: underline; color: blue;"><?php echo $team->link_web; ?></a>
                                                                    </td>
                                                                    <td class="font-weight-light">
                                                                        <a href="<?php echo $team->link_data; ?>" target="_blank" style="cursor: pointer; text-decoration: underline; color: blue;"><?php echo $team->link_data; ?></a>
                                                                    </td>
                                                                    <td class="font-weight-light">
                                                                        <a href="<?php echo $team->dokumen; ?>" target="_blank" style="cursor: pointer; text-decoration: underline; color: blue;"><?php echo $team->dokumen; ?></a>
                                                                    </td> -->
                                                                    <th><a role="button" class="btn btn-sm btn-outline-dark font-weight-bold">Lihat Data</a></th>
                                                                        <!-- Add your action button here -->
                                                                    </th>
                                                                </tr>
                                                        <?php 
                                                            $nomor++; // Tambahkan 1 pada nomor setiap iterasi
                                                            endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <!-- Modal -->
                                    <div class="modal fade" id="pesertaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Detail Peserta</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="nama_tim">Nama Tim</label>
                                                            <input type="text" class="form-control" id="nama_tim" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="judul_karya">Judul Karya</label>
                                                            <input type="text" class="form-control" id="judul_karya" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="alamat">Alamat</label>
                                                            <input type="text" class="form-control" id="alamat" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="universitas">Universitas</label>
                                                            <input type="text" class="form-control" id="universitas" readonly>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    <div id="dataModal" class="modal fade" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    
                                                    <div class="nav-wrapper position-relative">

                                                        <h3>Profil Tim</h3>
                                                        <div id="timDetail"></div>

                                                        <!-- <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-text" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-text-1-tab" data-toggle="tab" href="#tabs-text-1" role="tab" aria-controls="tabs-text-1" aria-selected="true">Profil Ketua</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-2-tab" data-toggle="tab" href="#tabs-text-2" role="tab" aria-controls="tabs-text-2" aria-selected="false">Anggota</a>
                                                            </li>
                                                        </ul> -->
                                                        
                                                    </div>

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Tempatkan data tim yang ingin ditampilkan di sini -->
                                                    
                                                    <h5>Ketua Tim</h5>

                                                    <div class="container mt-3 mt-sm-0">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="nama">Nama</label>
                                                                    <input type="text" id="nama" placeholder="Disabled" class="form-control" disabled />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="alamat">Alamat</label>
                                                                    <input type="text" id="alamat" placeholder="Disabled" class="form-control" disabled />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6"> <!-- Ubah menjadi col-md-6 agar "No Telp" dan "Email" bersebelahan -->
                                                                <div class="form-group">
                                                                    <label for="noTelp">No Handphone</label>
                                                                    <input type="text" id="noTelp" placeholder="Disabled" class="form-control" disabled />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6"> <!-- Kolom kedua untuk "Email" -->
                                                                <div class="form-group">
                                                                    <label for="email">Email</label>
                                                                    <input type="text" id="email" placeholder="Disabled" class="form-control" disabled />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="nama">Universitas</label>
                                                                    <input type="text" id="universitas" placeholder="Disabled" class="form-control" disabled />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6"> <!-- Ubah menjadi col-md-6 agar "No Telp" dan "Email" bersebelahan -->
                                                                <div class="form-group">
                                                                    <label for="noTelp">No Mahasiswa</label>
                                                                    <input type="text" id="nomahasiswa" placeholder="Disabled" class="form-control" disabled />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6"> <!-- Kolom kedua untuk "Email" -->
                                                                <div class="form-group">
                                                                    <label for="email">Jurusan</label>
                                                                    <input type="text" id="jurusan" placeholder="Disabled" class="form-control" disabled />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <hr>
                                                    <h5 class="mt-3">Anggota</h5>
                                                   

                                                    <div class="container mt-3 mt-sm-0">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="nama">Anggota 1</label>
                                                                    <input type="text" id="anggota1" placeholder="Disabled" class="form-control" disabled />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="alamat">Anggota 2</label>
                                                                    <input type="text" id="anggota1" placeholder="Disabled" class="form-control" disabled />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
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

$(document).ready(function(){
	$('.view_data').click(function(){
		var data_id = $(this).data("id")
		$.ajax({
			url: "proses.php",
			method: "POST",
			data: {data_id: data_id},
			success: function(data){
				$("#detail_user").html(data)
				$("#dataModal").modal('show')
			}
		})
	})
})




        // $(document).ready(function() {
        //     // Fungsi untuk menampilkan modal dengan data tim yang sesuai
        //     function tampilkanModal(namaTim, namaKetua, universitas, alamat) {
        //         // Isi modal dengan data tim
        //         var modalBody = `
        //             <p>Nama Tim: ${namaTim}</p>
        //             <!-- Tambahkan informasi tambahan sesuai kebutuhan -->
        //         `;
                
        //         $("#nama").val(namaKetua);
        //         $("#universitas").val(universitas);
        //         $("#alamat").val(alamat);

        //         $("#timDetail").html(modalBody);

        //         // Tampilkan modal
        //         $("#dataModal").modal("show");
        //     }

        //     // Tangani klik pada elemen dengan kelas 'show-details'
        //     $("table").on("click", "td.show-details", function() {
        //         var namaTim = $(this).text();
        //         var namaKetua = $(this).closest("tr").find("td:nth-child(3)").text();
        //         var universitas = $(this).closest("tr").find("td:nth-child(3)").text();
        //         var alamat = $(this).closest("tr").find("td:nth-child(3)").text();
        //         tampilkanModal(namaTim, namaKetua, universitas, alamat);
        //     });
        // });


        // $(document).ready(function() {
        //     // Fungsi untuk menampilkan modal dengan data tim yang sesuai
        //     function tampilkanModal(namaTim) {
        //         // Isi modal dengan data tim
        //         var modalBody = `
        //             <p>Nama Tim : ${namaTim}</p>
        //             <!-- Tambahkan informasi tambahan sesuai kebutuhan -->
        //         `;
        //         $("#timDetail").html(modalBody);

        //         // Tampilkan modal
        //         $("#dataModal").modal("show");
        //     }

        //     // Tangani klik tombol "Lihat Data"
        //     $("table").on("click", "a.btn-outline-dark", function() {
        //         var namaTim = $(this).closest("tr").find("td:nth-child(2)").text();
        //         tampilkanModal(namaTim);
        //     });
        // });

        // document.addEventListener('DOMContentLoaded', function () {
        //     // Ambil referensi ke tab "Profil Ketua"
        //     var tabProfilKetua = document.getElementById('tabs-text-1-tab');
            
        //     // Ambil referensi ke konten yang ingin ditampilkan
        //     var kontenProfilKetua = document.getElementById('tabs-text-1');
            
        //     // Tambahkan event listener untuk menangani klik pada tab "Profil Ketua"
        //     tabProfilKetua.addEventListener('click', function () {
        //         // Periksa apakah konten belum ditampilkan
        //         if (kontenProfilKetua.style.display === 'none') {
        //             // Tampilkan konten
        //             kontenProfilKetua.style.display = 'block';
        //         }
        //     });
        // });


        //bentuk 1

        // $(document).ready(function() {
        //     // Fungsi untuk menampilkan modal dengan data tim yang sesuai
        //     function tampilkanModal(namaTim, universitas) {
        //         // Isi modal dengan data tim
        //         var modalBody = `
        //             <p>Nama Tim: ${namaTim}</p>
        //             <p>Universitas: ${universitas}</p>
        //             <!-- Tambahkan informasi tambahan sesuai kebutuhan -->
        //         `;
        //         $("#timDetail").html(modalBody);

        //         // Tampilkan modal
        //         $("#dataModal").modal("show");
        //     }

        //     // Tangani klik tombol "Lihat Data"
        //     $("table").on("click", "a.btn-outline-dark", function() {
        //         var namaTim = $(this).closest("tr").find("td:nth-child(2)").text();
        //         var universitas = $(this).closest("tr").find("td:nth-child(3)").text();
        //         tampilkanModal(namaTim, universitas);
        //     });
        // });

        // Fungsi untuk melakukan pencarian berdasarkan nama tim
        function cariTim() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.querySelector("table");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1]; // Mengambil kolom Nama Tim
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

        // Tangani perubahan pada input pencarian
        document.getElementById("searchInput").addEventListener("keyup", cariTim);


    </script>




</body>

</html>