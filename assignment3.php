<?php
	//include($_SERVER['DOCUMENT_ROOT'] . "/ParentClass.php");
	include('ParentClass.php');
	include('ChildClass.php');
	$parent = new ParentClass("Eric");
	$parentClone = clone $parent;
	$child = new ChildClass("E2");

//	$parent->addSong("song1", "artist1");
//	$child->addSong("song2", "artist2");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
	<div class="container">
		<h1>PHP Playlist Lister!</h1>
		<div class="show">
			<h3>Defaults after instantiation:</h3>
			<?php
				echo "<h5>Parent: " . $parent . "</h5>";
				echo "<h5>Child: " . $child . "</h5>"
			?>
		</div>

		<div class="show">
			<h3>Adding songs....</h3>
			<h5>Parent: </h5>
			<p>
				Adding song 'parent1Song' by 'parent1Artist'<br />
				Adding song 'parent2Song' by 'parent2Artist'
				<?php
					$parent->addSong("parent1Song", "parent1Artist");
					$parent->addSong("parent2Song", "parent2Artist");
					echo "<h5>Parent: " . $parent . "</h5>";
				?>
			</p>

			<h5>Child: </h5>
			<p>
				Adding song 'child1Song' by 'child1Artist'
				Adding song 'child2Song' by 'child2Artist'
				<?php
					$child->addSong("child1Song", "child1Artist");
					$child->addSong("child2Song", "child2Artist");
					echo "<h5>Child: " . $child . "</h5>"
				?>
			</p>
		</div>

		<div class="show">
			<h3>Remove Song from each</h3>
			<?php
				$parent->removeSong("parent1Song");
				$child->removeSong("child1Song");
				echo "<h5>Parent: " . $parent . "</h5>";
				echo "<h5>Child: " . $child . "</h5>"
			?>
		</div>

		<div class="show">
			<h3>Additional ChildClass functions:</h3>
			<h5>Print all songs by artist 'child2Artist'<h5>

			<?php
				$songsbyArtist = $child->printSongsByArtist("child2Artist");
				foreach ($songsbyArtist as $value) {
					echo "<li>" . $value . "</li>";
				}
			?>
			<h5>Edit an artist of a song:<h5>
			<?php
				$child->editArtistOfSong("child2Song", "newArtistOfSong2");
				echo $child;
			?>

			<h5>ChildClass toString:<h5>
			<?php
				echo $child;
			?>
		</div>
	</div>
</body>
</html>
