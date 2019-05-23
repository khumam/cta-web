<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-center mx-3">Silahkan daftar terlebih dahulu untuk mulai menggunakan Aplikasi</p>
                <form action="<?php echo base_url('home/register'); ?>" method="post" class="mx-3">
                    <input type="text" name="name" placeholder="Nama Lengkap" class="mt-3 form-control noRadius" required>
                    <input type="text" name="email" placeholder="Email" class="mt-3 form-control noRadius" required>
                    <input type="password" name="pass" placeholder="Password" class="mt-3 form-control noRadius" required>
                    <small>Password minimal 6 karakter</small>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary noRadius">Register</button>
                </form>
                <button type="button" class="btn text-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>