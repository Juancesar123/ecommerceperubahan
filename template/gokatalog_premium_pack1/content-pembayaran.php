
	<div class="innerHeading bg_f1f1f1 innerHeading-border">
		<div class="container text-center">
			<h1 class="marginBottomNone"><?PHP echo($judulutama) ?></h1>
			<div class="breadcrumb">
				<ul class="clearfix">
					<li><a href="<?PHP echo($defaulturl) ?>home.html">Home</a></li>
					<li>Pembayaran</li>
				</ul>
			</div>
		</div>
	</div>
	
    
    <div id="content" class="aboutPage">
		<div class="stripe">
			<div class="container">
				<div class="stripe" style="padding-top: 30px;">
					
					<p>Untuk melakukan pembayaran silahkan Anda pilih Bank Pembayaran Anda untuk melakukan pembayaran : </p><br><br>
                    <ul>
                    <?PHP
	$a		=mysql_query("SELECT * FROM bw_bank ORDER BY RAND()");
	while($data	=mysql_fetch_array($a)){
					?>
                    	<li style="text-align: center; margin-bottom: 20px;">
							<div class="col-xs-6" style="margin-bottom: 40px;">
								<span><strong>Nama Bank : <?PHP echo($data['nama_bank']) ?></strong></span><br>
								<span><strong>No. Rekening : <?PHP echo($data['norek']) ?></strong></span><br>
								<span><strong>Atas Nama : <?PHP echo($data['pemilik']) ?></strong></span><br><br>
								<span><img src="assets/bank/<?PHP echo($data['logo_bank']) ?>" alt="logo bank"></span>
							</div>
                    	</li>
                    	<?PHP } ?>
                    </ul><br><br>
				</div>
			
			</div>
		</div>