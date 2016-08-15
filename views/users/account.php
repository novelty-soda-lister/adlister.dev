<!--Page for user account home-->
<div class="container">

	<section id="account">
		<div class="row">
			<?php if (isset($_SESSION['ERROR_MESSAGE'])) : ?>
                <div class="alert alert-danger">
                    <p class="error"><?= $_SESSION['ERROR_MESSAGE']; ?></p>
                </div>
                <?php unset($_SESSION['ERROR_MESSAGE']); ?>
            <?php endif; ?>
            <?php if (isset($_SESSION['SUCCESS_MESSAGE'])) : ?>
                <div class="alert alert-success">
                    <p class="success"><?= $_SESSION['SUCCESS_MESSAGE']; ?></p>
                </div>
                <?php unset($_SESSION['SUCCESS_MESSAGE']); ?>
            <?php endif; ?>

            <h2 class="title">User Info</h2>
            <p class="">Name - <?= $user->name ?> </p>
            <p class="">Username - <?= $user->username ?></p>
            <p class="">Email - <?= $user->email ?></p>

		</div>

	</section>
<!-- tj was here -->
	<section id="yourSodas">
		<div class="row">
			<div class="col-md-12">
				<h3 class="row-title">Your Sodas</h3>
			</div>
		</div>
		<div class="row">
			<!--Foreach through user's items don't forget columns(keys) for sodas -->
			<?php foreach ($drinks->attributes as $drink) : ?> 
				<div class="col-md-4 img-box">
					<!-- echo Soda name -->
					<h3 class="text-center post-item"><?= $drink['name']; ?></h3>
					<!-- echo pric -->
					<p class="text-center post-item"><?= $drink['price']; ?></p>
					<!-- echo description -->
					<p class="text-center post-item"><?= $drink['description']; ?></p>
					<!-- echo image(if possible) -->
					<img src="/img/uploads/tmp/<?= $drink['image_url'] ?>" class="center-block">
				</div>
			<?php endforeach; ?>
	</section>
</div>



