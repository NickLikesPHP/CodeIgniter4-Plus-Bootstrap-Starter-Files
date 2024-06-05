<?php
if(isset($title)){
    $website_title = website_title(esc($title));
    if(isset($title_options)){
        $options = array();
        if(isset($title_options['website_name'])){$options['WEBSITE_NAME'] = esc($title_options['website_name']);}
        if(isset($title_options['seperator'])){$options['WEBSITE_NAME_SEPARATOR'] = esc($title_options['seperator']);}
        if(isset($title_options['website_name_position'])){$options['WEBSITE_NAME_POSITION'] = $title_options['website_name_position'];}
        $website_title = website_title(esc($title), $options);
    }
}else{
    $website_title = website_title();
}
?>
<!doctype html>
<html lang="en" class="vw-100 min-vh-100" data-bs-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $website_title; ?></title>
        <link rel="icon" type="image/png" href="<?= base_url('favicon.png'); ?>">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="<?= base_url('website-name.css') ?>">
        <?= $this->renderSection('top-head') ?>
    </head>
<body class="vw-100 min-vh-100">
