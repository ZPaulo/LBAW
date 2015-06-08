{include file='common/betterHeader.tpl'} 
{literal}
<script type="text/javascript">
$(document).ready(function(){
 //Create a variable for the CarQuery object.  You can call it whatever you like.
      var carquery = new CarQuery();

 //     //Run the carquery init function to get things started:
      carquery.init();

 //  //Optional: initialize the year, make, model, and trim drop downs by providing their element IDs
      carquery.initYearMakeModelTrim('car-years', 'car-makes', 'car-models', 'car-model-trims');

      $('#subm').click(function() {
     		var search = $('#car-makes').val();
     	    search +=  ' ' + $('#car-models').val();
     		var carSearch = search;
     	    var carquery2 = new CarQuery();

     	    carquery2.init();
     	     
     	    $.getJSON(carquery.base_url+"?callback=?", {cmd:"getTrims", keyword: carSearch}, function(data) {
     	    	
     	        var makes = data.Trims;

     	        for (var key in makes) {
     	        	$('#seats').val(makes[key].model_seats);
     	        	$('#transmission').val(makes[key].model_transmission_type);
     	        	$('#consumo').val(makes[key].model_lkm_hw);
     	        	$('#potencia').val(makes[key].model_engine_power_ps);
     	        	$('#nportas').val(makes[key].model_doors);
     	        	break;
     	        	//WHY U NO WORK
     	        }
     	       // $('#subm').submit();
     	        //return false;
     	    });
     	    
    });
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
						<form action="{$BASE_URL}actions/vehicles/create_vehicle.php"
							method="get" class="sky-form">
							<header>Insert Vehicle Info</header>

							<fieldset>
								<section>
									<label class="select"> <select name="car-years" id="car-years"></select><i></i></label>
									<label class="select"> <select name="car-makes" id="car-makes"></select>
										<i></i> </label><label class="select"> <select name="car-models"
											id="car-models"></select><i></i></label> <label class="select">
											<select name="car-model-trims" id="car-model-trims"></select><i></i>
									</label>
									<label> <input name="seats" type="hidden" id="seats"></input><i></i></label>
									<label> <input name="transmission"type="hidden" id="transmission"></input><i></i></label>
									<label> <input name="consumo" type="hidden" id="consumo"></input><i></i></label>
									<label> <input name="potencia" type="hidden" id="potencia"></input><i></i></label>
									<label> <input name="nportas" type="hidden" id="nportas"></input><i></i></label>
								
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
								<button id="subm" type="button" class="btn-u"
								>Back</button>
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
