<?= $this->extend( 'Layouts/Main' );?>
<?= $this->section( 'content' );?>


<!-- NavBar Bootstrap -->
<?= $this->include( 'Layouts/NavBar' ); ?>
<!-- NavBar Bootstrap End -->



<!-- Grid Bootstrap -->

<div class="container">
    <h2 class="modal-title text-center my-lg-4"><?= isset( $title ) ? esc( $title ) : ""; ?></h2>
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-6">

            <!-- Table Bootstrap -->

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>

            <!-- Table Bootstrap End -->

        </div>
        <div class="col-3>

        </div>
    </div>
</div>

<!-- Grid Bootstrap End -->

<?= $this->endSection();?>


