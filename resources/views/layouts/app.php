<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= \App\Framework\Utilities\Config::read('app.title') ?></title>
    <link rel="stylesheet" href="<?= $this->asset('/css/bootstrap-4.4.1/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= $this->asset('/css/mystyle.css') ?>">
</head>
<body>
    <?= $this->insert('layouts/menu') ?>

    <div class="container">
        <?= $this->section('content') ?>
    </div>

    <script src="<?= $this->asset('/js/jquery-3.4.1.min.js') ?>"></script>
    <script src="<?= $this->asset('/js/bootstrap-4.4.1/bootstrap.min.js') ?>"></script>

</body>
</html>