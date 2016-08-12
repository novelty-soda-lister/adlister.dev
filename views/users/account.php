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

            <!--Need to see if new user object is Authorized (maybe if using Auth?) end if statement -->
            <?php if($user->id == Auth::id()) : ?>
            <div class="col-sm-6 text-center">
            <a href="views/users/account/edit?id=<?= $user->id; ?>" class="btn-primary">Edit Profile</a>
        	</div>
       	 	<?php endif; ?>

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
		</div>
		<!-- Maybe see if we can requir the create file and allow user to create from account page -->
		<?php if ($user->id == Auth::id()) : ?>
		<div class="row text-center">
			<a href="/create">Create Post</a>
		</div>
		<?php endif; ?>
	</section>
</div>



