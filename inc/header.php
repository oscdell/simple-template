<?php
# get title variable from before page and set
# will use in <title> and open graph
if (empty($title)) {
    $title = '';
    $title .= ''; # default to this if not filled in before
} else {
    $title = $title;
}
?>

<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta name="robots" content="nofollow" />
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php
            if (empty($desc)){
                echo ''; # default if not filled in
            } else {
                echo $desc;
            }
        ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:url" content="<?php echo $og_url; ?>" />
        <meta property="og:type"  content="article" />
        <meta property="og:title" content="<?php echo $title; ?>" />
        <meta property="og:description" content="<?php echo $desc ?>" />
        <meta property="og:image" content="<?php echo $og_img ?>" />

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
        <body>
