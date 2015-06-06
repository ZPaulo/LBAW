
{include file='common/betterHeader.tpl'}
		<!--=== Profile ===-->
		<div class="container content profile">
			<div class="row">
				<!--Left Sidebar-->
				<div class="col-md-3 md-margin-bottom-40">

					<ul class="list-group sidebar-nav-v1 margin-bottom-40"
						id="sidebar-nav-1">
						<li class="list-group-item active"><a
							href="page_profile_me.php"><i class="fa fa-user"></i>
								Profile</a></li>
						<li class="list-group-item"><a
							href="page_profile_history.php"><i class="fa fa-history"></i>
								History</a></li>
						<li class="list-group-item"><a
							href="page_profile_settings.php"><i class="fa fa-cog"></i>
								Settings</a></li>
					</ul>

					<!--End Notification-->


					<!--Datepicker-->
					<form action="#" id="sky-form2" class="sky-form">
						<div id="inline-start"></div>
					</form>
					<!--End Datepicker-->
				</div>
				<!--End Left Sidebar-->

				<!-- Profile Content -->
				<div class="col-md-9">
					<div class="profile-body">
						<div class="profile-bio">
							<div class="row">
								<div class="col-md-7">
									<h2>{$user.nome}</h2>
									<h4>{$user.username}</h4>
									<span><strong>Address:</strong> {$user.morada}</span> 
								</div>
							</div>
						</div>


						<div class="row">
							<!--Social Icons v3-->
							<div class="col-sm-6 sm-margin-bottom-30">
								<div class=" panel-profile">		
									<div class="panel-body">
										<ul class="list-unstyled social-contacts-v2">
											<li><i class="rounded-x gm fa fa-phone"></i> <a
												href="#">{$user.ntelemovel}</a></li>
											<li><i class="rounded-x gm fa fa-envelope"></i> <a
												href="#">{$user.email}</a></li>
										</ul>
									</div>
								</div>
							</div>
							<!--End Social Icons v3-->
						</div>
						<!--/end row-->



						<!--End Timeline-->

						<!--/end row-->
					</div>
				</div>
				<!-- End Profile Content -->
			</div>
		</div>
		<!--=== End Profile ===-->

	{include file='common/betterFooter.tpl'}
