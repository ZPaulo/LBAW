{include file='common/betterHeader.tpl'} {literal}
<script type="text/javascript">
$(document).ready(function(){
	//Create a variable for the CarQuery object.  You can call it whatever you like.
     var carquery = new CarQuery();

     //Run the carquery init function to get things started:
     carquery.init();

  //Optional: initialize the year, make, model, and trim drop downs by providing their element IDs
     carquery.initYearMakeModelTrim('car-years', 'car-makes', 'car-models', 'car-model-trims');
}); </script>
{/literal}
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
						<form action="{$BASE_URL}actions/users/register_admin.php"
							method="get" class="sky-form">
							<header>Insert Vehicle Info</header>

							<fieldset>
								<section>
									<label class=select> <select name="car-years" id="car-years"></select><i></i></label>
									<label class=select> <select name="car-makes" id="car-makes"></select>
										<i></i> </label><label class=select> <select name="car-models"
											id="car-models"></select><i></i></label> <label class=select>
											<select name="car-model-trims" id="car-model-trims"></select><i></i>
									</label>
								
								</section>
								<section>
									<label class="label">Preço</label> <label
										class="input state-success"> <input type="text"
										name="password">
									</label>
									<div class="note note-success">This is a required field.</div>
								</section>
								<section>
									<label class="label">Service Review</label> <label
										class="input state-success"> <textarea class="form-control"
											rows="7" form="usrform" name="service"></textarea>
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
<!--/container-->
<!--=== End Content Part ===-->
{include file='common/betterFooter.tpl'}
