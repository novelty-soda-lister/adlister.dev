<div class="container-fluid">

    <section id="welcome">

        <div class="row">

            <div class="col-xs-12">

                <h1 class="text-center">Welcome!</h1>

            </div>

        </div>

    </section>

    <section id="features">

        <div class="row">

            <h3 class="section-title">Featured Items</h3>
            <!-- Placeholder for featured items.-->
                    <?php foreach ($drinks->attributes as $key => $drink) { ?>
                        <div>
                            <?= $drink['name'] ?>
                            <?= $drink['price'] ?>
                            <?= $drink['description'] ?>
                        <img src="<?= $drink['image_url'] ?>" alt="Img"></img> 
                    <?php } ?>
                    <?php var_dump($drink['image_url']) ?>
                        </div>
            </div>
            
    </section>

</div>

