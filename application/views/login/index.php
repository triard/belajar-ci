<?=
    form_open('login/proses_login');
?>

<div class="container py-5">
    <div class="row">
        <div class="col-md 12">
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <div class="card rounded-6">
                        <div class="card-header">
                            <h3>Login</h3>
                        </div>
                        <div class="card-body">
                            <form action="" role="form" autocomplete="off" id="fromLogin" class="form" method="post">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="username" id="username" required="">
                                    <div class="invalid-feedback">Oops, you missed the one.</div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" name="password" id="password" required="" autocomplete="new-password">
                                    <div class="invalid-feedback">Enter your password too!.</div>
                                </div>
                                <button type="submit" class="btn btn-success btn-block mt-5"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp; Login</button>
                                <a class="btn btn-warning btn-block mt-5" href="<?= base_url() . 'create/'; ?>">
                                    Sign Up
                                </a>
                        </div>
                    </div>
                    <div class="alert alert-secondary mt-3">
                        <h5 class="text-center align-middle">
                            <?php
                            // Cek apakah terdapat session nama message
                            if ($this->session->flashdata('message')) { // Jika ada
                                echo $this->session->flashdata('message'); // Tampilkan pesannya
                            } else {
                                echo "Masukkan Username dan Password";
                            }
                            ?>
                        </h5>
                    </div>


                </div>
                </form>
            </div>

        </div>

    </div>
</div>



<?=
    form_close();
?>