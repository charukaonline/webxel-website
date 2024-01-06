<?php

@include '../config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
	header('location: /login_user_and_admin_page/login_form.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

	<link rel="stylesheet" href="../assets/css/admin_and_user.css">

	<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>


	<title>WEBXEL - Admin</title>
	<link rel="icon" type="image/png" href="../assets/images/logo2.jpg">
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6JKJ2Y1W5K"></script>
<script>
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}
	gtag('js', new Date());

	gtag('config', 'G-6JKJ2Y1W5K');
</script>

<body>

	<?php include('../admin_panel/includes/sidebar.php'); ?>

	<!-- CONTENT -->
	<section id="content">

		<?php include('../admin_panel/includes/navbar.php'); ?>

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
				</div>
			</div>

			<ul class="box-info">

				<?php

				$confirmed_orders = "SELECT COUNT(*) as count FROM confirmed_orders";
				$order_result = mysqli_query($conn, $confirmed_orders);

				if ($order_result->num_rows > 0) {
					$row = $order_result->fetch_assoc();
					$count = $row['count'];
				?>

					<li>
						<i class='bx bxs-calendar-check'></i>
						<span class="text">
							<?php
							echo "<h3>$count</h3>"
							?>
							<p>Complete Orders</p>
						</span>
					</li>
				<?php
				} else {
					echo "<h3>0 results</h3>";
				}
				?>

				<?php

				$active_users = "SELECT COUNT(*) as count FROM login_and_register WHERE user_type = '' ";
				$active_users_result = mysqli_query($conn, $active_users);

				if ($active_users_result->num_rows > 0) {
					$row = $active_users_result->fetch_assoc();
					$count = $row['count'];
				?>

					<li>
						<i class='bx bxs-group'></i>
						<span class="text">
							<?php
							echo "<h3>$count</h3>"
							?>
							<p>Active Clients</p>
						</span>
					</li>
				<?php
				} else {
					echo "<h3>0 results</h3>";
				}
				?>
			</ul>


			<div class="table-data">
				<div class="order">
					<h2>Orders</h2><br>
					<table>
						<thead>
							<tr>
								<th>ID</th>
								<th>User</th>
								<th>Service Type</th>
								<th>Accepted Admin Email</th>
							</tr>
						</thead>
						<tbody>
							<?php

							function getAll($table)
							{
								global $conn;
								$query = "SELECT * FROM $table";
								return mysqli_query($conn, $query);
							}

							$orders = getAll("confirmed_orders");

							if ($orders) {
								if (mysqli_num_rows($orders) > 0) {
									while ($record = mysqli_fetch_assoc($orders)) {
							?>
										<tr>
											<td><?= $record['confirmed_order_id'] ?></td>
											<td><?= $record['name'] ?></td>
											<td><?= $record['service_type'] ?></td>
											<td><?= $record['admin_email'] ?></td>
										</tr>
							<?php
									}
								} else {
									echo "No records found";
								}
							} else {
								echo "Error in retrieving records: " . mysqli_error($conn); // Display any potential errors
							}
							?>
						</tbody>
					</table>
				</div>

				<?php include('../admin_panel/includes/footer.php'); ?>
			</div>
		</main>
		<!-- MAIN -->

	</section>
	<!-- CONTENT -->

	<script src="../assets/js/admin.js"></script>

</body>

</html>