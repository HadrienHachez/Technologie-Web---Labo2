
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

<title>homepage</title>
<h1>RESERVATION</h1>
<div align='center'>

<form method='post' action='reservation.php?page=inscription'>
  <table align="center">
    <td> Destination </td>
    <td> <input type='text' name='destination' value='<?php echo $travel->get_destination(); ?>'></tr>
      <td> Nombre de places </td>
      <td> <input type='number' min='0' name='nb_travelers' value='<?php echo $travel->get_traveler(); ?>'> </td></tr>
      <td> Assurance annulation </td>
      <td align='right'> <input type='checkbox' name='insurance'></td></tr>
  </table>
  <input type='submit' value='Etape suivante' align='left' name='submit'>
</form>
<form method='post' action='reservation.php?page=cancel'>
  <input type='submit' align='right' value='Annuler'>
</form>


<p>
  Le prix de la place est de 10€ jusqu'à 12 ans et ensuite de 15 euros. </br>
  Le prix de l'assurance annulation est de 20€ indépendamment du nombre de voyageurs. </br></br>
</p>
</div>
