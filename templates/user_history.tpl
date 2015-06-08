{include file='common/betterHeader.tpl'}
<!--=== Profile ===-->
<div class="container content profile">
	<div class="row">
		<!--Left Sidebar-->
		<div class="col-md-3 md-margin-bottom-40">
			<ul class="list-group sidebar-nav-v1 margin-bottom-40"
				id="sidebar-nav-1">
				<li class="list-group-item"><a
					href="page_profile_me.php?id={$user.pessoaid}"><i
						class="fa fa-user"></i> Profile</a></li>
				<li class="list-group-item active"><a
					href="page_profile_history.php?id={$user.pessoaid}"><i
						class="fa fa-history"></i> History</a></li>
				<li class="list-group-item"><a
					href="page_profile_settings.php?id={$user.pessoaid}"><i
						class="fa fa-cog"></i> Settings</a></li>
			</ul>


			<!--End Datepicker-->
		</div>
		<!--End Left Sidebar-->

		<!-- Profile Content -->
		<div class="col-md-9">
			<div class="profile-body">
				<!--Timeline-->
				<ul class="timeline-v2">
					{foreach from=$reservations item=r}
					<li><i class="cbp_tmicon rounded-x hidden-xs"></i>
						<div class="cbp_tmlabel">
							<h2 style="display: inline; border-bottom: none;">{$r["vehicleName"]}</h2>
							<div
								style="text-align: right; display: inline; position: absolute; right: 10px">
								<span class="label label-default">{$r["estado"]}</span>
							</div>
							<h2></h2>
							<div class="row">
								<div class="col-md-4">
									<img class="img-responsive"
										src="Shop-UI/assets/img/cars/product-3.png" alt="">
									<div class="md-margin-bottom-20"></div>
								</div>
								<div class="col-md-8">
									<p>Start: {$r["datadelevantamento"]}</p>
									<p>End: {$r["datadeentrega"]}</p>
									<p>Extras: {if isset($r["extras"])} {$r["extras"]} {else}None
										{/if}</p>
									<p>Pickup Location: {$r["pickup"]}</p>
									<p>Dropoff Location: {$r["drop"]}</p>
									<p>Price: {$r["price"]}€</p>
								</div>

								{if $r["estado"]==="Waiting Confirmation"}
								<a href="../action/reservation/update_reservation?id={$r.reservaid}&next=Ongoing"><button type="button" class="btn-u">Validate Delivery</button></a>
								<a href="../action/reservation/update_reservation?id={$r.reservaid}&next=Cancelled"><button type="button" class="btn-u btn-u-red">Cancel Reservation</button></a>
								{elseif $r["estado"]==="Ongoing"}
								<a href="../action/reservation/update_reservation?id={$r.reservaid}&next=Finished"><button type="button" class="btn-u">Validate Return</button></a>
								{elseif $r["estado"]==="Finished"}
								<a href="page_invoice.php" class="btn-u">View bill</a>
								{/if}
							</div>
						</div></li> {/foreach}
				</ul>
				<!--End Timeline-->
			</div>
		</div>
		<!-- End Profile Content -->
	</div>
</div>
<!--/container-->
<!--=== End Profile ===-->
{include file='common/betterFooter.tpl'}

