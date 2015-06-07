{include file='common/betterHeader.tpl'}


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
						<form action="../actions/reviews/create_review.php" method="post" class="sky-form" id="usrform">
							<header>Create Review</header>

							<fieldset>
								<section>
									<label class="label">Service Review</label> <label
										class="input state-success">
										<textarea class="form-control" rows="7" form="usrform" name="service"></textarea>
									</label>
									<div class="note note-success">This is a required field.</div>
								</section>
								<section>
									<label class="label">Cars Review</label> <label
										class="input state-success">
										<textarea class="form-control" rows="7" form="usrform" name="cars"></textarea>
									</label>
									<div class="note note-success">This is a required field.</div>
								</section>
								<div class="rating state-success">
                                	<input type="radio" name="stars" id="overall-5" class="valid" value="5">
                                	<label for="overall-5"><i class="fa fa-star"></i></label>
                                	<input type="radio" name="stars" id="overall-4" class="valid" value="4">
                               	 	<label for="overall-4"><i class="fa fa-star"></i></label>
                                	<input type="radio" name="stars" id="overall-3" class="valid" value="3">
                                	<label for="overall-3"><i class="fa fa-star"></i></label>
                              		<input type="radio" name="stars" id="overall-2" class="valid" value="2">
                              	 	<label for="overall-2"><i class="fa fa-star"></i></label>
                            	    <input type="radio" name="stars" id="overall-1" class="valid" value="1">
                            	    <label for="overall-1"><i class="fa fa-star"></i></label>
                                Overall rating
                            </div>

							</fieldset>



							<footer>
								<button type="submit" class="btn-u">Submit</button>
								<button type="button" class="btn-u btn-u-default"
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
<!--/container-->
<!--=== End Content Part ===-->
	{include file='common/betterFooter.tpl'}
