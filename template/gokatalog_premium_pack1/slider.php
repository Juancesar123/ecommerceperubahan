
<div id="banner" class="stripe banner">
  <div class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider" data-version="5.0.7">
      <ul>
        <?PHP
	$a=mysql_query("SELECT * FROM bw_banner ORDER BY idbanner ASC");
	while($d=mysql_fetch_array($a)){
?>
        <li data-transition="fadeout" data-thumb="<?php echo $defaulturl; ?>/assets/banner/<?PHP echo($d['gambar'])?>" data-title="<?PHP echo($d['judul'])?> ">
          <!-- MAIN IMAGE -->
          <img src="<?php echo $defaulturl; ?>/assets/banner/<?PHP echo($d['gambar'])?>" alt="<?PHP echo($d['judul'])?>" width="1920" height="617"> </li>
        <?PHP } ?>
      </ul>
    </div>
  </div>
</div>
