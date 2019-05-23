<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-center mx-3">Silahkan login untuk masuk ke aplikasi</p>
                <form action="<?php echo base_url('Home/login'); ?>" method="post" class="mx-3">
                    <input type="text" name="email" placeholder="Email" class="form-control noRadius" required>
                    <input type="password" name="pass" placeholder="Password" class="mt-3 form-control noRadius" required>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary noRadius">Login</button>
                </form>
                <button type="button" class="btn text-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>