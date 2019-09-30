<div class="container">
    <div class="row mt-3">
        <div class="col mt-6">
            <div class="card">
                <div class="card-header">
                    <h3>Create account user</h3>
                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="card body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="<?php base_url('') ?>" method="post">
                        <div class="form-group">
                            <label for="username">Username*</label>
                            <input id="username" class="form-control <?php echo form_error('username') ? 'is-invalid' : '' ?>" type="text" name="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password*</label>
                            <input id="password" class="form-control  <?php echo form_error('password') ? 'is-invalid' : '' ?>" type="password" name="password">
                        </div>
                        <div class=" form-group">
                            <label for="level">Level*</label>
                            <select id="level" class="form-control" name="level" value="<?= $user['level']; ?>">
                                <option value="admin">admin</option>
                                <option value="user">user</option>
                            </select>
                        </div>

                        <button type="submit" nama="submit" class="btn btn-primary float-right">Create Account</button>
                        <a href="<?php echo site_url('login') ?>" class="btn btn-success"><i class="fa fa-arrow-left"></i>
                            Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>