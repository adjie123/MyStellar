<!DOCTYPE html>
<html>
<head>
	<title>STELLAR</title>
</head>
<body>
	
	<table>
		<tr>
			<th>Asset Code</th>
			<th>Asset Type</th>
			<th>Asset Issuer</th>
			<th>Amount</th>
			<th>Num Accounts</th>
		</tr>
			<?php 
				foreach ($asset_code as $ass) {
					echo "<tr>";
					echo  '<td>'.$ass->asset_code.'</td>';
					echo  '<td>'.$ass->asset_type.'</td>';
					echo  '<td>'.$ass->asset_issuer.'</td>';
					echo  '<td>'.$ass->amount.'</td>';
					echo  '<td>'.$ass->num_accounts.'</td>';
					echo "</tr>";
					
				}
				/*$this->curl->simple_get('https://horizon.stellar.org/order_book?selling_asset_type=native&buying_asset_type=credit_alphanum4&buying_asset_code=FRAS&buying_asset_issuer=GC75WHUIMU7LV6WURMCA5GGF2S5FWFOK7K5VLR2WGRKWKZQAJQEBM53M&limit=');*/
			?>
	</table>
</body>
</html>

