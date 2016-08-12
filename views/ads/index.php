<!--Page for an index of advertisements-->
<h1>All Posts</h1>
    	<div class="col-md-4">
                <?php foreach ($drinks->attributes as $key => $drink) { ?>
                        <p class-"text-center"><?= $drink['name'] ?></p>
                        <p class-"text-center"><?= $drink['price'] ?></p>
                        <p class-"text-center"><?= $drink['description'] ?></p>
                        <img src="/img/uploads/tmp/<?= $drink['image_url'] ?>" alt="Img"></img> 
                    <?php } ?>
            </div>