<div id="first-icon" class="profile-icon container-fluid d-flex justify-content-end">
	<div class="dropdown">
		<button class="dropbtn"><i class="far fa-user fa-2x text-white"></i></button>
		
		<div class="dropdown-content">
			<div class="dropdown_padding px-0">
				<a href="<?php echo $pageprefix; ?>index.php">Start</a>
				<?php if ($_SESSION['zalogowany']>0) { echo '<a href="'.$pageprefix.'twoj-profil.php">Moje konto</a>';
				} else {echo '<a href="'.$pageprefix.'logowanie.php">Zaloguj się</a>';} ?>
				<?php if ($_SESSION['zalogowany']>0) {
					echo '<form class="wyloguj py-2 pb-3 pl-2" method="POST" action="backend/log_out.php"><input type="hidden" value="1"><input type="submit" value="Wyloguj" class="text-primary"></form>';
				} ?>
			</div>
		</div>
		
	</div>
</div>