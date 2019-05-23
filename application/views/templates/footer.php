<section style="margin:0;padding:0;">
    <div class="container-fluid p-2 bgCyan2 text-white text-center" style="z-index: 2">&copy; Husnul @ <?php echo date('Y'); ?></div>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
    const errors = $('.data-errors').data('errors');
    if (errors) {
        Swal.fire({
            text: errors,
            type: 'error',
            confirmButtonText: 'Kembali'
        })
    }

    const success = $('.data-success').data('success');
    if (success) {
        Swal.fire({
            text: success,
            type: 'success',
            confirmButtonText: 'Oke'
        })
    }
</script>
</body>

</html>