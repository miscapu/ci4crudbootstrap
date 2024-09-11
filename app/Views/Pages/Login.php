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
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
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


