
<meta charset="utf-8">

<title>
  Réservation
</title>
<h1>
  RESERVATION
</h1>
<p1>
  Le prix de la place est de 10€ jusqu'à 12 ans et ensuite de 15 euros. </br>
  Le prix de l'assurance annulation est de 20€ indépendamment du nombre de voyageurs. </br></br>
</p1>

<form method='post' action='reservation.php?page=inscription'>
<table>

  <td> Destination </td>
  <td> <input type='text' name='destination' value=''></tr>
  <td> Nombre de places </td>
  <td> <input type='number' min='0' name='nb_travelers' value=''> </td></tr>
    <td> Assurance annulation </td>
  	<td align='right'> <input type='checkbox' name='insurance'></td></tr>
  	<td align='right'> <input type='submit' value='Etape suivante' name='submit'> </td>
  	</form>
  	<form method='post' action=''>
  	<td align='right'> <input type='submit' value='Annuler'> </td></tr>
  </form>

</table>
