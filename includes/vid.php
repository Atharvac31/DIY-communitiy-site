<?php
$video_url = "https://youtu.be/Xs2hAWuPmSg?si=Tjr6pCWvcAbX4TNc";
$video_id = substr(parse_url($video_url, PHP_URL_PATH), 1); // Extract video ID from URL

// Embed the YouTube video using an iframe
echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $video_id . '" frameborder="0" allowfullscreen></iframe>';
?>