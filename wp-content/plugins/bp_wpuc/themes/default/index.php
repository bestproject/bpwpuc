<!DOCTYPE html>
<html lang="<?php echo get_locale() ?>">
<head>
    <meta charset="utf-8">
    <title><?php echo __('We are under construction', 'bp_wpuc') ?></title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="robots" content="noindex">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
          rel="stylesheet">
    <link rel="stylesheet"
          href="<?php echo get_site_url() ?>/wp-content/plugins/bp_wpuc/themes/default/assets/build/theme.css">

</head>

<body>
<div id="particles-js"></div>
<div class="content">
    <div class="wrapper">
        <h1><?php echo __('We\'re building something awesome!', 'bp_wpuc') ?></h1>
        <p>
            <?php echo __('Our website is under major reconstruction.<br>Come back soon.', 'bp_wpuc') ?>
        </p>
    </div>
</div>

<div id="loader-overlay">
    <div id="loader"></div>
</div>

<!-- Java Script
================================================== -->
<script src="<?php echo get_site_url() ?>/wp-content/plugins/bp_wpuc/themes/default/assets/build/theme.js"></script>

</body>

</html>