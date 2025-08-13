<?php
require "./inc/head.php";
require "./inc/headbar.php";
require "./inc/sidebar.php";
?>
<style>
    .fxbtn {
        position: fixed;
        bottom: 100px;
        right: 20px;
        cursor: pointer;
        font-weight: 700;
        transition: all 0.2s;
        padding: 10px 20px;
        border-radius: 100px;
        background: #cfef00;
        border: 1px solid transparent;
        display: flex;
        align-items: center;
        font-size: 15px;
        box-shadow: 0 0 0 0 #C4E201;
        -webkit-animation: pulsing 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
        -moz-animation: pulsing 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
        -ms-animation: pulsing 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
        animation: pulsing 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
    }

    @keyframes pulsing {
        to {
            box-shadow: 0 0 0 30px rgba(232, 76, 61, 0);
        }
    }

    .fxbtn:hover {
        background: #c4e201;
    }

    .fxbtn>svg {
        width: 34px;
        margin-left: 10px;
        transition: transform 0.3s ease-in-out;
    }

    .fxbtn:hover svg {
        transform: translateX(5px);
    }

    .fxbtn:active {
        transform: scale(0.95);
    }
    @media screen and (min-width:0px) and (max-width: 950px) {
        .page-wrapper>.content {
        padding: 0;
    }
    .nav-tabs .nav-link {
   
    padding: 10px 13px;
   
}
.fxbtn {
padding: 5px 12px;
    }
}
   

</style>

