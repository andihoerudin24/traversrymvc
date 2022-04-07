<?php  require APPROOT . '/views/inc/header.php' ?>


<h1><?php echo $data['title'] ?></h1>
<ul>
    <?php foreach ($data['posts'] as $post) : ?>
        <li>
            <a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->id; ?>">
                <?php echo $post->title; ?>
            </a>
        </li>
     <?php endforeach; ?>   
</ul>

<?php  require APPROOT . '/views/inc/footer.php' ?>