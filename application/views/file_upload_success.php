<!DOCTYPE html>
<html>
<head>
    <title>File Upload Success</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">


    <!-- Tambahkan CSS SweetAlert di sini -->
</head>
<body>
    <script>
        // Tampilkan SweetAlert di sini
        Swal.fire({
            icon: 'success',
            title: 'File berhasil diunggah',
            text: 'File telah berhasil diunggah ke server.',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect ke halaman lain jika diperlukan
                window.location.href = '<?php echo base_url(); ?>'; // Ganti dengan URL yang sesuai
            }
        });
    </script>
</body>
</html>
