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
                    <label for="nameFrm" class="form-label">Product Name</label>
                    <input type="text" name="nameFrm" class="form-control" id="nameFrm" value="<?= set_value( 'nameFrm' )?>">
                </div>

                <div class="mb-3">
                    <label for="priceFrm" class="form-label">Price</label>
                    <input type="text" name="priceFrm" class="form-control" id="priceFrm" value="<?= set_value( 'priceFrm' )?>">
                </div>

                <div class="mb-3">
                    <label for="qtyFrm" class="form-label">Quantity</label>
                    <input type="number" name="qtyFrm" class="form-control" id="qtyFrm">
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


