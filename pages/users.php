<?
include_once('../components/db.php');
$myProfile = $_SESSION['user_id'];
$myProfile ? '' : header("Location: ./login.php");
$sql = mysqli_query($conn, "SELECT * FROM users WHERE user_id = {$myProfile}");
if (mysqli_num_rows($sql) > 0) {
    $profile = mysqli_fetch_assoc($sql);
}
include_once('header.php');
?> 
    <div class="wrapper">
        <section class="users">
            <div class="header">
                <div class="header_profile">
                    <img src="<?= $profile['avatar']?>" class="profile_avatar" alt="">
                    <div class="profile_details">
                        <h3 class="profile_name"><?= $profile['name']?></h3>
                        <p class="profile_status"><?= $profile['status']?></p>
                    </div>
                </div>
                <a href="#" class="btn logout">Log out</a>
            </div>
            <div class="search">
                <div class="search_field">
                    <input type="text" name="search" class="form_search" tabindex="-1" placeholder="Search users...">
                    <span class="search_icon"><i class="fas fa-search"></i></span>
                    <span class="search_cancel"><i class="fas fa-times"></i></span>
                </div>
                <p class="search_text">Select an user to start Chat</p>
            </div>
            <div class="user_list"></div>
            <span class="phpMessage"></span>
        </section>
    </div>

    <script src="../js/users.js?v=<?= time();?>"></script>

</body>
</html>