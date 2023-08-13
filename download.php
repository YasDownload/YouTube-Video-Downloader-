<?php

// Get the video URL from the form
$video_url = $_POST['video_url'];

// Get the video quality from the form
$quality = $_POST['quality'];

// Use the YouTube API to download the video
$video = youtube_download($video_url, $quality);

// Save the video to the user's computer
file_put_contents($_POST['filename'], $video);

// Redirect the user to the download page
header('Location: download.php');

?>
