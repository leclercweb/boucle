



<!--------------------------- LES SPECTACLES ----------->

<div style="display: inline-block; margin: 15px;">
<h1 style="font-size: 25px;"> Les spectacles </h1>	
			
<?php 

	
$spectacle[0] = 'ballet aérien';
$spectacle[1] = 'clown';
$spectacle[2] = 'elephant';

$nbspectacle = count($spectacle);

for ($i=0;$i<$nbspectacle;$i++)
{
echo $spectacle[$i] . "<br />";
}


?>


</div>





<!--------------------------- LES HEURES ----------->

<div style="display: inline-block; margin: 15px;">
<h1 style="font-size: 25px;"> Heure </h1>	


<?php


$heure[0] = '10h00';
$heure[1] = '12h00';
$heure[2] = '14h00';

$nbheure = count($heure);

for ($i=0;$i<$nbheure;$i++)
{
echo $heure[$i] . "<br />";
}


?>

</div>





<!--------------------------- LES ARTISTES ----------->

<div style="display: inline-block; margin: 15px;">
<h1 style="font-size: 25px;"> Les artistes </h1>	

<?php


$artiste[0] = 'Dumbo';
$artiste[1] = 'Turlututu';
$artiste[2] = 'OULOULOU';

$nbartiste = count($artiste);

for ($i=0;$i<$nbartiste;$i++)
{
echo $artiste[$i] . "<br />";
}


?>
</div>





<!--------------------------- LES IMAGES ----------->

<div style="display: inline-block; margin: 15px;">
<h1 style="font-size: 25px;"> Photos </h1>
	
<?php




$image[0] = 'http://www.lanouvellerepublique.fr/var/nrv2_archive/storage/images/contenus/articles/2015/07/07/ballet-aerien-a-la-nuit-romane-2395244/44218568-1-fre-FR/Ballet-aerien-a-la-Nuit-romane_reference.jpg';
$image[1] = 'https://i.ytimg.com/vi/vFG8qLyRWwI/maxresdefault.jpg';
$image[2] = 'http://www.livescience.com/images/i/000/036/988/original/elephants.jpg?interpolation=lanczos-none&downsize=*:1000';

$nbimage = count($image);

for ($i=0;$i<$nbimage;$i++)

{
echo  "<img width='20' height='20' src='$image[$i]'><br />";
}



?>		
</div>	
