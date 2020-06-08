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
  			width: 20%;
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
    <div class="form-body">
    	<form action="response.php" method="POST" class="form_pelanggan">
    		<label for="id_pelanggan">ID Pelanggan</label>
    		<div class="input-body">
    			<input type="text" name="id_pelanggan" id="id_pelanggan" autofocus="">
    		</div>
    		<div class="input-body" style="text-align: right;">
	    		<input type="submit" name="kirim" id="kirim" value="Kirim">
	    	</div>
    	</form>
    </div>

    <!-- <div class="response">
    	<div class="">
    		<label for="">ID Pelanggan</label> : xxxxxxxx
    	</div>
    	<div class="">
    		<label for="">Nama Pelanggan</label> : xxxxxxxx
    	</div>
    	<div class="">
    		<label for="">Daya / Golongan</label> : xxxxxxxx
    	</div>
    </div> -->
  </body>
</html>