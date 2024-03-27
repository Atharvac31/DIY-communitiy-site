<?php include 'includes/header.php'; ?>
<style>
    body{
	
      font-family: "Kanit", sans-serif;
      font-weight: bold;
    
    }
    .box{
        margin: 10px 10px;
        padding: 10px 10px;
        display:flex;
        width: 100%;
        flex-wrap: wrap;
       
        

    }
    .content-wrapper{
        margin: 10px 10px;
        padding: 30px 50px;
        background-color: #f7f4eb;
        border-radius: 10px;
        height: 400px;
        
    }
</style>
<body class="hold-transition skin-blue layout-top-nav">
    <header class="main-header">
        <nav class="navbar navbar-static-top" style="background-color: #f7690a;">
            <div class="container">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand"><b>DIY</b>Site</a>
                </div>
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>

            </div>
        </nav>
    </header>

<div class="box">
   <div class="content-wrapper">
        <!-- Your existing HTML content goes here -->
        <div class="heading">
            <h1>Table Lamp Tutorial</h1>
        </div>
        <!-- Embedding the YouTube video -->
        <?php
        $video_url = "https://youtu.be/Xs2hAWuPmSg?si=Tjr6pCWvcAbX4TNc";
        $video_id = substr(parse_url($video_url, PHP_URL_PATH), 1); // Extract video ID from URL
        ?>
        <iframe width="300" height="250" src="https://www.youtube.com/embed/<?php echo $video_id; ?>" frameborder="0" allowfullscreen></iframe>
    </div>
   <div class="content-wrapper">
        <!-- Your existing HTML content goes here -->
        <div class="heading">
            <h1>Table Lamp Tutorial</h1>
        </div>
        <!-- Embedding the YouTube video -->
        <?php
        $video_url = "https://youtu.be/GDpnwW9vOmc?si=Od4tKdIwcx1gT6Q6";
        $video_id = substr(parse_url($video_url, PHP_URL_PATH), 1); // Extract video ID from URL
        ?>
        <iframe width="300" height="250" src="https://www.youtube.com/embed/<?php echo $video_id; ?>" frameborder="0" allowfullscreen></iframe>
    </div>
   <div class="content-wrapper">
        <!-- Your existing HTML content goes here -->
        <div class="heading">
            <h1>Table Lamp Tutorial</h1>
        </div>
        <!-- Embedding the YouTube video -->
        <?php
        $video_url = "https://youtu.be/Xs2hAWuPmSg?si=Tjr6pCWvcAbX4TNc";
        $video_id = substr(parse_url($video_url, PHP_URL_PATH), 1); // Extract video ID from URL
        ?>
        <iframe width="300" height="250" src="https://www.youtube.com/embed/<?php echo $video_id; ?>" frameborder="0" allowfullscreen></iframe>
    </div>
   <div class="content-wrapper">
        <!-- Your existing HTML content goes here -->
        <div class="heading">
            <h1>Table Lamp Tutorial</h1>
        </div>
        <!-- Embedding the YouTube video -->
        <?php
        $video_url = "https://youtu.be/Xs2hAWuPmSg?si=Tjr6pCWvcAbX4TNc";
        $video_id = substr(parse_url($video_url, PHP_URL_PATH), 1); // Extract video ID from URL
        ?>
        <iframe width="300" height="250" src="https://www.youtube.com/embed/<?php echo $video_id; ?>" frameborder="0" allowfullscreen></iframe>
    </div>
   <div class="content-wrapper">
        <!-- Your existing HTML content goes here -->
        <div class="heading">
            <h1>Table Lamp Tutorial</h1>
        </div>
        <!-- Embedding the YouTube video -->
        <?php
        $video_url = "https://youtu.be/Xs2hAWuPmSg?si=Tjr6pCWvcAbX4TNc";
        $video_id = substr(parse_url($video_url, PHP_URL_PATH), 1); // Extract video ID from URL
        ?>
        <iframe width="300" height="250" src="https://www.youtube.com/embed/<?php echo $video_id; ?>" frameborder="0" allowfullscreen></iframe>
    </div>
   <div class="content-wrapper">
        <!-- Your existing HTML content goes here -->
        <div class="heading">
            <h1>Table Lamp Tutorial</h1>
        </div>
        <!-- Embedding the YouTube video -->
        <?php
        $video_url = "https://youtu.be/Xs2hAWuPmSg?si=Tjr6pCWvcAbX4TNc";
        $video_id = substr(parse_url($video_url, PHP_URL_PATH), 1); // Extract video ID from URL
        ?>
        <iframe width="300" height="250" src="https://www.youtube.com/embed/<?php echo $video_id; ?>" frameborder="0" allowfullscreen></iframe>
       
    </div>
</div>

    

<?php include 'includes/footer.php'; ?>
</body>
