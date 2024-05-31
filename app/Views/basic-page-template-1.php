<?= $this->extend('layouts/bootstrap-starter'); ?>

<?= $this->section('top-head'); ?>
<link rel="stylesheet" href="/my-stylesheet1.css">
<link rel="stylesheet" href="/my-stylesheet2.css">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Hello World</h1>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('bottom-above-bootstrap-js'); ?>
<script src="js/my-script1.js"></script>
<?= $this->endSection(); ?>

<?= $this->section('bottom-below-bootstrap-js'); ?>
<script src="js/my-script2.js"></script>
<?= $this->endSection(); ?>
