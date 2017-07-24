<div id="sidebar" class="four columns">
 <?php 
include  "database.php";
  if (isset($_GET['cikis']) AND $_GET['cikis'] == '1') {
    session_unset();
    session_destroy();
  }
 ?>
   			<div class="widget widget_search">
                  <h3>Search</h3> 
                  <form action="#">
<?php 
if (isset($_SESSION['Kullanici'])){
   echo "<a href='index.php?cikis=1'>ÇIKIŞ</a>";
   echo "<br>";
   echo "Hoşgeldin : ";
   echo "<b>".$_SESSION['Kullanici']."</b>";

}
else
{
    echo "<a href='giris/girisekrani.php'>ÜYE OL</a>";
}
?>
                  </form>
               </div>

   			<div class="widget widget_categories group">
   				<h3>Categories.</h3> 
   				<ul>
                  <?php 
            $sorgu = $db->query("SELECT kategory.k_adi , COUNT(*) as say
FROM kategory INNER JOIN icerik
ON kategory.id = icerik.k_id
GROUP BY kategory.id
ORDER BY say DESC" ,PDO::FETCH_ASSOC);
             $sorgu2 = $db->query("SELECT kategory.k_adi , COUNT(*) as say
FROM kategory INNER JOIN icerik
ON kategory.id = icerik.k_id
GROUP BY kategory.id
ORDER BY say DESC" ,PDO::FETCH_ASSOC);
              $sorgu3 = $db->query("SELECT kategory.k_adi , COUNT(*) as say
FROM kategory INNER JOIN icerik
ON kategory.id = icerik.k_id
GROUP BY kategory.id
ORDER BY say DESC" ,PDO::FETCH_ASSOC);

            if($sorgu -> rowCount())
            {
               foreach ($sorgu as $row) {

            ?>
               <li><a href="#" title=""><?php echo $row['k_adi']?></a>(<?php echo $row['say']?>)</li>
                   <?php if($sorgu2 -> rowCount())
            ?>
                   
<?php 
}
}
 ?>
										
					</ul>
				</div>

				<div class="widget widget_text group">
					<h3>Widget Text.</h3>

   				<p>Lorem ipsum Ullamco commodo laboris sit dolore commodo aliquip incididunt fugiat esse dolor aute fugiat minim eiusmod do velit labore fugiat officia ad sit culpa labore in consectetur sint cillum sint consectetur voluptate adipisicing Duis irure magna ut sit amet reprehenderit.</p>

   			</div>

   			<div class="widget widget_tags">
               <h3>Post Tags.</h3>

               <div class="tagcloud group">
                  <?php 
            $sorgu = $db->query("SELECT * FROM etiket",PDO::FETCH_ASSOC);
            if($sorgu -> rowCount())
            {
               foreach ($sorgu as $row) {
 ?>
               
             
                  <a href="#"><?php echo $row['html']?></a>
                  <a href="#"><?php echo $row['php']?></a>
                  <a href="#"><?php echo $row['database']?></a>
               

<?php 
}
}
 ?>
                

               </div>
                  
            </div>

            <div class="widget widget_popular">
               <h3>Popular Post.</h3>

               <ul class="link-list">
                  <li><a href="#">Sint cillum consectetur voluptate.</a></li>
                  <li><a href="#">Lorem ipsum Ullamco commodo.</a></li>
                  <li><a href="#">Fugiat minim eiusmod do.</a></li>                     
               </ul>
                  
            </div>
   			
   		</div> <!-- end sidebar -->