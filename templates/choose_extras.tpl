{include file='common/betterHeader.tpl'}
<!--/container-->
  $locals = getAlllocals();
  
  $smarty->assign('locals', $locals);
  
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
						<th>Select</th>
					</tr>
				</thead>
				<tbody>
					{foreach $extras as $e}
					<tr>
						<td>{$e.nome}</td>
						<td>{$e.propriedades}</td>
						<td>{$e.preco}€</td>
						<td></td>
						<td><input type="hidden" name="{$e.extraid}" value="off"
							form="form"><input type="checkbox" name="{$e.extraid}"
							form="form"></td>
					</tr>
					{/foreach}
				</tbody>
			</table>
			{foreach $get as $k=>$g} <input type="hidden" value="{$g}"
				checked="checked" name="{$k}" form="form"> {/foreach}

			<form action="checkout.php" id="form">
				<input type="submit" class="btn-u">
			</form>
		</div>
	</div>
</div>
{include file='common/betterFooter.tpl'}
