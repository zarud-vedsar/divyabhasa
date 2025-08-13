<?php
require "./inc/head.php";
require "./inc/headbar.php";
require "./inc/sidebar.php";

if (isset($_GET['tutorial_id']) && !empty($_GET['tutorial_id'])) {
    $tutorial_id = $_GET['tutorial_id'];

    $select_tutorial = runFatch("SELECT * FROM tbl_tutorial WHERE id = '{$tutorial_id}'");
}

if(isset($_GET['cid']) && !empty($_GET['cid']))
$selected_classid=$_GET['cid'];
?>

<!-- Page Wrapper -->
<div class="page-wrapper">

    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Topic <?= @$tutorial_id ? 'Edit' : 'Add' ?></h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="./tutorial.php">Topic</a></li>
                            <li class="breadcrumb-item active">Topic <?= @$tutorial_id ? 'Edit' : 'Add' ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <!-- Overview Section -->
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <form id="submit_tutorial">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title student-info">Topic Information</h5>
                            </div>

                            <input type="hidden" name="hidden_id" value="<?= @$select_tutorial[0]['id'] ?>">

                            <div class="col-md-6">
                                <div class="form-group local-forms">
                                    <label>Class <span class="text-danger">*</span></label>
                                    <select name="class_id" class="form-control">
                                        <option value="">Select Class</option>
                                        <?php
                                        $select_class = runFatch("SELECT * FROM tbl_class ORDER BY title ASC");
                                        if ($select_class) {
                                            foreach ($select_class as $class) {
                                                $selected = @$select_tutorial[0]['class_id'] == $class['id'] ? "selected" : "";
                                                if(isset($selected_classid)){

                                                    $selected = @$selected_classid == $class['id'] ? "selected" : "";
                                                }
                                        ?>
                                                <option value="<?= $class['id'] ?>" <?= $selected ?>><?= $class['title'] ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group local-forms">
                                    <label>Topic Title <span class="login-danger">*</span></label>
                                    <input name="title" id="video-title" type="text" class="form-control" placeholder="Enter Tutorial Title" value="<?= @$select_tutorial[0]['title'] ?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group local-forms">
                                    <label>Topic Type <span class="login-danger">*</span></label>
                                    <select class="form-select" name="topic_type" id="topic_type">
                                        <option >Select</option>
                                        <option  <?= (isset($select_tutorial[0]['topic_type']) && $select_tutorial[0]['topic_type']==1)?"selected":"" ?> value="1">Free Video</option>
                                        <option  <?= (isset($select_tutorial[0]['topic_type']) && $select_tutorial[0]['topic_type']==2)?"selected":"" ?> value="2">Paid Video</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-6 mb-3">
                                <div class="form-group local-forms">
                                    <label>Video Url <span class="login-danger">*</span></label>
                                    <input name="video" id="video_url" type="text" class="form-control" placeholder="Enter Video Url" value="<?= @$select_tutorial[0]['video'] ?>">
                                </div>

                                <style>
                                    #video_iframe {
                                        width: 100%;
                                        height: 400px;
                                        display: none;
                                    }
                                </style>
                                <!--
                                <iframe id="video_iframe" src="" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                </iframe>
                                 -->
                            </div>
                                   
                            <input type="hidden" name="video_input" id="video-input" value="<?= @$select_tutorial[0]['thumb'] ?>">

                            <div class="col-12 mb-3">
                                <input type="hidden" name="hidden_profile" value="<?= @$select_tutorial[0]['thumb'] ?>">

                                <input type="hidden" name="video_id" id="video_id" value="<?= @$select_tutorial[0]['video_id'] ?>">


                                <label for="image" class="mb-1">Youtube thumb <span class="text-danger">*</span></label>
                                <div class="uploadOuter mb-3">
                                    <span class="dragBox">
                                        Drag and Drop image here
                                        <input type="file" name="thumb" id="thumb" onChange="dragNdrop(event)" ondragover="drag()" ondrop="drop()" id="uploadFile" />
                                    </span>
                                </div>
                                <div id="preview">
                                    <?php
                                    if (isset($select_tutorial[0]['thumb']) && !empty($select_tutorial[0]['thumb'])) {
                                        $thumb = $select_tutorial[0]['thumb'];
                                        $src = (strpos($thumb, 'http://') !== false || strpos($thumb, 'https://') !== false) ? $thumb : "../upload/" . $thumb;
                                        ?>
                                        <img src="<?= $src ?>" alt="image-preview">
                                        <a href="#" onclick="removeimgth(<?= $tutorial_id ?>);">Remove</a>
                                        <?php
                                    } else if (isset($select_tutorial[0]['video_id']) && empty($select_tutorial[0]['thumb'])) {
                                    ?>
                                        <img src="../upload/<?= @$select_tutorial[0]['video_id'] . '_thumbnail.jpg' ?>" alt="image-priview">
                                    <?php

                                    } else {
                                    ?>
                                        <img src="./assets/img/demo.png" id="video-thumbnail" alt="image-priview">

                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>



                            <div class="text-center">
                                <button type="submit" class="btn btn-primary w-100">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- /Overview Section -->
    </div>

    <?php
    require "./inc/footer.php";
    require "./inc/script.php";
    ?>

    <script>
        function videoSrcAdd() {
            let videoUrl = $('#video_url').val();
            

            if (videoUrl) {
                $("#video_iframe").attr('src', videoUrl);
                $("#video_iframe").removeClass('d-none').addClass('d-block');
            } else {
                $("#video_iframe").attr('src', '');
                $("#video_iframe").removeClass('d-block').addClass('d-none');
            }
        }

        $(document).on('input', '#video_url', function() {
            videoSrcAdd();
            const embedUrl = $('#video_url').val();
           
            const videoId1 = embedUrl.split('/').pop(); // Extract VIDEO_ID from the embed URL

            const videoId = videoId1.split('?')[0];
            $('#video_id').val(videoId);
           
           
            // Send AJAX request to the PHP script to fetch the YouTube page
            $.ajax({
                url: `fetch_youtube.php?video_id=${videoId}`,
                success: function (response) {
                    // Extract the video title from the response (meta tag <meta name="title" content="...">)
                    const titleMatch = response.match(/<meta name="title" content="(.*?)">/);
                    const videoTitle = titleMatch ? titleMatch[1] : 'Title not found';

                    // Display the title
                    $('#video-title').val(videoTitle);

                    // Generate and display the YouTube thumbnail using the video ID
                    const thumbnailUrl = `https://img.youtube.com/vi/${videoId}/hqdefault.jpg`;
                    $('#video-thumbnail').attr('src', thumbnailUrl);
                    $('#video-input').val(thumbnailUrl);
                },
                error: function () {
                    alert('Error fetching video details');
                }
            });
            

        });

        $(document).ready(function() {
            videoSrcAdd();
        });


        function removeimgth(id){

            $.ajax({
                url: `removeimg.php?id=${id}`,
                success: function (response) {

                    location.reload();
                },
                error: function () {
                    alert('Error');
                }
            });

        }


    </script>





