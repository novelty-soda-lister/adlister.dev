<!--Page for an index of advertisements-->
<h1>All Posts</h1>
    	<?php foreach ($drinks->attributes as $key => $drink) { ?>
                        <div>
                            <?= $drink['name'] ?>
                            <?= $drink['price'] ?>
                            <?= $drink['description'] ?>
                        <img src="/img/uploads/tmp/<?= $drink['image_url'] ?>" alt="Img"></img> 
                    <?php } ?>