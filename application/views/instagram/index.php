	<div class="container mtop content">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<form action="" method="post">
					<div class="input-group">
						<input type="text" class="form-control bg-light border-0 small" placeholder="Enter Instagram Post URL..." aria-label="Search" aria-describedby="basic-addon2" name="id" autocomplete="off" value="<?= $this->input->post('id'); ?>" id="search-input">
						<div class="input-group-append">
							<button class="btn btn-success" id="search-button" type="submit" name="submit" value="submit">
								<i class="fas fa-search fa-sm"></i>
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row mt-5">
			<?php if($this->input->post('submit')): ?>
				<?php if($response['status'] == 200): ?>
					<?php if (key_exists('pict_url', $response)): ?>
						<?php foreach ($response['pict_url'] as $result): ?>		
							<div class="col-md-4 mb-3">
								<div class="card">
									<img src="<?= $result;?>" class="card-img">
								</div>
								<div class="card-body text-center">
									<a href="<?= $result . '&dl=1'; ?>" class="btn btn-success" download><i class="fas fa-download"></i> Download</a>
								</div>
							</div>
						<?php endforeach; ?>
						<?php else: ?>
							<div class="col-md-4 mb-3">
								<div class="card">
									<img src="<?= $response['first_pict'];?>" class="card-img">
								</div>
								<div class="card-body text-center">
									<a href="<?= $response['first_pict'];?> . '&dl=1'; ?>" class="btn btn-success" download><i class="fas fa-download"></i> Download</a>
								</div>
							</div>
						<?php endif; ?>
						<?php else: ?>
							<div class="col">
								<h5 class="text-center text-danger pb-3">Hasil tidak ditemukan</h5>
							</div>
						<?php endif; ?>
					<?php endif; ?>
				</div>
				<div class="row mt-5">
					<div class="col ml-3 border-left-success h-100 py-2">
						<h5>How To Download Instagram Photos?</h5>
						<ul>
							<li>Go to Instagram website.</li>
							<li>Open the Image or Video that you want to download.</li>
							<li>Copy the URL of that Image or Video or copy the URL of profile.</li>
							<li>Paste in the above form.</li>
							<li>Click Download.</li>
						</ul>
					</div>
				</div>
				<hr>
				<?php $this->load->view('templates/info'); ?>
			</div>