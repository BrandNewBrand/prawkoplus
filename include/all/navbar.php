<div id="first-icon" class="profile-icon container-fluid d-flex justify-content-end">
	<div class="dropdown">
		<button class="dropbtn"><i class="far fa-user fa-2x text-white"></i></button>
		
		<div class="dropdown-content">
			<div class="dropdown_padding px-0">
				<a href="<?php echo $pageprefix; ?>index.php">Start</a>
				<?php if ($_SESSION['zalogowany']>0) { echo '<a href="'.$pageprefix.'twoj-profil.php">Moje konto</a>';
				} else {echo '<a href="'.$pageprefix.'logowanie.php">Zaloguj się</a>';} ?>
				<?php if ($_SESSION['zalogowany']>0) {
					echo '<a href="'.$pageprefix.'backend/log_out.php" class="wyloguj">Wyloguj się</a>';
				} ?>
			</div>
		</div>
		
	</div>
</div>