<?php 
session_start();
require('db.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="a.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahsanul Haque Hasib</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <script src="mixitup.min.js"></script>
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>

    <!-- HEADER -->

    <header id="h">
        <div class="logo" id="logo">
            <img src="a.png" alt="" class="l-img">    
           <h2 data-text="HASIB.">HASIB.</h2>
        </div>

        <nav id="n">
            <a href="#home">Home<span></span></a>
            <a href="#about">About<span></span></a>
            <a href="#timeline">Timeline<span></span></a>
            <a href="#skills">Skills<span></span></a>
            <a href="#projects">Projects<span></span></a>
            <a href="#hobbies">Hobbies<span></span></a>
            <a href="#contact">Contact<span></span></a>
            <a href="log.php"><i class="fas fa-sign-in-alt"></i>&nbspLogin<span></span></a>
        </nav>
        <!-- <div id="menu-icon" class="bx bx-menu"></div> -->

        <div class="nav-box">
            <div class="dropdown">Menu
                <span class="left-icon"></span>
                
                <span class="right-icon"></span>
                <div class="nav-items">
                    <a href="#home" style="--i:1;"><span></span>Home</a>
                    <a href="#about" style="--i:2;"><span></span>About</a>
                    <a href="#timeline" style="--i:3;"><span></span>Timeline</a>
                    <a href="#skills" style="--i:4;"><span></span>Skills</a>
                    <a href="#projects" style="--i:5;"><span></span>Projects</a>
                    <a href="#hobbies" style="--i:6;"><span></span>Hobbies</a>
                    <a href="#contact" style="--i:7;"><span></span>Contact</a>
                    <a href="log.php" style="--i:8;"><span></span><i class="fas fa-sign-in-alt"></i>&nbspLogin</a>
    
                </div>
            </div>
        </div>

       
    </header>
    

    <?php 
                  $home_query = $dbcon->query("SELECT * FROM section_control");
                  $home_information = $home_query->fetch_assoc();
                ?>


<?php
if($home_information["home_sec"]){
    ?>

    <!-- HOME -->

    <section id="home" class="home">
        
        <div class="home-cont">
            <br><br><br><br>
            <h3 class="bnj">Bonjour! I am</h3><br><h1>Ahsanul Haque Hasib</h1>
            <div class="chng">
                <h3>And I'm </h3>
                <h3>
                    <span class="word">a &nbsp Learner</span>
                    <span class="word">a &nbsp Developer</span>
                    <span class="word">an &nbsp Editor</span>
                    <span class="word">a &nbsp Designer</span>
                </h3>
            </div>

            <p>Committed to continuous learning, I am poised to contribute my skills and creativity to the world of technology.</p>
            <div class="info-box">
                <div class="email-info">
                    <h5>Email:</h5>
                    <span>ahsanulhasib2@gmail.com</span>
                </div>
            </div>
            <div class="btn-box">
                <a href="MyCV.pdf" class="btn" download>Download CV</a>
                <!-- <a href="#" class="btn">Hire Me</a>                 -->
            </div>
            <div class="icons">
                <a href="https://www.facebook.com/ahsanul.haque.hasib.188">
                   <div class="layer">
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                      <span class="fab fa-facebook-f"></span>
                   </div>
                   <div class="text">
                      Facebook
                   </div>
                </a>
                
                <a href="https://www.instagram.com/ahsanul_hasib2?igsh=OG9kbmtxdmNlc2Vt">
                   <div class="layer">
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                      <span class="fab fa-instagram"></span>
                   </div>
                   <div class="text">
                      Instagram
                   </div>
                </a>
                <a href="https://github.com/B3Y0ND3R">
                   <div class="layer">
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                      <span class="fab fa-github"></span>
                   </div>
                   <div class="text">
                      Github
                   </div>
                </a>
                <a href="#">
                   <div class="layer">
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                      <span class="fab fa-linkedin-in"></span>
                   </div>
                   <div class="text">
                      Linkedin
                   </div>
                </a>
             </div>    

            
        </div>

        <div class="home-img">
            <div class="img-box">
                <img src="rsz_1hasib_2.png" alt="">
            </div>
            <div class="liquid-shape">
                <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" id="blobSvg">
                    <path fill="#12f7ff">
                        <animate attributeName="d"
                            dur="10000ms"
                            repeatCount="indefinite"
                            values="
                            M425.5,301Q426,352,399,407Q372,462,311,477Q250,492,208.5,442.5Q167,393,142.5,359.5Q118,326,65,288Q12,250,41,198Q70,146,112.5,115.5Q155,85,202.5,92Q250,99,299.5,88.5Q349,78,376.5,119.5Q404,161,414.5,205.5Q425,250,425.5,301Z;

                            M402.5,290.5Q390,331,381.5,397Q373,463,311.5,445Q250,427,200.5,424.5Q151,422,110.5,388Q70,354,71,302Q72,250,76.5,201.5Q81,153,124.5,130Q168,107,209,65.5Q250,24,307.5,37Q365,50,387,104Q409,158,412,204Q415,250,402.5,290.5Z;

                            M434.5,312Q465,374,411.5,406Q358,438,304,445.5Q250,453,196.5,444.5Q143,436,120.5,387Q98,338,53,294Q8,250,51,205Q94,160,128,129Q162,98,206,79.5Q250,61,310,51.5Q370,42,409,89Q448,136,426,193Q404,250,434.5,312Z;

                            M417,295.5Q408,341,382,387.5Q356,434,303,438Q250,442,201.5,430Q153,418,100,392.5Q47,367,48,308.5Q49,250,72.5,205.5Q96,161,122.5,118.5Q149,76,199.5,50Q250,24,296,57Q342,90,384.5,119Q427,148,426.5,199Q426,250,417,295.5Z;

                            M421,291Q392,332,377,388Q362,444,306,440.5Q250,437,198.5,433Q147,429,112,389.5Q77,350,61.5,300Q46,250,68,204Q90,158,125,126.5Q160,95,205,93.5Q250,92,289.5,102.5Q329,113,358.5,141.5Q388,170,419,210Q450,250,421,291Z;

                            M440.5,294Q402,338,369.5,369Q337,400,293.5,434Q250,468,207.5,432Q165,396,100.5,384.5Q36,373,25.5,311.5Q15,250,54,204.5Q93,159,132,135.5Q171,112,210.5,70Q250,28,311.5,32.5Q373,37,410.5,86.5Q448,136,463.5,193Q479,250,440.5,294Z;

                            M440.5,292.5Q397,335,385.5,400Q374,465,312,467.5Q250,470,197,451.5Q144,433,101,397Q58,361,30.5,305.5Q3,250,56.5,209.5Q110,169,125.5,115.5Q141,62,195.5,33.5Q250,5,297.5,45Q345,85,364,129Q383,173,433.5,211.5Q484,250,440.5,292.5Z;

                            M425.5,301Q426,352,399,407Q372,462,311,477Q250,492,208.5,442.5Q167,393,142.5,359.5Q118,326,65,288Q12,250,41,198Q70,146,112.5,115.5Q155,85,202.5,92Q250,99,299.5,88.5Q349,78,376.5,119.5Q404,161,414.5,205.5Q425,250,425.5,301Z;

                            ">
                        </animate>

                    </path>
                  </svg>
            </div>

            <div class="liquid-shape">
                <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" id="blobSvg">
                    <path fill="#12f7ff">
                        <animate attributeName="d"
                            dur="10000ms"
                            repeatCount="indefinite"
                            values="
                            M425.5,301Q426,352,399,407Q372,462,311,477Q250,492,208.5,442.5Q167,393,142.5,359.5Q118,326,65,288Q12,250,41,198Q70,146,112.5,115.5Q155,85,202.5,92Q250,99,299.5,88.5Q349,78,376.5,119.5Q404,161,414.5,205.5Q425,250,425.5,301Z;

                            M402.5,290.5Q390,331,381.5,397Q373,463,311.5,445Q250,427,200.5,424.5Q151,422,110.5,388Q70,354,71,302Q72,250,76.5,201.5Q81,153,124.5,130Q168,107,209,65.5Q250,24,307.5,37Q365,50,387,104Q409,158,412,204Q415,250,402.5,290.5Z;

                            M434.5,312Q465,374,411.5,406Q358,438,304,445.5Q250,453,196.5,444.5Q143,436,120.5,387Q98,338,53,294Q8,250,51,205Q94,160,128,129Q162,98,206,79.5Q250,61,310,51.5Q370,42,409,89Q448,136,426,193Q404,250,434.5,312Z;

                            M417,295.5Q408,341,382,387.5Q356,434,303,438Q250,442,201.5,430Q153,418,100,392.5Q47,367,48,308.5Q49,250,72.5,205.5Q96,161,122.5,118.5Q149,76,199.5,50Q250,24,296,57Q342,90,384.5,119Q427,148,426.5,199Q426,250,417,295.5Z;

                            M421,291Q392,332,377,388Q362,444,306,440.5Q250,437,198.5,433Q147,429,112,389.5Q77,350,61.5,300Q46,250,68,204Q90,158,125,126.5Q160,95,205,93.5Q250,92,289.5,102.5Q329,113,358.5,141.5Q388,170,419,210Q450,250,421,291Z;

                            M440.5,294Q402,338,369.5,369Q337,400,293.5,434Q250,468,207.5,432Q165,396,100.5,384.5Q36,373,25.5,311.5Q15,250,54,204.5Q93,159,132,135.5Q171,112,210.5,70Q250,28,311.5,32.5Q373,37,410.5,86.5Q448,136,463.5,193Q479,250,440.5,294Z;

                            M440.5,292.5Q397,335,385.5,400Q374,465,312,467.5Q250,470,197,451.5Q144,433,101,397Q58,361,30.5,305.5Q3,250,56.5,209.5Q110,169,125.5,115.5Q141,62,195.5,33.5Q250,5,297.5,45Q345,85,364,129Q383,173,433.5,211.5Q484,250,440.5,292.5Z;

                            M425.5,301Q426,352,399,407Q372,462,311,477Q250,492,208.5,442.5Q167,393,142.5,359.5Q118,326,65,288Q12,250,41,198Q70,146,112.5,115.5Q155,85,202.5,92Q250,99,299.5,88.5Q349,78,376.5,119.5Q404,161,414.5,205.5Q425,250,425.5,301Z;

                            ">
                        </animate>

                    </path>
                  </svg>
            </div>
        </div>

    </section>

    <?php
}
?>


<?php 
                  $about_query = $dbcon->query("SELECT * FROM section_control");
                  $about_information = $about_query->fetch_assoc();
                ?>


<?php
if($about_information["about-sec"]){
    ?>

    <!--About-->

    <section id="about" class="about">
        <div class="img-about">
            <img src="Hasib.png" alt="">
            <div class="about-cont">
                <span>Let me introduce myself</span>
                <h2 class="tt">About Me</h2>
                <p class="short-description">
                Hello everyone,<br>My name is Ahsanul Haque Hasib, and I am thrilled to be part of the <b>Khulna University of Engineering & Technology</b> community. Currently pursuing my Computer Science degree here, I am passionate about Web Development, Machine Learning and am excited about the opportunities and challenges that university life has to offer.</p><br>
                <p class="full-description">
                    
                Hello everyone,<br>My name is Ahsanul Haque Hasib, and I am thrilled to be part of the <b>Khulna University of Engineering & Technology</b> community. Currently pursuing my Computer Science degree here, I am passionate about Web Development, Machine Learning and am excited about the opportunities and challenges that university life has to offer.<br>
                    <br><br>
                    Originally from Dhaka, I bring with me a lot of enthusiasm and perspectives. Throughout my academic journey, I have developed a keen interest in clubs and other co-curricular activities. These experiences have not only shaped my academic pursuits but have also allowed me to connect with like-minded individuals who share my enthusiasm for related fields.
                    <br><br>
                    One more thing about me is that I love animals. Before my arrival here in Khulna, I used to take part in activities regarding stray animal sheltering, rescuing and some other stuff. Now I intend to do the same with some of my batchmates, friends, seniors and anyone interested in doing so.<br>
                    <a href="#" id="read-less">Read Less</a>
                </p>
                <div class="btn-box">
                    <a href="#" class="btn" id="read-more">Read More!</a>
                </div>
                
            </div>

        </div>

      
    </section>

    <?php
}
?>


<?php 
                  $timeline_query = $dbcon->query("SELECT * FROM section_control");
                  $timeline_information = $timeline_query->fetch_assoc();
                ?>


<?php
if($timeline_information["timeline-sec"]){
    ?>

<!--Timeline-->

    <section id="timeline" class="timeline">
        <p class="exp">Explore My</p>
        <h2 class="tt">Timeline</h2><br>

        <div class="card">
            <h3 class="card-info">University</h3>
            <h4>2022 - </h4>
            <a href="https://en.wikipedia.org/wiki/Khulna_University_of_Engineering_%26_Technology"><img src="Logo_KUET.png" alt="Logo_KUET" class="card-img"></a>
            <p><a href="https://en.wikipedia.org/wiki/Khulna_University_of_Engineering_%26_Technology">Khulna University of Engineering & Technology, Khulna.</a></p>
        </div>


        <div class="card">
            <h3 class="card-info">Collegiate</h3>
            <h4>2018 - 2020</h4>
            <a href="https://en.wikipedia.org/wiki/Notre_Dame_College,_Dhaka"><img class="card-img" src="Notre_Dame_College,_Dhaka_Monogram.png" alt="Notre_Dame_College"></a>
            <p><a href="https://en.wikipedia.org/wiki/Notre_Dame_College,_Dhaka">Notre Dame College, Dhaka.</a></p>
        </div>

        <div class="card">
            <h3 class="card-info">Schooling</h3>
            <h4>2008 - 2017</h4>
            <a href="https://en.wikipedia.org/wiki/Government_Laboratory_High_School"><img class="card-img" src="Government_Laboratory_High_School_Monogram.png" alt="Government_Laboratory_High_School_Dhaka"></a>
            <p><a href="https://en.wikipedia.org/wiki/Government_Laboratory_High_School">Government Laboratory High School, Dhaka.</a></p>
        </div>
        


    </section>

    <?php
}
?>


<?php 
                  $skills_query = $dbcon->query("SELECT * FROM section_control");
                  $skills_information = $skills_query->fetch_assoc();
                ?>


<?php
if($skills_information["skills-sec"]){
    ?>

    <!--Skills-->

    <section id="skills" class="skills">
        <div class="main-text">
            Technical & professional
        </div>
        <h2 class="tt">Skills</h2>
        <div class="skill-main">
            <div class="skill-left">

                <div class="skill-bar">
                    <div class="info">
                        <p>HTML</p>
                        <p>80%</p>
                    </div>
                    <div class="bar">
                        <span class="html"></span>
                    </div>
                </div>

                <div class="skill-bar">
                    <div class="info">
                        <p>CSS</p>
                        <p>78%</p>
                    </div>
                    <div class="bar">
                        <span class="css"></span>
                    </div>
                </div>

                <div class="skill-bar">
                    <div class="info">
                        <p>JavaScript</p>
                        <p>65%</p>
                    </div>
                    <div class="bar">
                        <span class="javascript"></span>
                    </div>
                </div>

                <div class="skill-bar">
                    <div class="info">
                        <p>C</p>
                        <p>85%</p>
                    </div>
                    <div class="bar">
                        <span class="c"></span>
                    </div>
                </div>


                <div class="skill-bar">
                    <div class="info">
                        <p>C++</p>
                        <p>90%</p>
                    </div>
                    <div class="bar">
                        <span class="cp"></span>
                    </div>
                </div>


                <div class="skill-bar">
                    <div class="info">
                        <p>Java</p>
                        <p>85%</p>
                    </div>
                    <div class="bar">
                        <span class="java"></span>
                    </div>
                </div>


            
            </div>
            <div class="skill-right">
                <div class="professional">
                    <div class="box">
                        <div class="radial" data-dots="80" data-percent="90"></div>
                        <div class="text">
                            <big>90%</big>
                            <small>Team Work</small>
                        </div>
                    </div>

                    <div class="box">
                        <div class="radial" data-dots="80" data-percent="80"></div>
                        <div class="text">
                            <big>80%</big>
                            <small>Management</small>
                        </div>
                    </div>

                    <div class="box">
                        <div class="radial" data-dots="80" data-percent="85"></div>
                        <div class="text">
                            <big>85%</big>
                            <small>Creativity</small>
                        </div>
                    </div>

                    <div class="box">
                        <div class="radial" data-dots="80" data-percent="82"></div>
                        <div class="text">
                            <big>82%</big>
                            <small>Understanding</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
}
?>


<?php 
                  $project_query = $dbcon->query("SELECT * FROM section_control");
                  $project_information = $project_query->fetch_assoc();
                ?>


<?php
if($project_information["projects-sec"]){
    ?>

  
<section id="projects" class="projects">
        <div class="main-text">
            My Endeavors
        </div>
        <h2 class="tt">Projects</h2>
        
        <div class="container">
            

            <div class="prf-gallery">
    <?php
        $p_query = $dbcon->query("SELECT * FROM project");

        while ($p_information = $p_query->fetch_assoc()) {
    ?>
        <div class="prf-box"> 
            <div class="prf-img">
                <img src="<?=$p_information['img']?>" alt="" width="300px" height="300px">
            </div>

            <div class="prf-cont">
                <h3><?=$p_information['title']?></h3>
                <p><?=$p_information['description']?></p>
                <a href="<?=$p_information['link']?>"><i class='bx bx-link-external'></i></a>
            </div>
        </div>
    <?php
        }
    ?>
</div>

        </div>
</section>

<?php
}
?>

    


<?php 
                  $hobby_query = $dbcon->query("SELECT * FROM section_control");
                  $hobby_information = $hobby_query->fetch_assoc();
                ?>


<?php
if($hobby_information["hobbies-sec"]){
    ?>

    

<!--Hobbies Section-->

    <section id="hobbies" class="hobbies">
        <div class="main-text">
            My Hobby
        </div>
        <h2 class="tt">Travelling</h2>
        <div class="sec-wrap">
            <div class="sec-card">
                <img src="st-martin.jpg" alt="" width="300px" height="200px">
                <div class="sec-card-cont">
                <h4>St. Martin</h4>
                <p>Sun-kissed St. Martin's Island.</p>
                </div>
            </div>
            <div class="sec-card">
                <img src="the-sundarbans.jpg" alt="" width="300px" height="200px">
                <div class="sec-card-cont">
                <h4>Sundarbans</h4>
                <p>A vast labyrinth of mangrove forests.</p>
                </div>
            </div>
            <div class="sec-card">
                <img src="cox's bazar.jpg" alt="" width="300px" height="200px">
                <div class="sec-card-cont">
                <h4>Cox's Bazar</h4>
                <p>An unbroken stretch of sandy beach.</p>
                </div>
            </div>
            <div class="sec-card">
                <img src="the-bandarbans.jpg" alt="" width="300px" height="200px">
                <div class="sec-card-cont">
                <h4>Bandarbans</h4>
                <p>Nestled amidst the verdant hills of southeastern Bangladesh.</p>
                </div>
            </div>
            <div class="sec-card">
                <img src="sylhet.jpg" alt="" width="300px" height="200px">
                <div class="sec-card-cont">
                <h4>Sylhet</h4>
                <p>A vibrant gem tucked away in northeastern Bangladesh.</p>
                </div>
            </div>
            <div class="sec-card">
                <img src="the-kashmir.jpg" alt="" width="300px" height="200px">
                <div class="sec-card-cont">
                <h4>Kashmir</h4>
                <p>A region cradled in the majestic Himalayas.</p>
                </div>
            </div>
            
        </div>
        <div class="wrap">
            <div class="dibba">
                <input type="radio" name="slide" id="c1" checked>
                <label for="c1" class="cd">
                    <div class="ro">
                        <div class="ic">1</div>
                        <div class="des">
                            <h4>St. Martin</h4>
                            <p>Sun-kissed St. Martin's Island.</p>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c2" >
                <label for="c2" class="cd">
                    <div class="ro">
                        <div class="ic">2</div>
                        <div class="des">
                            <h4>Sundarbans</h4>
                            <p>A vast labyrinth of mangrove forests.</p>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c3" >
                <label for="c3" class="cd">
                    <div class="ro">
                        <div class="ic">3</div>
                        <div class="des">
                            <h4>Cox's Bazar</h4>
                            <p>An unbroken stretch of sandy beach.</p>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c4" >
                <label for="c4" class="cd">
                    <div class="ro">
                        <div class="ic">4</div>
                        <div class="des">
                            <h4>Bandarbans</h4>
                            <p>Nestled amidst the verdant hills of southeastern Bangladesh.</p>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c5" >
                <label for="c5" class="cd">
                    <div class="ro">
                        <div class="ic">5</div>
                        <div class="des">
                            <h4>Sylhet</h4>
                            <p>A vibrant gem tucked away in northeastern Bangladesh.</p>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c6" >
                <label for="c6" class="cd">
                    <div class="ro">
                        <div class="ic">6</div>
                        <div class="des">
                            <h4>Kashmir</h4>
                            <p>A region cradled in the majestic Himalayas.</p>
                        </div>
                    </div>
                </label>
            </div>
        </div>
    </section>

    <?php
}
    ?>

<!--Contact Section-->

<section id="contact" class="contact">

    <div class="main-text">
        Get in Touch
    </div>
    <h2 class="tt">Contact Me</h2>

    <div class="patro">
        <div class="contact-cont">
          <div class="left-side">
            <div class="phone details">
              <i class="fas fa-user"></i>
              <div class="topic">Name</div>
              <div class="text-one">Ahsanul Haque Hasib</div>
            </div>
            <div class="address details">
              <i class="fas fa-map-marker-alt"></i>
              <div class="topic">Address</div>
              <div class="text-one">Dept. of CSE</div>
              <div class="text-two">KUET, Khulna, Bangladesh</div>
            </div>
            <div class="email details">
              <i class="fas fa-envelope"></i>
              <div class="topic">Email</div>
              <div class="text-one">ahsanulhasib2@gmail.com</div>
            </div>
          </div>
          <div class="right-side">
            <div class="topic-text">Send me a message</div>

            <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    
    $sql = "INSERT INTO contact (name, email, msg) VALUES ('$name', '$email', '$message')";

    if ($dbcon->query($sql) === TRUE) {

    } else {

    }

    $dbcon->close();
}
?>





        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>#contact" method="POST">
            <div class="input-box">
                <input type="text" name="name" placeholder="Name">
            </div>
            <div class="input-box">
            <input type="text" name="email" placeholder="Email">
            </div>
            <div class="input-box message-box">
            <textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
            </div>
            <div class="form-btn">
            <input type="submit" value="Send Now">
            </div>
        </form>

        </div>
        </div>
      </div>
</section>


<!--Footer section-->

    <footer class="foot">
    <div class="footer-cont">
        <div class="main-text">
            Copyright © 2024 &nbsp <b>Ahsanul Haque Hasib</b>.
        </div>
        <div class="main-text">
            All Rights Reserved.
        </div>
    </div>
        
    
        
    </footer>

</body>
</html>