<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= isset( $title ) ? esc( $title ) : "";?></title>
    <link rel="stylesheet" href="<?= base_url( 'assets/css/bootstrap.min.css' )?>">
</head>
<body>

<?= $this->renderSection( 'content' );?>


<?= $this->renderSection( 'scripts' );?>

</body>
</html>