<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Course Details</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Course Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <?php
        if (isset($_GET['cid']) && !empty($_GET['cid']) && filter_var($_GET['cid'], FILTER_VALIDATE_INT)) {
            $cid = filter($_GET['cid']);
            $sql_classes = "SELECT * FROM `tbl_class` WHERE id = '{$cid}'";
            $classes = runFatch($sql_classes);
            if ($classes) {
                foreach ($classes as $class) {

                    $class_purchased=runFatch("SELECT `id` FROM `zarud_batch` WHERE `userid`='".$user[0]['id']."' AND `classid`='".$cid."'");
                    
                    if(!$class_purchased)
                    {
                        ?>
                            <a href="./purchase-membership-plan.php?cid=<?= $cid ?>">
                            <button class="fxbtn" ><span>Enroll Now</span>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 74 74"
                                    height="34"
                                    width="34">
                                    <circle stroke-width="3" stroke="black" r="35.5" cy="37" cx="37"></circle>
                                    <path
                                        fill="black"
                                        d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z"></path>
                                </svg>
                            </button>
                            </a>

                        <?php
                    }
                    
                    ?>

                    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Enrollment</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ol>
                                                <li class="text-danger">You can register in only one batch at a time.</li>
                                                <input type="hidden" id="classid" value="<?= $class['id']; ?>">
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" id="enrollstudent" class="btn btn-primary">Enroll Now</button>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img src="../upload/<?= $class['image']; ?>" style="aspect-ratio:3/2;" class="img-fluid">

                        </div>
                        <div class="col-md-12 mt-3">
                            <ul class="nav nav-tabs border-0">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#home">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#menu1">Videos Playlist</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#menu2">Live Videos</a>
                                </li>
                            </ul>
                            <?php
                            $checkEnroll = runFatch("SELECT * FROM zarud_batch WHERE userid = {$userid} AND classid = '{$class["id"]}' AND status='0' ");
                            $show = false;
                            if ($checkEnroll) {
                                $show = true;
                            }
                            ?>
                            <!-- Tab panes -->
                            <div class="tab-content mt-3 bg-white">
                                <div class="tab-pane px-0 container active" id="home">
                                    <div class="d-flex w-100 flex-column mt-2 justify-content-between align-items-start">
                                        <span style="font-size: 16px;" class="mb-0 mt-2"><small>Start Date:</small> <small class="text-muted"><?= date('F d, Y', strtotime($class['start_date'])); ?></small></span>
                                        <span style="font-size: 16px;" class="mb-0 mt-2"><small>End Date: </small> <small class="text-muted"><?= date('F d, Y', strtotime($class['end_date'])); ?></small></span>
                                    </div>
                                    <div class="d-flex w-100 flex-column justify-content-between align-items-start">
                                        <span style="font-size: 16px;" class="mb-0 mt-2"><small>Time:</small> <small class="text-muted"><?= date('h:i a', strtotime($class['start_time'])); ?> - <?= date('h:i a', strtotime($class['end_time'])); ?></small></small></span>
                                    </div>
                                    <div class="mt-3">
                                        <?= !empty($class['desc']) ? htmlspecialchars_decode($class['desc']) : '' ?>
                                    </div>
                                </div>
                                <div class="tab-pane px-0 container fade " id="menu1">
                                    <?php
                                    $videos = runFatch("SELECT * FROM tbl_tutorial WHERE class_id = '{$class["id"]}'");
                                    if ($videos) {
                                        $sr = 1;

                                        foreach ($videos as $video) {
                                            $thumb = $video['thumb'];
                                            $src = (strpos($thumb, 'http://') !== false || strpos($thumb, 'https://') !== false) ? $thumb : "../upload/" . $thumb;
                                            

                                            $isfree= ($video['topic_type']==1)? true:false;
                                    ?>

                                            <div class="row">
                                                <div class="col-md-12 mine-col">
                                                    <img src="<?= @$src; ?>" class="avatar-mine">
                                                    <div class="mine-right">
                                                        <h6 class="mine-title"><?= $sr;
                                                                                $sr++; ?>. <?= @$video['title']; ?></h6>
                                                        

                                                        <?php
                                                          if($isfree || $show){
                                                                ?>
                                                                <a href="./play-video.php?type=video&vid=<?= @$video['id']; ?>" class="btn btn-primary">
                                                                    Play Video
                                                                </a>
                                                        <?php
                                                          }
                                                          else{ ?>

                                                            <span class="badge badge-warning"><i class="fas fa-lock"></i></span>
                                                         <?php }
                                                          ?>


                                                    </div>
                                                </div>
                                            </div>
                                            </a>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane px-0 container fade" id="menu2">
                                    <?php
                                    $videosy = runFatch("SELECT * FROM tbl_youtube WHERE class_id = '{$class["id"]}'");
                                    if ($videosy) {
                                        $sr = 1;
                                        foreach ($videosy as $video1) {
                                            $thumb = $video1['thumb'];
                                            $src = (strpos($thumb, 'http://') !== false || strpos($thumb, 'https://') !== false) ? $thumb : "../upload/" . $thumb;
                                            $liveDate = $video1['start_date'];
                                            $today = date('Y-m-d');
                                            $start_time = date('H:i', strtotime($video1['start_time']));
                                            $end_time = date('H:i', strtotime($video1['end_time']));
                                            $disabledM =  false;
                                            // Determine status based on date and time
                                            $status = '';
                                            $disabled = false;
                                            if ($liveDate == $today) {
                                                if ($start_time <= date('H:i') && $end_time > date('H:i')) {
                                                    $status = '<span class="badge badge-success">Live</span>';
                                                    $disabled = false;
                                                } else if ($end_time < date('H:i')) {
                                                    $status = '<span class="badge badge-danger">Expired</span>';
                                                    $disabled = true;
                                                } else {
                                                    $status = '<span class="badge badge-warning">Starts Today</span>';
                                                    $disabled = true;
                                                }
                                            } elseif ($liveDate > $today) {
                                                $status = '<span class="badge badge-warning">Upcoming</span>';
                                                $disabled = true;
                                            } elseif ($liveDate < $today) {
                                                $disabled = true;
                                                $status = '<span class="badge badge-danger">Expired</span>';
                                            }

                                    ?>
                                            <div class="row">
                                                <div class="col-md-12 mine-col">
                                                    <img src="<?= @$src; ?>" class="avatar-mine">
                                                    <div class="mine-right d-flex justify-content-start align-items-start flex-column">
                                                        <h6 class="mine-title"><?= $sr;
                                                                                $sr++; ?>. <?= @$video1['title']; ?></h6>
                                                                                <h6>Start Time: <?= date('h:i a', strtotime($video1['start_time'])) ?></h6>
                                                                                <h6>End Time: <?= date('h:i a', strtotime($video1['end_time'])) ?></h6>
                                                        <p><?= $status; ?></p>
                                                        <?php
                                                        if ($show) {
                                                            if (!$disabledM) {
                                                                if (!$disabled) { ?>
                                                                    <a href="./play-video.php?type=live&vid=<?= @$video1['id']; ?>" class="btn btn-primary">
                                                                        Play Video
                                                                    </a>
                                                                <?php } else { ?>
                                                                    <a href="#" onclick="return false;" style="pointer-events: none; opacity: 0.5;">

                                                                    </a>
                                                                <?php }
                                                            } else { ?>
                                                                <a href="./purchase-membership-plan.php" class="btn btn-warning">
                                                                    Buy Membership
                                                                </a>
                                                            <?php }
                                                        } else { ?>
                                                            <span class="badge badge-warning"><i class="fas fa-lock"></i></span>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>

                                    <?php
                                        }
                                    }
                                    ?>
                                </div>

                            </div>
                        </div>
                    </div>
        <?php
                }
            }
        }
        ?>
    </div>
    <!-- /Overview Section -->
</div>

<?php
require "./inc/footer.php";
require "./inc/script.php";
?>
<script>
    const enrollstudent = document.querySelector('#enrollstudent');
    const classid = parseInt(document.getElementById('classid').value);

    function enrollNow() {
        if (classid && classid > 0) {
            Swal.fire({
                title: "Are you sure you want to register for this batch?",
                showCancelButton: true,
                confirmButtonText: "Sure & Enroll",
                cancelButtonText: "Cancel",
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        url: './inc/config/enroll-zarud-member.php',
                        type: 'POST',
                        data: {
                            classid
                        },
                        success: (res) => {
                            console.log(res, classid)
                            let json = JSON.parse(res);
                            if (json.status == 200) {
                                Swal.fire("You are enrolled successfully in this batch.", "success");
                                setTimeout(() => {
                                    window.location.reload();
                                }, 1000);
                            } else {
                                swamsg.error(json.msg);
                            }
                        }
                    });
                } else if (result.isDenied) {
                    Swal.fire("Cancelled", "", "info");
                    setTimeout(() => {
                        window.location.reload();
                    }, 200);
                }
            });
        }
        enrollstudent.removeEventListener('click', enrollNow);
    }
    enrollstudent.addEventListener('click', enrollNow);
</script>