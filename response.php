<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>IBN Praktek Tes</title>
  </head>
  <body>
  	<style>
  		.form-body, .response {
  			padding: 15px;
  			border: 1px solid;
  			width: 30%;
  		}
  		.response {
  			margin-top: 5px;
  		}
  		.input-body {
  			margin: 3px 0;
  		}
  		.input-body #id_pelanggan {
  			width: 100%;
  		}
  	</style>
  	<?php 
  		$id_pelanggan = @$_POST['id_pelanggan'];
  		include "sample_hit2.php";
  		if ($rc == '0000') {
  	 ?>
    <div class="response">
    	<div class="">
    		<label for="">ID Pelanggan</label> : <?php echo $id_pelanggan; ?>
    	</div>
    	<div class="">
    		<label for="">Nama Pelanggan</label> : <?php echo $data['subscriber_name']; ?>
    	</div>
    	<div class="">
    		<label for="">Daya / Golongan</label> : <?php echo $data['power']; ?> / <?php echo $data['subscriber_segmentation']; ?>
    	</div>
    	<div class="" style="text-align: right;">
    		<a href="./">
    			<button type="button">Kembali</button>
    		</a>
    	</div>
    </div>
  <?php } else {
			echo "<pre>";
			echo "Transaction ID -> " . $data['trx_id'] . "<br />";
			echo "Response Code (RC) -> " . $rc . "<br />";
			echo "Description -> " . $data['desc'];
			echo "</pre>";
	?>
		<div class="">
  		<a href="./">
  			<button type="button">Kembali</button>
  		</a>
  	</div>
	<?php
		}
	?>
  </body>
</html>