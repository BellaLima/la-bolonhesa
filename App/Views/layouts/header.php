<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php 
        if(!empty($data['style'])){
            foreach ($data['style'] as $s): 
    ?>
    <link rel="stylesheet" type="text/css" href="<?php echo 'http://'.APP_HOST.'/public/css/'.$s.'.css'; ?>">
    <?php 
        endforeach; 
        }
        ?>
    <title><?php echo TITLE; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo 'http://'.APP_HOST.'/public/css/main.css'; ?>">
</head>
<body>
