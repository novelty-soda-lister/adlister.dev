<div class="container">

    <section id="welcome">

        <div class="row">

            <div class="col-xs-12">

                <h1 class="text-center">Drink It Down!</h1>

            </div>

        </div>

    </section>

    <section id="features">

        <div class="row">

            <h3 class="section-title">Featured Items</h3>
            <!-- Placeholder for featured items.-->
            <tbody>
                <?php foreach ($drinks->attributes as $key => $drink) { ?>
                    <tr>
                        <div class="col-cs-4"><td><?= $drink['name'] ?></td></div>
                        <td><?= $drink['price'] ?></td>
                        <td><?= $drink['description'] ?></td>
                        <td><?= $drink['image_url'] ?></td>
                    </tr>
                <?php } ?>
            </tbody> 
        </div>

    </section>

</div>

