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
            <div class="col-md-4">
                <?php foreach ($featured->attributes as $key => $drink) { ?>
                        <p class-"text-center"><?= $drink['name'] ?></p>
                        <p class-"text-center"><?= $drink['price'] ?></p>
                        <p class-"text-center"><?= $drink['description'] ?></p>
                        <img src="/img/uploads/tmp/<?= $drink['image_url'] ?>" alt="Img"></img> 
                    <?php } ?>
            </div>
            
    </section>

</div>

