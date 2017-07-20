  <footer>

      <div class="row"> 
<?php 
            $sorgu = $db->query("SELECT * FROM sosyalmedya",PDO::FETCH_ASSOC);
            if($sorgu -> rowCount())
            {
               foreach ($sorgu as $row) {
 ?>
               
        <div class="twelve columns">   
            <ul class="social-links">
               <li><a target="_blank"  href=" http://www.facebook.com/<?php echo $row['facebook'] ?>"<i class="fa fa-facebook"></i></a></li>
               <li><a target="_blank"  href="http://www.twitter.com/<?php echo $row['twitter'] ?>"><i class="fa fa-twitter"></i></a></li>
               <li><a target="_blank"  href="http://www.instagram.com/<?php echo $row['instagram'] ?>"><i class="fa fa-instagram"></i></a></li>               
               <li><a target="_blank"  href="http://www.github.com/<?php echo $row['gitup'] ?>"><i class="fa fa-github-square"></i></a></li>
            
            </ul>       
         </div>
         <?php
}
}
 ?>
         <div class="six columns info">

            <h3>About Keep It Simple</h3> 

            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
            nibh id elit. 
            </p>

            <p>Lorem ipsum Sed nulla deserunt voluptate elit occaecat culpa cupidatat sit irure sint 
            sint incididunt cupidatat esse in Ut sed commodo tempor consequat culpa fugiat incididunt.</p>

         </div>

         <div class="four columns">

            <h3>Photostream</h3>
            
            <ul class="photostream group">
               <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
               <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
               <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
               <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
               <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
               <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
               <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
               <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
            </ul>           

         </div>

         <div class="two columns">
            <h3 class="social">Navigate</h3>

            <ul class="navigate group">
               <li><a href="#">Home</a></li>
               <li><a href="#">Blog</a></li>
               <li><a href="#">Demo</a></li>
               <li><a href="#">Archives</a></li>
               <li><a href="#">About</a></li>
            </ul>
         </div>

         <p class="copyright">&copy; Copyright 2014 Keep It Simple. &nbsp; Design by <a title="Styleshout" href="http://www.styleshout.com/">Styleshout</a>.</p>
        
      </div> <!-- End row -->

      <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-chevron-up"></i></a></div>

   </footer> <!-- End Footer-->