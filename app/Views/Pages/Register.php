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
                    <input type="text" name="nameFrm" class="form-control" id="nameFrm">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="emailFrm" class="form-control" id="exampleInputEmail1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="pwdFrm" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                    <input type="password" name="pwdFrm" class="form-control" id="exampleInputPassword1">
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


