<div id="content-wrap">

   	<div class="row">

   		<div id="main" class="eight columns">

	   		<!-- end entry -->  

				<article class="entry">
	   			
					<header class="entry-header">

						<h2 class="entry-title">
					<?php  
					$sorgu = $db->query("SELECT * FROM icerik WHERE id=2 ",PDO::FETCH_ASSOC);
							if($sorgu -> rowCount())
   			{
   				foreach ($sorgu as $row) {
   					?>
							<a href="single.php" title=""><?php echo $row['baslik']  ?></a>
												<?php 
}
}
 ?>

						</h2> 				 
					
						<div class="entry-meta">
							<ul>

								<li><?php echo $row['g_tarihi']?></li>
								<span class="meta-sep">&bull;</span>								
								<li>
									<a href="#" title="" rel="category tag">Ghost</a>  
								</li>
								<span class="meta-sep">&bull;</span>
								<li><?php echo $row['kuladi']?></li>
							</ul>
						</div> 
					 
					</header> 			

					<div class="entry-content">

					<?php  
					$sorgu = $db->query("SELECT * FROM icerik WHERE id=2",PDO::FETCH_ASSOC);
					if($sorgu -> rowCount())
   			{
   				foreach ($sorgu as $row) {
   					?>
						<p>

				<p id="intro"><?php echo $row['icerik'] ?></p>
						</p>

						<?php 
}
}
 ?>
						
					</div> 

				</article> <!-- end entry -->  	
				
					<article class="entry">
	   			
					<header class="entry-header">

						<h2 class="entry-title">
					<?php  
					$sorgu = $db->query("SELECT * FROM icerik WHERE id=1 ",PDO::FETCH_ASSOC);
							if($sorgu -> rowCount())
   			{
   				foreach ($sorgu as $row) {
   					?>
							<a href="single.php" title=""><?php echo $row['baslik']  ?></a>
												<?php 
}
}
 ?>

						</h2> 				 
					
						<div class="entry-meta">
							<ul>
								<li><?php echo $row['g_tarihi']?></li>
								<span class="meta-sep">&bull;</span>								
								<li>
									<a href="#" title="" rel="category tag">Ghost</a>  
								</li>
								<span class="meta-sep">&bull;</span>
								<li><?php echo $row['kuladi']?></li>
							</ul>
						</div> 
					 
					</header> 			

					<div class="entry-content">

					<?php  
					$sorgu = $db->query("SELECT * FROM icerik WHERE id=1",PDO::FETCH_ASSOC);
					if($sorgu -> rowCount())
   			{
   				foreach ($sorgu as $roww) {
   					?>
						<p>

				<p id="intro"><?php echo $roww['icerik'] ?></p>
						</p>

						<?php 
}
}
 ?>
						
					</div> 

				</article> <!-- end entry -->  			

   		</div> <!-- end main -->

<?php 
include  "sitebar.php"
 ?>
   	</div> <!-- end row -->

   </div> <!-- end content-wrap -->