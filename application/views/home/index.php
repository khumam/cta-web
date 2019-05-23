<?php
echo "<div class='data-errors' data-errors='" . $this->session->flashdata('gagal') . "'></div>";
?>
<?php
echo "<div class='data-success' data-success='" . $this->session->flashdata('sukses') . "'></div>";
?>

<section style="margin:0;padding:0; min-height: 85vh; width:100%;">
    <div class="jumbotron jumbotron-fluid backgroundUtama d-flex align-items-center">
        <div class="container text-center" style="z-index: 2;">
            <h1 class="display-4 text-white">Selamat Datang</h1>
            <p class="lead text-white mb-5">Selamat datang di Computer Assisted Test berbasis Web Application</p>
            <button data-toggle="modal" data-target="#loginModal" class="noRadius btn bgCyan mr-2 btnHover">Login Untuk Memulai</button>
            <button data-toggle="modal" data-target="#registerModal" class="noRadius btn bgCyan2 ml-2 btnHover">Daftar</button>

        </div>
    </div>
</section>