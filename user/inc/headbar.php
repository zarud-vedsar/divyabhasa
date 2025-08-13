<body>
    <style>
        #loader {
    background: #6c757ded;
}

.loader-wrapper {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.2);
    /* Semi-transparent dark background */
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 9999;
    /* Make sure it's on top of other content */
}

.loader {
    border: 4px solid rgba(255, 255, 255, 0.2);
    /* Semi-transparent border */
    border-top: 4px solid #ffffff;
    /* White border for spinning effect */
    border-radius: 50%;
    width: 40px;
    height: 40px;
    animation: spin 1s linear infinite;
    /* Rotation animation */
}

@keyframes spin {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}
    </style>
   
<div id="loader">
        <div class="loader-wrapper">
            <div class="loader"></div>
        </div>
    </div>
    <!-- Main Wrapper -->
    <div class="main-wrapper" >

        <!-- Header -->
        <div class="header" id="desktop_nav">

            <!-- Logo -->
            <div class="header-left">
                <a href="index.php" class="logo mx-auto">
                    <img src="./assets/img/gns-logo.png" alt="Logo">
                </a>
                <a href="index.php" class="logo logo-small">
                    <img src="./assets/img/gns-logo.png" alt="Logo" width="30" height="30">
                </a>
            </div>
            <!-- /Logo -->

            <div class="menu-toggle">
                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="fas fa-bars"></i>
                </a>
            </div>

            <!-- Mobile Menu Toggle -->
            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>
            <!-- /Mobile Menu Toggle -->

            <!-- Header Right Menu -->
            <ul class="nav user-menu">
                <!-- User Menu -->
                <li class="nav-item dropdown has-arrow new-user-menus">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <div class="user-img">
                            <?php
                            $select_user = runFatch("SELECT * FROM tbl_users WHERE id = '{$_SESSION['user_id']}' ");

                            $user_profile = $select_user[0]['profile'];
                            if ($user_profile) {
                            ?>
                                <img class="rounded-circle" src="../upload/<?= $select_user[0]['profile'] ?>" width="31" alt="<?= $select_user[0]['name'] ?>">
                            <?php
                            } else {
                            ?>
                                <img class="rounded-circle" src="./assets/img/profiles/avatar-01.jpg" width="31" alt="avtar">
                            <?php
                            }
                            ?>
                            <div class="user-text">
                                <h6><?= $select_user[0]['name'] ?></h6>
                                <p class="text-muted mb-0">
                                    Student
                                </p>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <?php
                                $user_profile = $select_user[0]['profile'];
                                if ($user_profile) {
                                ?>
                                    <img src="../upload/<?= $select_user[0]['profile'] ?>" alt="User Image" class="avatar-img rounded-circle">
                                <?php
                                } else {
                                ?>
                                    <img src="./assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
                                <?php
                                }
                                ?>
                            </div>
                            <div class="user-text">
                                <h6><?= $select_user[0]['name'] ?></h6>
                                <p class="text-muted mb-0">
                                    Admin
                                </p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="profile.php?user_id=<?= $select_user[0]['id'] ?>">My Profile</a>
                        <a class="dropdown-item" href="./logout.php">Logout</a>
                    </div>
                </li>
                <!-- /User Menu -->

            </ul>
            <!-- /Header Right Menu -->

        </div>
        <!-- /Header -->

         <!-- new content  -->
         <div class="top-bar" id="mobile_nav" >
            <div class="top-left">

                <?php
                $user_profile = $select_user[0]['profile'];
                if ($user_profile) {
                ?>
                    <img src="../upload/<?= $select_user[0]['profile'] ?>" alt="User Image" class="avatar-top-left">
                <?php
                } else {
                ?>
                    <img src="./assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-top-left">
                <?php
                }
                ?>
                
                <h2 class="top-left-name">Hello <?= $select_user[0]['name'] ?>!</h2>
            </div>
            <div class="top-right" style="text-align: end;">
                <!-- <img src="./gnsingh.png" class="blogo"> -->
                <!-- <img src="./assets/img/gns-logo.png" class="blogo" alt="Logo"> -->
                <div id="logout-right"><a onclick="localStorage.clear()" href="./logoutapp.php"><i class="fas fa-sign-out-alt"></i></a></div>
            </div>
        </div>
        <div class="naruko-main-content" >
            <!-- CONTENT GOES HERE -->

            <!-- new content  -->
             <script>
                
                document.getElementById("logout-right").addEventListener("click",()=>{

                    localStorage.removeItem("appId");
                })
         setTimeout(() => {
        document.getElementById('loader').style.display = 'none';
    }, 1000); // hide delay when page load
    </script>