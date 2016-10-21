<meta charset="utf-8">
<style>
h1
{
  font-family: "Chiller";
	color: black;
	text-align: center;
	font-size: 60px;
	font-weight: bold;
	margin-bottom: 20px;

}

p
{
	font-family: "Arial";
	color: black;
	text-align: center;
	font-size: 15px;
	line-height: 30px;
}

table
{
	font-family: "Chiller";
	color: black;
	text-align: left;

	font-size: 30px;
	border-width: 2px;
	border-style: solid;
	border-spacing: 10px 30px;
  margin-bottom: 10px;
}
input
{
  font-family: "Chiller";
  font-size: 20px;
}

</style>

<title> Validation </title>
<h1>
	Validation
</h1>
<p>
	DESTINATION: <?php echo $travel->get_destination() ?> </br>
	NOMBRE DE PLACES: <?php echo $travel->get_traveler()?>
</p>

<table>
	<form method='post' action='reservation.php?page=confirmation'>
	<?php
		for($i = 0; $i < $travel->get_traveler(); $i++)
		{
			echo ($i+1).' Nom:'.$passenger[$i]->get_name().'</br>';
			echo '</br> Age:'.$passenger[$i]->get_age().'</br></br>';
		}

		if ($info->get_insurance())
				{
				echo 'Assurance annulation: Oui';
				}
	?>
	<td align='center'> <input type='submit' value='Confirmer' name='submit2'> </td>
	</form>

	<form method='post' action='controller.php?page=details'>
	<td align='center'> <input type='submit' value='Retour �� la page pr�c�dente'> </td>
	</form>
	<form method='post' action='controller.php?page=cancel'>
	<td align='center'> <input type='submit' value='Annuler la r�servation'> </td>
	</form>
</table>
</body>
</html>
