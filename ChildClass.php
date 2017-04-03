<?php 
	// this file will extend PArentClass.php

	class ChildClass extends ParentClass {
		private $cloner;

		/*public function __clone() {
			$this->cloner = clone $this;
		}*/

		public function __construct($name) {
			parent::__construct($name);
			$this->cloner = clone $this;
		}

		public function __toString() {
			$returnable = "";
			$returnable .= parent::__toString();
			return $returnable;
		}

		public function printSongsByArtist($artist) {
			$returnable = array();
			foreach ($this->songArtistsArray as $key => $value) {
				if($value == $artist) {
					array_push($returnable, $key);
				}
			}

			return $returnable;
		}

		public function editArtistOfSong($song, $artist) {
			if(isset($this->songArtistsArray[$song])) {
				$this->songArtistsArray[$song] = $artist;
			}
		}

	}
?>
