<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title; ?></title>
    <link href="css/styles.css" type="text/css" rel="stylesheet"></head>
    <body>
    <header>
        <div class="header-inner"><a href="../index.php">
                <img id="logo" src="pictures/logo.jpg" alt="logo"></a> </div>
            <nav>
                <ul class="navigation">
                    <?php
                    echo my_nav($nav);
                    ?>
                </ul>
            </nav>
    </header>
    <h1><?php echo $headline; ?></h1>

