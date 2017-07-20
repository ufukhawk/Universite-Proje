<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
<?php 
include  "database.php"
 ?>
   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Keep It Simple.</title>
	<meta name="description" content="">  
	<meta name="author" content="">

	<!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">  
	<link rel="stylesheet" href="css/media-queries.css"> 

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

</head>

<body>

   <!-- Header
   ================================================== -->
   <header id="top">

   	<div class="row">

   		<div class="header-content twelve columns">
   			<?php 
   			$sorgu = $db->query("SELECT * FROM header",PDO::FETCH_ASSOC);
   			if($sorgu -> rowCount())
   			{
   				foreach ($sorgu as $row) {
 ?>
   				
   		 <h1 id="logo-text"><a href="index.php" title=""><?php echo $row['baslik']  ?></a></h1>
				<p id="intro"><?php echo $row['aciklama'] ?></p>

<?php 
}
}
 ?>
			</div>			

	   </div>

	    <?php 
include  "baslikmenusu.php"
 ?>


	   
   </header> <!-- Header End -->