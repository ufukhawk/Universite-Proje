 <?php 
include  "database.php"
 ?>
 	<?php 
   			$sorgu = $db->query("SELECT * FROM menuler",PDO::FETCH_ASSOC);
   			if($sorgu -> rowCount())
   			{
   				foreach ($sorgu as $row) {
 ?>
<nav id="nav-wrap"> 
	   
   				
   			<a class="mobilee-btn" href="#nav-wrap" title="Show navigation">Show Menu</a>
		   <a class="mobile-btn" href="#" title="Hide navigation">Hide Menu</a>

	   	<div class="row">    		            

			   	<ul id="nav" class="nav"> 
			      <li><a  href="index.php" target="_blank"  ><?php echo $row['anasaya']  ?> </a></li>
	              <li><a href="demo.html"><?php echo $row['iletisim'] ?></a></li>	
	              <li><a href="archives.html"><?php echo $row['hakkinda'] ?></a></li>
			   	</ul> <!-- end #nav -->			   	 
	   	</div> 
	   </nav>
<?php 
}
}
 ?>