{include file='common/betterHeader.tpl'}
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
						<th>Number</th>
						<th>Date</th>
						<th></th>
						<th>Select</th>
					</tr>
				</thead>
				<tbody>
					{foreach $visa as $e} 
					<tr>
						<td>{$e.nome}</td>
						<td>{$e.ncartao}</td>
						<td>{$e.mes}/{$e.ano}</td>
						<td></td>
						<td><input type="radio" value="{$e.visaid}" name="option" form="form"></td>
					</tr>
					{/foreach}{foreach $mastercard as $e} 
					<tr>
						<td>{$e.nome}</td>
						<td>{$e.ncartao}</td>
						<td>{$e.mes}/{$e.ano}</td>
						<td></td>
						<td><input type="radio" value="{$e.mastercardid}" checked="checked"  name="option" form="form"></td>
					</tr>
					{/foreach}
					{foreach $get as $k=>$g}
					<input type="hidden" value="{$g}" checked="checked"  name="{$k}" form="form">
					{/foreach}
				</tbody>
			</table>

			<form action="../actions/makeReservation.php{$get}" id="form"><input type="submit" class="btn-u"></form>
		</div>
	</div>
</div>
{include file='common/betterFooter.tpl'}
