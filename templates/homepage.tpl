{include file='common/betterHeader.tpl'}
	<div class="wrapper">
		<div class="slider-inner">
			<div id="da-slider" class="da-slider">
				<div class="da-arrows">
					<span class="da-arrows-prev"></span> <span class="da-arrows-next"></span>
				</div>
			</div>
		</div>
		<!--/slider-->
		<!--=== End Slider ===-->
		<div class="col-md-6">
			<!-- Reg-Form -->
			<form action="cars_search.php" id="sky-form4" class="sky-form">
				<header>Rent now</header>

				<fieldset>
					<section>
						<label class="input"> <i
							class="icon-append glyphicon glyphicon-globe"></i> <input
							type="Location" name="Location" placeholder="Location"> <b
							class="tooltip tooltip-bottom-right">Enter postal code or
								city location</b>
						</label>
					</section>
					<section>
						<label class="checkbox"><input type="checkbox"
							name="return" id="return"><i></i>Return at a different
							location</label>
						<div class="row">
							<section class="col col-6">
								<label class="input"> <i
									class="icon-append fa fa-calendar"></i> <input type="text"
									name="start" id="start" placeholder="Start date">
								</label>
							</section>
							<section class="col col-6">
								<label class="input"> <i
									class="icon-append fa fa-calendar"></i> <input type="text"
									name="finish" id="finish" placeholder="Expected finish date">
								</label>
							</section>
						</div>
						<section>
							<label class="select"> <select name="type">
									<option value="0" selected disabled>Car type:</option>
									<option value="1">Economic</option>
									<option value="2">Sport</option>
									<option value="3">Other</option>
							</select> <i></i>
							</label>
						</section>
					</section>
				</fieldset>
				<footer>
					<button type="submit" class="btn-u">Rent Now!</button>
				</footer>
			</form>
			<!-- End Reg-Form -->
		</div>
	{include file='common/betterFooter.tpl'}