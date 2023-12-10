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
    <a href="#notification" class="notification">
        <i class='bx bxs-bell'></i>
        <span class="num"></span>
    </a>

    <a href="/admin_panel/admin_profile.php" class="profile">
        <?php
        function getMyProfileImage($table, $user_email)
        {
            global $conn;
            $query = "SELECT * FROM $table WHERE email = '$user_email' ";
            return mysqli_query($conn, $query);
        }

        if ($_SESSION['user_email']) {
            $user_email = $_SESSION['user_email'];
            $get_admin_profile = getMyProfileImage("login_and_register", $user_email);

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