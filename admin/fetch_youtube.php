<?php
// Check if the video ID is provided in the request
if (isset($_GET['video_id'])) {
    $video_id = $_GET['video_id'];

    // Build the YouTube video URL
    $video_url = "https://www.youtube.com/watch?v=" . $video_id;

    // Fetch the content of the YouTube video page
    $video_page = file_get_contents($video_url);

    $thumbnailUrl = "https://img.youtube.com/vi/$video_id/hqdefault.jpg";
    $saveTo = "../upload/" . $video_id."_thumbnail.jpg";
    $thumbnailData = file_get_contents($thumbnailUrl);
    if(!file_exists($video_id."_thumbnail.jpg")){
        file_put_contents($saveTo, $thumbnailData);
   
    }

    // Return the page content if it's successfully fetched
    if ($video_page !== false) {
        echo $video_page;
    } else {
        // Return error message in case of failure
        echo json_encode(["error" => "Could not fetch video page"]);
    }
} else {
    // Return error if no video ID is provided
    echo json_encode(["error" => "No video ID provided"]);
}
?>
