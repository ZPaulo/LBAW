{include file='common/betterHeader.tpl'}
<!--=== Breadcrumbs ===-->
		<div class="breadcrumbs">
			<div class="container">
				<h1 class="pull-left">Create Local</h1>
				<ul class="pull-right breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li><a href="management.html">Management</a></li>
					<li class="active">Create Local</li>
				</ul>
			</div>
		</div>
		<!--/breadcrumbs-->
		<!--=== End Breadcrumbs ===-->

		<!--=== Content Part ===-->
		<div class="container content">
			<div class="row">


				<!-- Begin Content -->
				<div class="col-md-9">
					<!-- Tabs -->
					<div class="tab-v1">

						<div class="tab-content">
							<!-- Success Forms -->
							<div class="tab-pane fade in active" id="home-1">
								<form action="{$BASE_URL}actions/local/create_local.php" class="sky-form" method="post">
									<header>Insert Local Info</header>

									<fieldset>
										<section>
											<label class="label">Local Name</label> <label
												class="input state-success"> <input name="name" type="text">
											</label>
											<div class="note note-success">This is a required field.</div>
										</section>
										<section>
											<label class="label">Google Maps Link</label> <label
												class="input state-success"> <input name="map" type="text">
											</label>
											<div class="note note-success">This is a required field.</div>
										</section>


									</fieldset>



									<footer>
										<button type="submit" class="btn-u btn-u-default">Submit</button>
										<button type="button" class="btn-u"
											onclick="window.history.back();">Back</button>
									</footer>
								</form>
								<!--/ Success states for elements -->
							</div>
							<!-- End Success Forms -->


							<!-- End Disabled Forms -->
						</div>
					</div>
					<!-- End Tabs-->
				</div>
				<!-- End Content -->
			</div>
		</div>
	{include file='common/betterFooter.tpl'}