<!DOCTYPE>

<html>
			<head>
			 <link rel="stylesheet" href="stylesheet.css">
			<head>


<body>

		<center>


	<?php 
	include "header.php";
	?>
			
	


<!----------------------MISE EN FORME----------------------------------->	
	
<table>
			<?php             
    			include('tableau.php');
    			foreach ($spectacle as $clef)    
    			{
			?>
   	 <tr>
			<?php
       			 foreach ($clef as $valeur =>$element) {
			?>     

        <td class="lien">
			<?php           
			echo $element." ";
			?>      

  
	</td>
			<?php    
 			}         
			?>     

 
        </tr>
			<?php 
   	 		}
			?>

</table>
	
<!----------------------FIN MISE EN FORME----------------------------------->			

		</center>

	<?php 
	include "footer.php";
	?>
	
</body>
</html>
