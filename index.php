<?php 
    $pageTitle = "Ibrahim Hasan – Home";
    $style = 'href="css/style.css"';
    $styleHeaderFooter = 'href="includes/css/style.css"';
    $fontAwesome = 'href="font-awesome/css/font-awesome.min.css"';
    $home = 'href="index.php"';
    $resume = 'href="resume/index.php"';
    $projects = 'href="projects/index.php"';
    $contact = 'href="contact/index.php"';
    $websiteIcon = 'href="icons/icon.ico"';
    $homeActive = 'style="border-top:3px solid #22313F;color:#22313F;"';
    $resumeActive = '';
    $projectsActive = '';
    $contactActive = '';
    include("includes/header.php");
?>
    <div class="container">
        <div class="content">
            <div class="introBox">
                <div class="image">
                    <img src="img/PersonalPicture.JPG" alt="Personal Photo"/>
                    <span>Thank you for visiting my website!</span>
                </div>
                <div class="briefIntro">
                    <snap class="welcome">Welcome to ... <br>
                    <snap style="font-weight:bold">&nbsp &nbsp &nbsp &nbsp &nbsp my personal blog!</snap></snap>
                    <br>
                    <br>
                    <div class="aboutMe" style="font-style:italic">
                        Here is some background information about me: I am Ibrahim from Syria.
                        I am a mechatronics engineer, graduated in 2015.
                        I have an ambition, and in order to fulfill it, I have to work hard, think smart,
                        and improve myself. My mother tongue is Arabic, and I am fluent in English.
                        I am an excellent computer user. Recently, I have become interested in web development; 
                        in fact, this website is my first project as a front-end web developer, and it was designed using HTML5, CSS3, jQuery Library and some PHP. Presently, my brief knowledge about back-end web development needs to be broadened, thus I am learning PHP.
                        <br>I am currently looking for a job. I would be happy to discuss possible work!
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include("includes/footer.html")?>
<!-- jQuery Library -->
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<!-- Header Shrinks On Scroll -->
<script type="text/javascript" src="js/plugins.js"></script>
</body>
</html>
