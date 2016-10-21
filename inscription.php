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
	font-family: "Chiller";
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
	border-spacing: 10px 10px;
  margin-bottom: 10px;
}
input
{
  font-family: "Chiller";
  font-size: 20px;
}

</style>

<title>
  Inscription
</title>

<h1>
	DETAIL DES RESERVATIONS
</h1>
<div align = 'center'>

  <table align="center">
  	<?php
  		for($i = 0; $i < $travel->get_traveler(); $i++)
  		{
  			echo "<table> <td align='center'>Passager ".($i+1).":</tr>";
  			echo "<td> Nom </td>";
  			echo "<td> <input type='text' name='name".$i."'></td></tr>";
  			echo "<td> Age </td>";
  			echo "<td> <input type='number' min='0' name='age".$i."' </td></tr>";
  			echo "</table>";
  		}
  	?>
    <form method='post' action='validation.php?'>
  	<td align='left'> <input type='submit' value='Etape suivante' name='Submit1'>
    </form>
  	<form method='post' action='reservation.php?'>
  		<input type='submit' value='Retour à la page précédente'>
  	</form>
  	<form method='post' action='reservation.php?page=cancel'>
  		<input type='submit' value='Annuler la réservation'>
  	</form>
  	</td>
  </table>
</div>
