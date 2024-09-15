<?= $this->extend( 'Layouts/Main' );?>
<?= $this->section( 'content' );?>

<?php
/**
 * @since 11.09.2024
 * @author MiSCapu
 * Validations
 */
if ( isset( $validation ) ){
    $validation =   \Config\Services::validation();

    if ( $validation->hasError( 'emailFrm' ) ){
        $errorEmailFrm =   $validation->getError( 'emailFrm' );
    }

    if ( $validation->hasError( 'pwdFrm' ) ){
        $errorPwdFrm =   $validation->getError( 'pwdFrm' );
    }
}

?>
<!-- Grid Bootstrap -->

<div class="container">
    <h2 class="modal-title text-center my-lg-4"><?= isset( $title ) ? esc( $title ) : ""; ?></h2>
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-6">


            <!--
             *
             * Confirmation
             * @since 12.09.2024
             * @author MiSCapu
             -->
            <?php
                if ( session()->get( 'success' ) )
                {
                    ?>
                    <div class="alert alert-success">
                        <?= session()->get( 'success' ); ?>
                    </div>
            <?php
                }

            ?>


            <!-- form Bootstrap -->

            <form method="post">
                <div class="mb-3">
                    <label for="emailFrm" class="form-label">Email address</label>
                    <input type="email" name="emailFrm" class="form-control" id="emailFrm" aria-describedby="emailHelp" value="<?= set_value( 'emailFrm' )?>">
                    <?= isset( $errorEmailFrm ) ? "<div class='alert alert-danger' role='alert'>".$errorEmailFrm."</div>" : ""?>
                </div>
                <div class="mb-3">
                    <label for="pwdFrm" class="form-label">Password</label>
                    <input type="password" name="pwdFrm" class="form-control" id="pwdFrm">
                    <?= isset( $errorPwdFrm ) ? "<div class='alert alert-danger' role='alert'>".$errorPwdFrm."</div>" : ""?>
                </div>
<!--                <div class="mb-3 form-check">-->
<!--                    <input type="checkbox" class="form-check-input" id="exampleCheck1">-->
<!--                    <label class="form-check-label" for="exampleCheck1">Check me out</label>-->
<!--                </div>-->
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <!-- form Bootstrap End -->

            <!-- button Register -->
            <div class="my-3">
                <a href="<?= site_url(  '/register' )?>" class="btn btn-success">Register</a>
            </div>

        </div>
        <div class="col-3>

        </div>
    </div>
</div>

<!-- Grid Bootstrap End -->




<?= $this->endSection();?>


