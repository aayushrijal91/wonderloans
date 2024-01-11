<footer class="pb-4">
	<div class="container">
		<div class="row justify-content-center justify-content-xl-between align-items-center gy-4">
			<div class="col-lg-auto">
				<div class="row justify-content-center align-items-center gy-4">
					<div class="col-auto">
						<a href="./">
							<?= renderImg("logo.png", "logo") ?>
						</a>
					</div>

					<div class="col-auto">
						<div class="bg-sea-green rounded-pill px-4 py-2 fs-14 fw-700 text-dark">
							In partnership with
							<span class="ps-2"><?= renderImg('wonder-loans.png', 'lib') ?></span>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-auto">
				<div class="fs-12 text-light-grey text-center">Copyright <?= date('Y') ?> <span class="px-2 px-md-4">|</span> Loanoptions.ai <span class="px-2 px-md-4">|</span> All Rights Reserverd</div>
			</div>

			<div class="col-auto">
				<a href="https://www.aiims.com.au/this-is-us" target="_blank"><?= renderImg('aiims.png', 'logo') ?></a>
			</div>
		</div>
	</div>
</footer>

<a href="javascript:" id="return-to-top">
	<div class="d-flex justify-content-center align-items-center h-100 w-100">
		<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#ffffff" class="bi bi-arrow-up" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
		</svg>
	</div>
</a>
<script type="text/javascript" src="./assets/js/app.js?v=0.10"></script>
</body>

</html>