<?php
	// This is the file for the parent class

	class ParentClass {
		protected $userName = "";
		protected $songArtistsArray = array();

		public function __construct($name) {
				$this->userName = $name;
		}

		public function __clone() {
			return $this;
		}

		public function addSong($song, $artist) {
			$this->songArtistsArray[$song] = $artist;
		}

		public function removeSong($song) {
			unset($this->songArtistsArray[$song]);
		}

		public function __toString() {
			$returnable = "";
			if(isset($this->songArtistsArray)) {
				$returnable .= $this->userName . "'s playlist:::";
				foreach ($this->songArtistsArray as $key => $value) {
					$returnable .= $key . " -> " . $value;
				}

				return $returnable;
			}
		}
	}
