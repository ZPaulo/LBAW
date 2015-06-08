{if $results|@count gt 0}
{foreach from=$results key=ks item=vs}
	{foreach from=$vs key=k item=v}
									<div
										class="list-product-description product-description-brd margin-bottom-30">
										<div class="row">
											<div class="col-sm-4">
												<a href="shop-ui-inner.html"><img
													class="img-responsive sm-margin-bottom-20"
													src="Shop-UI/assets/img/cars/product-1.png" alt=""></a>
											</div>
											<div class="col-sm-8 product-description">
												<div class="overflow-h margin-bottom-5">
													<ul class="list-inline overflow-h">
														<li><h4 class="title-price">
																<a href="shop-ui-inner.html">{$v.nome} {$v.modelo}<span>|Intermediate</span></a>
															</h4></li>
													</ul>
													<div class="margin-bottom-10">
														<span class="title-price margin-right-10">€{$v.preco}</span>
													</div>
													<div class="features">
														<p>
															<img src="Shop-UI/assets/img/images/passenger-icon.png"
																alt="" />{$v.npassageiros} passengers
														</p>
														<p>
															<img
																src="Shop-UI/assets/img/images/transmission-icon.png"
																alt="" />{$v.transmissao} transmission
														</p>
														<p>
															<img src="Shop-UI/assets/img/images/km_l-icon.png"
																alt="" />{$v.consumo}
														</p>
														<p>
															<img src="Shop-UI/assets/img/images/air-icon.png" alt="" />{$v.descricao}
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
							</div>
							<!--/end row-->
						</section>
					</div>
				</form>
			</div>
			<!--/end container-->
		</div>
	{/foreach}
{/foreach}
{else}
		
{/if}

