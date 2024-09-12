<?= $this->extend( 'Layouts/Main' );?>
<?= $this->section( 'content' );?>


<!-- Grid Bootstrap -->

<div class="container">
    <h2 class="modal-title text-center my-lg-4"><?= isset( $title ) ? esc( $title ) : ""; ?></h2>
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-6">

            <!-- form Bootstrap -->

            <form method="post">
                <div class="mb-3">
                    <label for="nameFrm" class="form-label">User Name</label>
                    <input type="text" name="nameFrm" class="form-control" id="nameFrm" value="<?= set_value( 'nameFrm' )?>">
                </div>

                <div class="mb-3">
                    <label for="emailFrm" class="form-label">Email address</label>
                    <input type="email" name="emailFrm" class="form-control" id="emailFrm" value="<?= set_value( 'emailFrm' )?>">
                </div>

                <div class="mb-3">
                    <label for="pwdFrm" class="form-label">Password</label>
                    <input type="password" name="pwdFrm" class="form-control" id="pwdFrm">
                </div>

                <div class="mb-3">
                    <label for="cfPwdFrm" class="form-label">Confirm Password</label>
                    <input type="password" name="cfPwdFrm" class="form-control" id="cfPwdFrm">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <!-- form Bootstrap End -->

        </div>
        <div class="col-3>

        </div>
    </div>
</div>

<!-- Grid Bootstrap End -->

<?= $this->endSection();?>


