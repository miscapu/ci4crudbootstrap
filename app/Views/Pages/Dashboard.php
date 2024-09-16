<?= $this->extend( 'Layouts/Main' );?>
<?= $this->section( 'content' );?>


<!-- NavBar Bootstrap -->
<?= $this->include( 'Layouts/NavBar' ); ?>
<!-- NavBar Bootstrap End -->

<!-- Grid Bootstrap -->

<h2 class="modal-title text-center my-4"><?= isset( $title ) ? esc( $title ) : "Document"; ?></h2>

<div class="container">
    <div class="row">
        <div class="col-2">

        </div>
        <div class="col-8">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody class = "usersData">

                </tbody>
            </table>
        </div>
        <div class="col-2">

        </div>
    </div>
</div>

<!-- Grid Bootstrap End -->

<?= $this->endSection();?>


<?= $this->section( 'scripts' ); ?>


<script>

    /**
     * Show all users
     * @since 15.09.2024
     * @author MiSCapu
     */
    $(document).ready(function () {
       loadUsers();
    });


    /**
     * Function loadUsers than show all users
     * @since 15.09.2024
     * @author MiSCapu
     */
    function loadUsers()
    {
        $.ajax({
            method: "GET",
            url: "<?= site_url( 'show-all' )?>",
            success: function (response) {
                $.each(response.users, function (key,value) {
                    //console.log(value['name']);
                    $('.usersData').append('<tr>\
                        <td class="user_id">'+value['id']+'</td>\
                        <td>'+value['name']+'</td>\
                        <td>'+value['email']+'</td>\
                        <td>'+value['created_at']+'</td>\
                        <td>\
                                <a href="#" class="btn badge btn-info view_btn">View</a>\
                                <a href="#" class="btn badge btn-primary view_btn">Edit</a>\
                                <a href="#" class="btn badge btn-danger view_btn">Delete</a>\
                        </td>\
                        </tr>');
                });

                <?php if ( session()->getFlashdata( 'hello' ) ): ?>
                alertify.set( 'notifier', 'position', 'top-right' );
                alertify.success("<?= session()->getFlashdata( 'hello' ); ?>");
                <?php endif; ?>
            }
        });
    }

</script>

<?= $this->endSection(); ?>


