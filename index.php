<?php
 include('config.php');
include('includes/header.php'); ?>
    <p style="width:40%">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    <aside> <?php $photos = array(
                'photo1',
                'photo2',
                'photo3',
                'photo4',
                'photo5'
            );

            $photos[0] = 'photo1';
            $photos[1] = 'photo2';
            $photos[2] = 'photo3';
            $photos[3] = 'photo4';
            $photos[4] = 'photo5';

            $i = rand(0, 4);
            $selected_image = '' . $photos[$i] . '.jpg';
            echo '<img class="img" src="images/' . $selected_image . '"  alt=" ' . $photos[$i] . '">'; ?></aside>
<?php include('includes/footer.php'); ?>