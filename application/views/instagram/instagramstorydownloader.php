	<div class="container mtop content">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<form action="" method="post">
					<div class="input-group">
						<input type="text" class="form-control bg-light border-0 small" placeholder="Enter Instagram Username..." aria-label="Search" aria-describedby="basic-addon2" name="id" autocomplete="off" value="<?= $this->input->post('id'); ?>">
						<div class="input-group-append">
							<button class="btn btn-success" type="submit" name="submit" value="submit">
								<i class="fas fa-search fa-sm"></i>
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<?php if($this->input->post('submit')): ?>
			<?php if($response['status'] == 200): ?>
				<div class="row">
					<h6 class="pt-5 mbmin font-weight-bold">Instagram Stories Videos result:</h6>
				</div>
				<div class="row mt-5">
					<?php foreach (array_diff($response['video_url'], array('')) as $result): ?>	
						<div class="col-md-4 mb-3">
							<div class="card">
								<video src="<?= $result;?>" class="card-img-top video-custom" controls>
								</div>
								<div class="card-body text-center">
									<a href="<?= $result . '&dl=1'; ?>" class="btn btn-success" download><i class="fas fa-download"></i> Download</a>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
					<div class="row">
						<h6 class="pt-3 mbmin font-weight-bold">Instagram Stories Photos result:</h6>
					</div>
					<div class="row mt-5">
						<?php foreach ($response['pict_url'] as $result): ?>	
							<div class="col-md-4 mb-3">
								<div class="card">
									<img src="<?= $result; ?>" class="card-img-top img-custom">
								</div>
								<div class="card-body text-center">
									<a href="<?= $result . '&dl=1'; ?>" class="btn btn-success" download><i class="fas fa-download"></i> Download</a>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
					<?php else: ?>
						<div class="col">
							<h5 class="text-center text-danger pt-5">Hasil tidak ditemukan</h5>
						</div>
					<?php endif; ?>
				<?php endif; ?>
				<div class="row mt-5">
					<div class="col ml-3 border-left-success h-100 py-2">
						<h5>How To Download Instagram Stories?</h5>
						<ul>
							<li>Go to Instagram website.</li>
							<li>Open the Instagram profile that you want to download the stories.</li>
							<li>Copy the username of that Instagram.</li>
							<li>Paste in the above form.</li>
							<li>Click Download.</li>
						</ul>
					</div>
				</div>
				<hr>
				<?php $this->load->view('templates/info'); ?>
			</div>