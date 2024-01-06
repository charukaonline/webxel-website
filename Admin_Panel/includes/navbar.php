<nav>
	<i class='bx bx-menu'></i>

	<form action="#">
		<div class="form-input">
			<input type="search" placeholder="Search...">
			<button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
		</div>
	</form>

	<input type="checkbox" id="switch-mode" hidden>
	<!-- <label for="switch-mode" class="switch-mode"></label> -->

	<a href="/admin_panel/notification.php" class="notification">

		<i class='bx bxs-bell'></i>
		<span id="unreadMessages" class="num">

			<?php

			$active_users = "SELECT COUNT(*) as count FROM orders WHERE order_status = 'Pending...' ";
			$active_users_result = mysqli_query($conn, $active_users);

			if ($active_users_result->num_rows > 0) {
				$row = $active_users_result->fetch_assoc();
				$count = $row['count'];
			?>

				<li>
					<span class="text">
						<?php
						echo "<h3>$count</h3>"
						?>
					</span>
				</li>
			<?php
			} else {
				echo "<h3>0</h3>";
			}
			?>

		</span>
	</a>

	<a href="/admin_panel/admin_profile.php" class="profile">
		<?php
		function getMyProfileImage($table, $admin_email)
		{
			global $conn;
			$query = "SELECT * FROM $table WHERE email = '$admin_email' ";
			return mysqli_query($conn, $query);
		}

		if ($_SESSION['admin_email']) {
			$admin_email = $_SESSION['admin_email'];
			$get_admin_profile = getMyProfileImage("login_and_register", $admin_email);

			if ($get_admin_profile) {
				if (mysqli_num_rows($get_admin_profile) > 0) {
					while ($record = mysqli_fetch_assoc($get_admin_profile)) {
		?>
						<img src="../uploads/<?= $record['pp'] ?>" alt="Profile" class="rounded-circle">

		<?php
					}
				}
			}
		}
		?>
	</a>
</nav>