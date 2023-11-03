<section id="sidebar">
    <a href="/Admin_Panel/admin_dashboard.php" class="brand">
        <span class="text">Welcome <?php echo ($_SESSION['user_name']); ?></span>
    </a>
    <ul class="side-menu top">
        <li>
            <a href="../index.php">
                <i class='bx bxs-home'></i>
                <span class="text">W&#x039E;&#x042;X&#x039E;L</span>
            </a>
        </li>
        <li>
            <a href="/Admin_Panel/notification.php">
                <i class='bx bxs-bell'></i>
                <span class="text">Notification</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">

        <li>
            <a href="/user_panel/user_dashboard.php">
                <i class='bx bxs-user'></i>
                <span class="text">Profile</span>
            </a>
        </li>
        <li>
            <a href="/Login_User_and_Admin_page/logout.php" class="logout">
                <i class='bx bx-log-out'></i>
                <span class="text">Log Out</span>
            </a>
        </li>
    </ul>
</section>