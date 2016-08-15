<div class="container">

	<section id="login">

		<div class="row">

			<h1 class="section-title">Shoot Us A Line</h1>

			<div class="col-md-6 col-md-offset-3">

				<p>Please fill out the fields below</p>
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

				<form role="form" action="" method="post">
					<div class="col-md-12">
						<div class="form-group">
							<label for="InputName">Your Name</label>
							<div class="input-group">
								<input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
								<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
							</div>
						</div>
						
						<div class="form-group">
							<label for="InputEmail">Your Email</label>
							<div class="input-group">
								<input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required  >
								<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
							</div>
						</div>
						
						<div class="form-group">
							<label for="InputMessage">Message</label>
							<div class="input-group">
								<textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
								<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
							</div>
						</div>

						<input type="submit" name="submit" id="submit" value="Submit" class="btn wow tada btn-embossed btn-primary pull-right">
					</div>
				</form>
			

			</div>

		</div>

	</section>

</div>