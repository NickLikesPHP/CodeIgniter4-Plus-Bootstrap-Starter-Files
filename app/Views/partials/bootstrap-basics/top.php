<?php
$title = $title ?? null;
$title_options = $title_options ?? null;
?>
<!doctype html>
<html lang="en" class="vw-100 min-vh-100 <?= $this->renderSection('html-classes') ?>"<?= $this->renderSection('html-attributes') ?> data-bs-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= esc(website_title($title, $title_options)); ?></title>
        <link rel="icon" type="image/png" href="<?= base_url('favicon.png'); ?>">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="<?= base_url('website-name.css') ?>">
        <?= $this->renderSection('top-head') ?>
    </head>
<body class="vw-100 min-vh-100 <?= $this->renderSection('body-classes') ?>"<?= $this->renderSection('body-attributes') ?>>
