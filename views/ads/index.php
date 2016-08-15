<!--Page for an index of advertisements-->
<h1>All Posts</h1>
    <?php foreach ($drinks->attributes as $key => $drink) { ?>
		<div class="col-md-4">
            <h3 class-"text-center post-item"><?= $drink['name'] ?></h3>
            <p class-"text-center post-item"><?= $drink['price'] ?></p>
            <p class-"text-center post-item"><?= $drink['description'] ?></p>
            <img src="/img/uploads/tmp/<?= $drink['image_url'] ?>" alt="Img"></img> 
        </div>
    <?php } ?>