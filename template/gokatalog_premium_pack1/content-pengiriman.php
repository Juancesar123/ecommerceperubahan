
	<div class="innerHeading bg_f1f1f1 innerHeading-border">
		<div class="container text-center">
			<h1 class="marginBottomNone"><?PHP echo($judulutama) ?></h1>
			<div class="breadcrumb">
				<ul class="clearfix">
					<li><a href="<?PHP echo($defaulturl) ?>home.html">Home</a></li>
					<li>Pengiriman</li>
				</ul>
			</div>
		</div>
	</div>
	
    
    <div id="content" class="aboutPage">
		<div class="stripe">
			<div class="container">
				<div class="stripe" style="padding-top: 30px;">
					
					<p>Ada beberapa expedisi pengiriman yang kami gunakan, dan Anda bisa menentukan jasa pengiriman yang Ingin Anda digunakan. Berikut daftar Expedisi Kirim barang yang dapat Anda pilih : </p><br><br>
                    <ul>
                    <?PHP
	$a		=mysql_query("SELECT * FROM bw_pengiriman ORDER BY RAND()");
	while($data	=mysql_fetch_array($a)){
					?>
                    	<li style="text-align: center; margin-bottom: 20px;">
							<div class="col-xs-6" style="margin-bottom: 40px;">
								<span><strong>Nama Expedisi : <?PHP echo($data['namaexpedisi']) ?></strong></span><br>
								<span><img src="assets/pengiriman/<?PHP echo($data['logo']) ?>" alt="logo expedisi"></span>
							</div>
                    	</li>
                    	<?PHP } ?>
                    </ul><br><br>
				</div>
			
			</div>
		</div>