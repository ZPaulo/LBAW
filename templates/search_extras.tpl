{include file='common/betterHeader.tpl'}
<!--=== End Breadcrumbs ===-->

<!--=== Search Block Version 2 ===-->
<div class="search-block">
	<div class="container">
		<div class="col-md-6 col-md-offset-3">
			<h2>Search again</h2>
			<div class="input-group">
				<form action="" id="for"></form>
				<input type="text" class="form-control"
					placeholder="Search Managers ..." name="name" form="for"> <span
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

	<!-- End Table Search v2 -->

	<div style="border-color: #DDDDDD;"
		class="panel panel-red margin-bottom-40">
		<div class="panel-heading"
			style="background: #FFFFFF; border-bottom: solid rgb(221, 221, 221); border-bottom-width: 1px;">
			<h3 class="panel-title" style="color: black;">
				<i class="fa fa-user"></i> Extras
			</h3>
		</div>
		<div class="panel-body"> 
			<table class="table">
				<thead>
					<tr>
						<th>Name</th>
						<th>Description</th>
						<th>Price</th>
						<th></th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					{foreach $extras as $e}
					<tr>
						<td>{$e.nome}</td>
						<td>{$e.propriedades}</td>
						<td>{$e.preco}€</td>
						<td></td>
						<td><a
							href="{$BASE_URL}actions/extras/delete_extra.php?id={$e.extraid}"><button
									class="btn btn-danger btn-xs">
									<i class="fa fa-trash-o"></i> Delete
								</button></a></td>
					</tr>
					{/foreach}
				</tbody>
			</table>
		</div>
	</div>
</div>
{include file='common/betterFooter.tpl'}
