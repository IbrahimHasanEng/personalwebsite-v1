<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="definition" content="Ibrahim Hasan - This is my personal blog.">
    <!-- Include the Header/Footer Stylesheet -->
    <link rel="stylesheet" <?php echo $styleHeaderFooter; ?> type="text/css">
    <!-- Include Page Stylesheet Depending on Which Page I'm in -->
    <link rel="stylesheet" <?php echo $style; ?> type="text/css">
    <!-- fontAwesome for Text Icons -->
    <link rel="stylesheet" <?php echo $fontAwesome; ?> type="text/css">
    <!-- fancyBox for Photo Gallary -->
    <link rel="stylesheet" href="../source/jquery.fancybox.css" type="text/css" media="screen">
    <!-- Website Main Icon -->
    <link rel="shortcut icon" <?php echo $websiteIcon; ?> >
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
    <!-- Different Title to Each Page -->
    <title><?php echo $pageTitle; ?></title>
    <script type="text/javascript" src="../js/plugins.js"></script>
    </head>
    <body>
        <header>
            <div class="container">
                <a <?php echo $home; ?> >
                    <div>
                        <h1>Ibrahim Hasan</h1>
                        <h2>Mechatronics Engineer & Web Developer</h2>
                    </div>
                </a>
                <nav>
                    <ul>
                        <a <?php echo $home; ?> ><li class="home" <?php echo $homeActive; ?> >Home</li></a>
                        <a <?php echo $resume; ?> ><li class="resume" <?php echo $resumeActive; ?> >Resume</li></a>
                        <a <?php echo $projects; ?> ><li class="projects" <?php echo $projectsActive; ?> >Projects</li></a>
                        <a <?php echo $contact; ?> ><li class="contact" <?php echo $contactActive; ?> >Contact</li></a>
                    </ul>
                </nav>
            </div>
        </header>