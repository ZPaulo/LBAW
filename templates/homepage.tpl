{include file='common/betterHeader.tpl'}
{literal}
<script type="text/javascript">
	$(document).ready(function(){
        $('#return').click(function(){
            if($(this).prop("checked") == true){
               	$('#s1').after('<section><label class="input"> <i class="icon-append glyphicon glyphicon-globe"></i> <input type="Location" name="Location" placeholder="Location"> <b class="tooltip tooltip-bottom-right">Enter postal code or city location</b></label></section>');
			}
        	else if($(this).prop("checked") == false){
                $('#s1').next().hide();
            }
        });
    });
</script>
{/literal}
	<div class="wrapper">
		<div class="slider-inner">
			<div id="da-slider" class="da-slider">
			</div>
		</div>
		<!--/slider-->
		<!--=== End Slider ===-->
		<div class="col-md-6">
			<!-- Reg-Form -->
			<form action="cars_search.php" id="sky-form4" class="sky-form">
				<header>Rent now</header>

				<fieldset>
					<section id="s1">
						<label class="input"> <i
							class="icon-append glyphicon glyphicon-globe"></i> <input
							type="Location" name="Location" placeholder="Location"> <b
							class="tooltip tooltip-bottom-right">Enter postal code or
								city location</b>
						</label>
					</section>
					<section>
						<label class="checkbox"><input id="return" type="checkbox" name="return"><i></i>Return to other location</label>
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
							<label class="select" ><select name="type" style="height: 45px;">
									<option value="0" selected disabled>Car type:</option>
									<option value="1">Economic</option>
									<option value="2">Sport</option>
									<option value="3">Other</option>
							</select> <i style="top: 18px;"></i>
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
		 <!-- Owl Clients v1 -->
		<div class="container content-sm">
		<div class="row margin-bottom-30" style="margin-top: 50px">
        	<div class="col-md-4">
        		<div class="service">
                    <i class="fa fa-compress service-icon"></i>
        			<div class="desc">
        				<h4>Fully Responsive</h4>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus etiam sem...</p>
        			</div>
        		</div>	
        	</div>
        	<div class="col-md-4">
        		<div class="service">
                    <i class="fa fa-cogs service-icon"></i>
        			<div class="desc">
        				<h4>HTML5 + CSS3</h4>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus etiam sem...</p>
        			</div>
        		</div>	
        	</div>
        	<div class="col-md-4">
        		<div class="service">
                    <i class="fa fa-rocket service-icon"></i>
        			<div class="desc">
        				<h4>Launch Ready</h4>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus etiam sem...</p>
        			</div>
        		</div>	
        	</div>			    
    	</div>
        <div class="headline"><h2>Brands</h2></div>        
        <div class="owl-clients-v1">
            <div class="item">
                <img src="../images/assets/clients4/1.png" alt="">
            </div>
            <div class="item">
                <img src="../images/assets/clients4/2.png" alt="">
            </div>
            <div class="item">
                <img src="../images/assets/clients4/3.png" alt="">
            </div>
            <div class="item">
                <img src="../images/assets/clients4/4.png" alt="">
            </div>
            <div class="item">
                <img src="../images/assets/clients4/5.png" alt="">
            </div>
            <div class="item">
                <img src="../images/assets/clients4/6.png" alt="">
            </div>
            <div class="item">
                <img src="../images/assets/clients4/7.png" alt="">
            </div>
            <div class="item">
                <img src="../images/assets/clients4/8.png" alt="">
            </div>
            <div class="item">
                <img src="../images/assets/clients4/9.png" alt="">
            </div>
        </div>
        </div>
        <!-- End Owl Clients v1 -->
	{include file='common/betterFooter.tpl'}