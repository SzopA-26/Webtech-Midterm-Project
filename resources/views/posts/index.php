<?php $this->layout('layouts/app') ?>

<?php foreach ($posts as $post) : ?>
<div>
    <h3><?= $post->title ?></h3>
    <p><?= $post->detail ?></p>
</div>
<?php endforeach; ?>