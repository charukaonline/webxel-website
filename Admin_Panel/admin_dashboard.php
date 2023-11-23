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
				<li>
					<i class='bx bxs-calendar-check'></i>
					<span class="text">
						<h3>11</h3>
						<p>Complete Orders</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group'></i>
					<span class="text">
						<h3>9</h3>
						<p>Active Clients</p>
					</span>
				</li>
				<!-- <li>
					<i class='bx bxs-dollar-circle'></i>
					<span class="text">
						<h3>$2543</h3>
						<p>Total Revenue</p>
					</span>
				</li> -->
			</ul>


			<div class="table-data">
				<div class="order">
					<table>
						<thead>
							<tr>
								<th>ID</th>
								<th>User</th>
								<th>Service Type</th>
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

							$orders = getAll("orders");

							if ($orders) {
								if (mysqli_num_rows($orders) > 0) {
									while ($record = mysqli_fetch_assoc($orders)) {
							?>
										<tr>
											<td><?= $record['order_id'] ?></td>
											<td><?= $record['name'] ?></td>
											<td><?= $record['service_type'] ?></td>
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
				<div class="todo">
					<div class="head">
						<h3>Todos</h3>
						<i class='bx bx-plus'></i>
						<i class='bx bx-filter'></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded'></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded'></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded'></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded'></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded'></i>
						</li>
					</ul>
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