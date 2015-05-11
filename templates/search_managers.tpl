<!--=== Breadcrumbs ===-->
		<div class="breadcrumbs breadcrumbs-dark">
			<div class="container">
				<h1 class="pull-left">Search Managers</h1>
				<ul class="pull-right breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li><a href="administration.html">Administration</a></li>
					<li class="active">Search Managers</li>
				</ul>
			</div>
		</div>
		<!--=== End Breadcrumbs ===-->

		<!--=== Search Block Version 2 ===-->
		<div class="search-block">
			<div class="container">
				<div class="col-md-6 col-md-offset-3">
					<h2>Search again</h2>
					<div class="input-group">
						<input type="text" class="form-control"
							placeholder="Search Managers ..." name="name"> <span
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

		<div class="container content-sm">
			<!-- Begin Table Search v2 -->

			<!-- End Table Search v2 -->

			<div style="border-color: #DDDDDD;"
				class="panel panel-red margin-bottom-40">
				<div class="panel-heading"
					style="background: #FFFFFF; border-bottom: solid rgb(221, 221, 221); border-bottom-width: 1px;">
					<h3 class="panel-title" style="color: black;">
						<i class="fa fa-user"></i> Managers
					</h3>
				</div>
				<div class="panel-body">
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Username</th>
								<th></th>
								<th></th>
								<th></th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							include_once($BASE_DIR .'database/users.php'); 
							$result = searchManager($_GET['name']);
							$count = 0;
							foreach ($result as $row) {
							?>
							<tr>
								<td><?php echo $count;?></td>
								<td><?php echo $row['username']?></td>
								<td></td>
								<td></td>
								<td></td>
								<td><button class="btn btn-danger btn-xs">
										<i class="fa fa-trash-o"></i> Delete
									</button></td>
							</tr>
							<?php }?>

							<tr>
								<td>2</td>
								<td>John</td>
								<td></td>
								<td></td>
								<td></td>
								<td><button class="btn btn-danger btn-xs">
										<i class="fa fa-trash-o"></i> Delete
									</button></td>
							</tr>

							<tr>
								<td>3</td>
								<td>Ted</td>
								<td></td>
								<td></td>
								<td></td>
								<td><button class="btn btn-danger btn-xs">
										<i class="fa fa-trash-o"></i> Delete
									</button></td>
							</tr>

						</tbody>
					</table>
				</div>
			</div>
		</div>