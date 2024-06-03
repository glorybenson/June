
<?php require './config/function.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php if (isset($pageTitle)) {
            echo $pageTitle; } else {echo webSetting('title') ?? 'Device Service';} ?>
         Home page
    </title>
    <meta name="description" content="<?= webSetting('meta_description') ?? 'meta Desc'; ?>">
    <meta name="keyword" content="<?= webSetting('meta_keyword') ?? 'meta Keyword'; ?>">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <!-- <?php include('includes/navbar.php'); ?> -->
