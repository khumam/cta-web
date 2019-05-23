<?php
echo "<div class='data-errors' data-errors='" . $this->session->flashdata('gagal') . "'></div>";
?>
<?php
echo "<div class='data-success' data-success='" . $this->session->flashdata('sukses') . "'></div>";
?>

<section style="margin:0;padding:0; min-height: 85vh; width:100%;">
	<div class="jumbotron jumbotron-fluid d-flex align-items-center bgGray" style="height:85vh; background:white">
		<div class="container text-center" style="z-index: 2;">
			<h1 class="display-4">Selamat Datang</h1>
			<p class="lead mb-5">Silahkan klik tombol mulai untuk memulai mengerjakan soal</p>
			<button data-toggle="modal" data-target="#loginModal"
				class="noRadius btn bgCyan mr-2 btnHover">Mulai</button>
			<a href="<?php echo base_url('dashboard/logout'); ?>" class="noRadius btn bgCyan2 ml-2 btnHover">Keluar</a>

		</div>
	</div>
</section>
