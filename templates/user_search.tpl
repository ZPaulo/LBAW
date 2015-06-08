{include file='common/betterHeader.tpl'}

<!--=== Search Block Version 2 ===-->

<div class="search-block">
	<div class="container">
		<div class="col-md-6 col-md-offset-3">
			<h2>Search again</h2>
			<div class="input-group">
				<form action="" id="for"></form>
				<input type="text" class="form-control"
					placeholder="Search Users ..." name="name" form="for"> <span
					class="input-group-btn"> <input class="btn-u" type="submit"
					form="for"> <i class="fa fa-search"></i>
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
	<div class="table-search-v2">
		<div class="table-responsive">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th class="hidden-sm">About</th>
						<th>Address</th>
						<th>Contacts</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					{foreach $clients as $client}
						<td class="td-width">
							<h3>
								<a href="page_profile_me.php?id={$client.clienteid}">{$client.nome}</a>
							</h3>
							<p>{$client.username}</p>
						</td>
						<td>{$client.morada}</td>
						<td>
							<span>{$client.email}</span> <span>{$client.ntelemovel}</span>
						</td>
					</tr>

					{/foreach}
					
				</tbody>
			</table>
		</div>
	</div>
	<!-- End Table Search v2 -->
</div>
{include file='common/betterFooter.tpl'}
