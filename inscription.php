<meta charset="utf-8">

<title>
  Inscription
</title>

<h1>
	DETAIL DES RESERVATIONS
</h1>

<p>
	DESTINATION: <?php echo $travel->get_destination() ?>
</p>

<table>
	<?php
		for($i = 0; $i < $travel->get_traveler(); $i++)
		{
			echo "<table> <td align='center'>Passager ".($i+1).":</tr>";
			echo "<td> Nom </td>";
			echo "<td> <input type='text' name='name".$i."'></td></tr>";
			echo "<td> Age </td>";
			echo "<td> <input type='number' min='0' name='age".$i."' </td></td></tr>";
			echo "</table>";
		}
	?>

	<td align='left'> <input type='submit' value='Etape suivante' name='Submit1'>
	<form method='post' action='reservation.php?'>
		<input type='submit' value='Retour à la page précédente'>
	</form>
	<form method='post' action='reservation.php?page=cancel'>
		<input type='submit' value='Annuler la réservation'>
	</form>
	</td>
</table>

</body>
</html>
