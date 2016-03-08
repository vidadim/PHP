<?php 
	/**
	* 
	*/
	class Book
	{
		
		public $name;
		public $price;
		public $author;
		public $img_path;

	}

	$shibumi=new Book();
	$shibumi->name="Shibumi";
	$shibumi->price=5;
	$shibumi->author="Trevanian";
	$shibumi->img_path="img/1.jpg";


	$oliver=new Book();
	$oliver->name="Oliver Twist";
	$oliver->price=6;
	$oliver->author="Charles Dickens";
	$oliver->img_path="img/2.jpg";

	$outlier=new Book();
	$outlier->name="Outliers";
	$outlier->price=10;
	$outlier->author="Malcolm Gladwell";
	$outlier->img_path="img/3.png";

	$phpfordum=new Book();
	$phpfordum->name="PHP for Dummies";
	$phpfordum->price=60;
	$phpfordum->author="Janet Valade";
	$phpfordum->img_path="img/4.jpg";

	$elifba=new Book();
	$elifba->name="Elifba";
	$elifba->price=15;
	$elifba->author="Xalq";
	$elifba->img_path="img/5.jpg";

	$csharp=new Book();
	$csharp->name="C# Programming";
	$csharp->price=40;
	$csharp->author="Orkhan Abbasli";
	$csharp->img_path="img/6.jpg";

	$javascripts=new Book();
	$javascripts->name="Javascript: The Good Parts";
	$javascripts->price=20;
	$javascripts->author="Douglas Crockford";
	$javascripts->img_path="img/7.png";

	$maink=new Book();
	$maink->name="Main Kampf";
	$maink->price=70;
	$maink->author="Adolf Hitler";
	$maink->img_path="img/8.jpg";


	$books=[$shibumi,$oliver,$outlier,$phpfordum,$elifba,$csharp,$javascripts,$maink];


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>OBJECT</title>
 	<style type="text/css">
 	img{
 		width: 150px;
 	}
 	ul{display: inline-block; }
 	ul li{
 		list-style: none;
 	}
 	</style>
 </head>
 <body>
 	<?php 
 		$search_results=[];
 		// var_dump($books);
 		for ($i=0; $i < count($books); $i++) { 

 			if($books[$i]->price<$_POST['item']){
 				array_push($search_results,$books[$i]);
 				
 			}			

 		}
 		for ($j=0; $j < count($search_results); $j++) { 
 				echo "<ul>";
 			echo "<li><img src=".$search_results[$j]->img_path.">";	
 			echo "<li>Book name: ".$search_results[$j]->name."</li>";
 			echo "<li>Book price: ".$search_results[$j]->price."</li>";;
 			echo "<li>Author: ".$search_results[$j]->author."</li>";;
 			echo "</ul>";
 			}
 	 ?>
 </body>
 </html>