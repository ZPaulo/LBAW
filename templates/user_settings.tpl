
{include file='common/betterHeader.tpl'}
		<!--=== Profile ===-->
		<div class="container content profile">
			<div class="row">
				<!--Left Sidebar-->
				<div class="col-md-3 md-margin-bottom-40">

					<ul class="list-group sidebar-nav-v1 margin-bottom-40"
						id="sidebar-nav-1">
						<li class="list-group-item"><a href="page_profile_me.php"><i
								class="fa fa-user"></i> Profile</a></li>
						<li class="list-group-item "><a
							href="page_profile_history.php"><i class="fa fa-history"></i>
								History</a></li>
						<li class="list-group-item active"><a
							href="page_profile_settings.php"><i class="fa fa-cog"></i>
								Settings</a></li>
					</ul>


					<!--End Datepicker-->
				</div>

				<!-- Profile Content -->
				<div class="col-md-9">
					<div class="profile-body margin-bottom-20">
						<div class="tab-v1">
							<ul class="nav nav-justified nav-tabs">
								<li class="active"><a data-toggle="tab" href="#profile">Edit
										Profile</a></li>
								<li><a data-toggle="tab" href="#passwordTab">Change
										Password</a></li>
								<li><a data-toggle="tab" href="#payment">Payment
										Options</a></li>
								<li><a data-toggle="tab" href="#settings">Notification
										Settings</a></li>
							</ul>
							<div class="tab-content">
								<div id="profile" class="profile-edit tab-pane fade in active">
									<h2 class="heading-md">Manage your Name, ID and Email
										Addresses.</h2>
									<p>Below are the name and email addresses on file for your
										account.</p>
									<br>
									<form class="sky-form" id="sky-form" action="../actions/users/change_user_data.php" method="POST">
										<!--Checkout-Form-->
										<section><dt>
											<strong>Your name </strong>
										</dt>
											<label class="input"> <input name="name"
												value="{$user.nome}">
											</label>
											
									<br>
											<dt>
											<strong>Your email </strong>
										</dt>
											<label class="input"> <input name="email"
												value="{$user.email}">
											</label>		
									<br>
											<dt>
											<strong>Your phone number </strong>
										</dt>
											<label class="input"> <input name="phone"
												value="{$user.ntelemovel}">
											</label>		
									<br>
											<dt>
											<strong>Your address </strong>
										</dt>
											<label class="input"> <input name="address"
												value="{$user.morada}">
											</label>
										</section>

										
										<!--End Checkout-Form--><button class="btn-u" type="submit">Save Changes</button>
										<button type="button" class="btn-u btn-u-red">Eliminate Account</button>
									</form>
									
								</div>

								<div id="passwordTab" class="profile-edit tab-pane fade">
									<h2 class="heading-md">Manage your Security Settings</h2>
									<p>Change your password.</p>
									<br>
									<form class="sky-form" id="sky-form" action="../actions/users/change_password.php" method="POST">
										<!--Checkout-Form-->
										<section>
											<label class="input"> <input type="password" name="password"
												placeholder="password">
											</label>
											<label class="input"> <input type="password" name="confirmpassword"
												placeholder="confirm password">
											</label>
										</section>

										
										<button class="btn-u" type="submit">Save Changes</button>
										<!--End Checkout-Form-->
									</form>
								</div>

								<div id="payment" class="profile-edit tab-pane fade">
									<h2 class="heading-md">Manage your Payment Settings</h2>
									<p>Below are the payment options for your account.</p>
									
									{foreach from=$mastercard item=m}
									<h2></h2>
										<h4>Mastercard option</h4>
										<h6>Card number: {$m["ncartao"]}</h6>
										<h6>Name on card: {$m["nome"]}</h6>
										<h6>CVV: {$m["cvv"]}</h6>
										<h6>Expiration Date: {$m["mes"]}/{$m["ano"]}</h6><a href="../actions/users/delete_mastercard.php?id={$m.mastercardid}"><button type="button" class="btn-u btn-u-red">Eliminate Option</button></a>
									<br>
									{/foreach}
									{foreach from=$visa item=m}
									<h2></h2>
										<h4>Visa option</h4>
										<h6>Card number: {$m["ncartao"]}</h6>
										<h6>Name on card: {$m["nome"]}</h6>
										<h6>CVV: {$m["cvv"]}</h6>
										<h6>Expiration Date: {$m["mes"]}/{$m["ano"]}</h6><a href="../actions/users/delete_visa.php?id={$m.visaid}"><button type="button" class="btn-u btn-u-red">Eliminate Option</button></a>
									<br>
									{/foreach}
									<br>
									<h2 class="heading-md">Create payment option</h2>
									<form class="sky-form" id="sky-form" action="../actions/users/create_payment_option.php" method="POST">
										<!--Checkout-Form-->
										<section>
											<div class="inline-group">
												<label class="radio"><input type="radio" checked=""
													name="option" value="visa"><i class="rounded-x"></i>Visa</label>
												<label class="radio"><input type="radio"
													name="option" value="mastercard"><i class="rounded-x"></i>MasterCard</label>
												<label class="radio"><input type="radio"
													name="option" value="paypal"><i class="rounded-x"></i>PayPal</label>
											</div>
										</section>

										<section>
											<label class="input"> <input type="text" name="name"
												placeholder="Name on card">
											</label>
										</section>

										<div class="row">
											<section class="col col-10">
												<label class="input"> <input type="text" name="card"
													id="card" placeholder="Card number">
												</label>
											</section>
											<section class="col col-2">
												<label class="input"> <input type="text" name="cvv"
													id="cvv" placeholder="CVV2">
												</label>
											</section>
										</div>
										<div class="row">
											<label class="label col col-4">Expiration date</label>
											
											<input type="month" name="month" id="month" placeholder=""> <i></i>
												</label>
											
										</div>
										<button class="btn-u" type="submit">Add option</button>
										<!--End Checkout-Form-->
									</form>
								</div>

								<div id="settings" class="profile-edit tab-pane fade">
									<h2 class="heading-md">Manage your Notifications.</h2>
									<p>Below are the notifications you may manage.</p>
									<br>
									<form class="sky-form" id="sky-form3" action="../actions/users/change_news.php">
										
										<label class="toggle"><input type="checkbox"
											{if $news}checked="" {/if} name="news"><i></i>Receive
											our monthly newsletter</label>
										<br>
										<button type="button" class="btn-u btn-u-default">Reset</button>
										<button class="btn-u" type="submit">Save Changes</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Profile Content -->
			</div>
			<!--/end row-->
		</div>
		<!--=== End Profile ===-->

	{include file='common/betterFooter.tpl'}
		