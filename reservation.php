<?php
	session_start();
	require ('traveler.php');
	require ('holyday.php');

	$nb_travelers = 0;
	$destination = "";
	$insurance = false;

	// Load existing travel if travel there is
	if(!empty($_SESSION['travel']))
	{
		$travel = unserialize($_SESSION['travel']);
	}
	else
	{
		$travel = new holyday ($destination, $nb_travelers, $insurance);
		$_SESSION['travel'] = serialize($travel);
	}


	//XSS protection, Goes on only if submit (from homepage) is pressed
	if (isset($_POST['submit']))
	{
		// protection : 2 informations
		if(isset($_POST['destination'], $_POST['nb_travelers']))
		{
			// nombre of passagers = integer
			if(intval($_POST['nb_travelers']))
			{
				$nb_travelers=$_POST['nb_travelers'];
			}
			//take all characters for name of the city
			$destination = htmlspecialchars($_POST['destination']);
		}
		if (isset ($_POST['insurance']))
		{
			$insurance= true;
		}
	//New informations added to the Holiday
	$travel = new holyday ($destination, $nb_travelers, $insurance);
	$_SESSION['travel'] = serialize($travel);
}

//Vertifies if a traveler already exists
//If not, a new one is created
if(!empty($_SESSION['passenger']))
{
	$passenger[]= unserialize($_SESSION['passenger']);
}

//XSS protection, Goes on only if Submit1 (from inscription) is pressed
if (isset($_POST['Submit1']))
{
	for($i = 0; $i < $info-> get_traveler(); $i++)
	{
		$name = "";
		$age = 0;
		//XSS protection
		//Creation of a new array passenger which contains de travelers
		if(isset($_POST['name'.$i], $_POST['age'.$i]))
		{
			// protection : age = int
			if(intval($_POST['age'.$i]))
			{
				$age = $_POST['age'.$i];
			}
			$name = htmlspecialchars($_POST['name'.$i]);
			$passenger[$i] = new traveler ($name, $age);
		}
	}
	$_SESSION['passenger'] = serialize($passenger);
}

if (isset($_GET['page']))
{
	$page = $_GET['page'];
}
else
{
	$page = 'homepage';
}

	//Controls which page is showed
	switch($page)
	{
		case 'homepage':
			include ('homepage.php');
			break;
		case 'inscription':
			include ('inscription.php');
			break;
		case 'cancel':
			session_destroy();
			header ('Location: reservation.php?page=homepage');
			exit();
			break;
		default:
			include ('homepage.php');
	}
?>
