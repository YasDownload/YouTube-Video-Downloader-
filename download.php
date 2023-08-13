<?php

$video_url = $_POST["video_url"];
$quality = $_POST["quality"];

$video_id = parse_url($video_url, PHP_URL_QUERY)["v"];

$yt_api_key = "AIzaSyC_zFJJ7Y3S7eZFLOPXRDeJNRtDcKE0zF4";

$yt_downloader = new YouTubeDownloader($yt_api_key);

$video_info = $yt_downloader->getVideoInfo($video_id);

$video_file = $yt_downloader->downloadVideo($video_info, $quality);

header("Content-disposition: attachment; filename=$video_id.mp4");
header("Content-type: video/mp4");

echo $video_file;

?>
