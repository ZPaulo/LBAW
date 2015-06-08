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
						<form action="../actions/extras/create_extra.php"
							class="sky-form" method="post" id="form">
							<header>Insert Extra Info</header>

							<fieldset>
								<section>
									<label class="label">Name</label> <label
										class="input state-success"> <input name="name" type="text">
									</label>
									<div class="note note-success">This is a required field.</div>
								</section>
								<section>
									<label class="label">Description</label> <label
										class="input state-success"> <textarea   class="form-control" form="form" name="desc" type="text"></textarea>
									</label>
									<div class="note note-success">This is a required field.</div>
								</section>

								<section>
									<label class="label">Price </label> <label
										class="input state-success"> <input name="price" type="text">
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
