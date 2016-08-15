<div class="container-fluid">

    <section id="welcome">

        <div class="row">

            <div class="col-xs-12">

                <h1 class="text-center">Welcome to SodaLister</h1>
                <h3 class="text-center">Drinkt it Down!</h3>

            </div>

        </div>

    </section>

    <section id="features">

        <div class="row">

            <h3 class="section-title">Featured Items</h3>
            <!-- Placeholder for featured items.-->
                <?php foreach ($featured->attributes as $key => $drink) { ?>
                    <div class="col-md-4">
                        <h3 class-"text-center post-item"><?= $drink['name'] ?></h3>
                        <p class-"text-center post-item"><?= $drink['price'] ?></p>
                        <p class-"text-center post-item"><?= $drink['description'] ?></p>
                        <img src="/img/uploads/tmp/<?= $drink['image_url'] ?>" alt="Img"></img> 
                    </div>
                <?php } ?>
    </section>

</div>

