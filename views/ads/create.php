<div class="container">

	<section id="create">

		<div class="row">

			<h1 class="section-title">Add Your Product</h1>

			<div class="col-md-6 col-md-offset-3">

				<p>Please fill out the information below so we can create your post.</p>
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

				<form method="POST" action="" enctype="multipart/form-data" data-validation data-required-message="This field is required">

					<div class="form-group">
					    <input type="text" class="form-control" id="name" name="name" placeholder="Product Name" data-required>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="price" name="price" placeholder="Price" data-required>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="description" name="description" placeholder="Product Description" data-required>
					</div>
					<div class="form-group">
					    <p>Select image to upload:</p>
					    <input type="file" class="form-control" name="fileToUpload" id="fileToUpload">
					</div>
					<div class="row">
						<div class="col-sm-6 text-right">
							<button type="submit" class="btn btn-primary">Post</button>
						</div>
					</div>
				</form>
			</div>

		</div>

	</section>

</div>