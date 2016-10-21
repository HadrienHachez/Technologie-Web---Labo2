<?php
	class holyday
	{
		private $destination;
		private $nb_travelers;
		private $insurance;
		private $listOfTravelers;

    // new holyday //
		public function __construct($destination, $nb_places, $insurance)
		{
		   $this->destination = $destination;
		   $this->nb_travelers = $nb_places;
		   $this->insurance = $insurance;
		   $this->listTravelers = array();
		}

    // Save destination //
		public function get_destination()
		{
		   return $this->destination ;
		}

    // Save traverler //
		public function get_traveler()
		{
		   return $this->nb_travelers;
		}

    // Save insurance //
		public function get_insurance()
		{
			return $this->insurance;
		}
    // Save list of Travelers //
		public function get_list()
		{
			return $this->listOfTravelers;
		}

    // Save one more traveler //
		public function add_traveler($name, $age)
		{
			$passenger  = new Traveler($name, $age);
			$listTravelers[] = $passenger;
		}
	}
?>
