<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Default :: <?= $title ?? ''; ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="<?= base_url(); ?>/images/framework.png">
</head>
<body>


<?php get_alerts(); ?>

<?= $this->content; ?>

<script src="<?= PATH; ?>/assets/bootstrap/js/bootstrap.min.js"></script>

<?php if (DEBUG): ?>
    <?php dump(db()->getQueries()); ?>
<?php endif; ?>

</body>
</html>
