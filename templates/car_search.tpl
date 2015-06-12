{include file='common/betterHeader.tpl'}
{literal}
<script type="text/javascript">
$(document).ready(function(){
	$.ajax({
       			type: "POST",
        		url: "../actions/vehicles/vehiclesSearch.php",
        		success: function(data){
        			$('#results').html(data);
        		}
    })
	var manufacturersArr = [];
	var x = document.getElementsByName("checkboxA");
	for(var i = 0; i < x.length; i++) {
		manufacturersArr.push($(x[i]).parent().text());
	}
	$('input[name=checkboxA]').click(function() {
		if(!($(this).prop( "checked" ))) {
			var i = manufacturersArr.indexOf($(this).parent().text());
			if(i != -1) {
				manufacturersArr.splice(i, 1);
			}
		}
		else {
			manufacturersArr.push($(this).parent().text());
		}
		$.ajax({
       			type: "POST",
        		url: "../actions/vehicles/vehiclesSearch.php",
        		data:{model:   $('#searchBox').val(),manufacturers: manufacturersArr},
        		success: function(data){
        			$('#results').html(data);
        		}
    	})
	})

	var result;
    $('#searchBox').keyup(function() {

        var searchVal = $(this).val();
            $.ajax({
       			type: "POST",
        		url: "../actions/vehicles/vehiclesSearch.php",
        		data:{ model: searchVal, manufacturers: manufacturersArr},
        		success: function(data){
        			$('#results').html(data);
        		}
    	})
    });
});
</script>

{/literal}
	<div class="wrapper">

		<!--=== Search Block Version 2 ===-->
		<div class="search-block">
			<div class="container">
				<div class="col-md-6 col-md-offset-3">
					<h2>Search again</h2>
					<div class="input-group">
						<input id="searchBox"type="text" class="form-control"
							placeholder="Search vehicles ..."> <span
							class="input-group-btn">
							<button class="btn-u" type="button">
								<i class="fa fa-search"></i>
							</button>
						</span>
					</div>
				</div>
			</div>
		</div>
		<!--/container-->
		<!--=== End Search Block Version 2 ===-->

				<div class="content container">
        <div class="row">
            <div class="col-md-3 filter-by-block md-margin-bottom-60">
                <h1>Filter By</h1>
                <div class="panel-group" id="accordion">
		                    <div class="panel panel-default">
		                        <div class="panel-heading">
		                            <h2 class="panel-title">
		                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
		                                    Brands
		                                    <i class="fa fa-angle-down"></i>
		                                </a>
		                            </h2>
		                        </div>
		                        <div id="collapseOne" class="panel-collapse collapse in">
		                            <div class="panel-body">
		                                <ul class="list-unstyled checkbox-list">
		                                    <li>
		                                        <label class="checkbox">
		                                            <input type="checkbox" name="checkboxA" checked />
		                                            <i></i>
		                                           	Fiat
		                                        </label>
		                                    </li>
		                                    <li>
		                                        <label class="checkbox">
		                                            <input type="checkbox" name="checkboxA" checked />
		                                            <i></i>
		                                            Seat
		                                        </label>
		                                    </li>
		                                    <li>
		                                        <label class="checkbox">
		                                            <input type="checkbox" name="checkboxA" checked />
		                                            <i></i>
		                                            Peugot
		                                        </label>
		                                    </li>
		                                    <li>
		                                        <label class="checkbox">
		                                            <input type="checkbox" name="checkboxA" checked/>
		                                            <i></i>
		                                            Ford
		                                        </label>
		                                    </li>
		                                </ul>        
		                            </div>
		                        </div>
		                    </div>
		                </div><!--/end panel group-->

                
                </div>
										<div class="col-md-9">
											<div class="row margin-bottom-5">
												<div class="col-sm-4 result-category">
													<h2>Results</h2>
												</div>
												<div class="col-sm-8">
													<ul class="list-inline clear-both">
														<li class="sort-list-btn">
															
														</li>
													</ul>
												</div>
											</div>
											<div id="results">
{foreach from=$results key=ks item=vs}
	{foreach from=$vs key=k item=v}
											<div
										class="list-product-description product-description-brd margin-bottom-30">
										<div class="row">
											<div class="col-sm-4">
												<a href="shop-ui-inner.html"><img
													class="img-responsive sm-margin-bottom-20"
													src="http://cars.axlegeeks.com/sites/default/files/844/media/images/2014_Ford_Focus_SE_Hatch_906299.png" alt=""></a>
											</div>
											<div class="col-sm-8 product-description">
												<div class="overflow-h margin-bottom-5">
													<ul class="list-inline overflow-h">
														<li><h4 class="title-price">
																<a href="">{$v.nome} {$v.modelo}<span>|Intermediate</span></a>
															</h4></li>
													</ul>
													<div class="margin-bottom-10">
														<span class="title-price margin-right-10">€{$v.preco}</span>
													</div>
													<div class="features">
														<p>
															<img src="../images/assets/icons/passenger-icon.png"
																alt="" />{$v.npassageiros} passengers
														</p>
														<p>
															<img
																src="../images/assets/icons/transmission-icon.png"
																alt="" />{$v.transmissao} transmission
														</p>
														<p>
															<img src="../images/assets/icons/km_l-icon.png"
																alt="" />{$v.consumo}
														</p>
														<p>
															<img src="../images/assets/icons/video-play.png" alt="" />{$v.descricao}
														</p>
													</div>
													<button type="button" class="btn-u">Rent</button>
												</div>
											</div>
										</div>
									</div>		
									{if $vs|@count gt 20}
									<!--/end result category-->
									<div class="text-center">
										<ul class="pagination pagination-v2">
											<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
										</ul>
									</div>
									{/if}
									<!--/end pagination-->
								</div>
									{/foreach}
								{/foreach}
							</div>
							<!--/end row-->
						</section>
					</div>
				</form>
			</div>
			<!--/end container-->
		</div>
											</div>
										</div>
									</div>
									<!--/end row-->
								</section>
							</div>
						</form>
					</div>
					<!--/end container-->
				</div>
		</div>
			<!--/end container-->
		</div>
		<!-- End Table Search v2 -->
	</div>
	</div>
	<!--/End Wrapepr-->

{include file='common/betterFooter.tpl'}