<?php require_once('reni.php');
   
    
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reniportfolio.css">
    
</head>
<body id="myscroll-bar">
    <header>
        <div class="port">Renick <span>Portfolio</span></div>
        
            <nav class="links">
            <div class="disap">
            <div class="bars">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
            </div>
            </div>
            <div class="wrapper-links">
            <a href="#Home" class="active">Home</a>
            <a href="#About">About</a>
            <a href="#Education">Education</a>
            <a href="#Services">Services</a>
            <a href="#Contact">Contact</a>
            </div>
        </nav>

        
    </header>
<!--Home Section-->
    <section class="home" id="Home">
        <div class="content">
            <h3>Hey There?</h2>
            <h1>Call me <span>Renick Riziki</span> I will be satisified.</h1>
            <h2>I'm a Developer</h2>
            <p id="home-content">
                I'm glad to share my skills and use them to solve problems in the society by coming up with ideas that
                will ease the work for the target people in the society. Feel free to interact with my portfolio. 
            </p>
        </div>
        <div class="butt-cont">
            <button id="cv-download">Download Cv</button>
            <button id="lchart">Let's Chart</button>    
        </div>
    </section>
    <!--end of home section-->

    <!--About section-->
    <hr>
    <section class="about-me" id="About">
    
    <div class="about">About Me</div>
     <div class="imag">
        <img src="images/reniabout.png" alt="">
     </div>
     <div class="abt-cont">
            I'm a young developer. I am persuing my degree in one of the best University in Kenya, the course is degree in Applied Computer Science.
            I also have skills in other areas not only programming. I'm familiar with Adobe Photoshop Software that is used for editing pictures, Data entry, Virtual Assistance jobs etc. I priotize task given
            to me to ensure I come up with the bset results in the end. I belive I'm of the best people you can trust with your job.
            I can rate myself in accuracy at 85% in computer skills that I have gained for at least a period of 4 years now.
     </div>
    </section>
<hr>
    <!--Education section-->
    <section class="Education" id="Education">
        <div class="head-edu">Education</div>
        <div class="cntainer">
            <div class="educate">
                <h2>University Level</h2>
                <p>
                    <h3>From <span id="high">2021</span> upto <span id="high">date</span></h3>
                    I'm persuing my degree in this good reputable Univerity in Kenya.
                    The Instituition is located in Kisii and it's name is <span id="skool">Kisii University</span>.
                    The degree persued is <span id="acmp">applied computer science</span>.
                    The degree takes up a period of 4 years to be completed.
                </p>
            </div>
            <div class="educate">
                <h2>High School Level</h2>
                <p>
                    <h3>From <span id="high">2016</span> upto <span id="high">2021</span></h3>
                    I did my secondary education in one of the best public schools in Kenya.
                    This school is located at Nakuru county. The name of the school is called
                    <span id="skool">mirera high school</span>.
                    I did my Kenya Certificate Of Secondary Education(K.C.S.E) and attain a grade of: B-
                </p>
            </div>
            <div class="educate">
                <h2>Primary Education Level</h2>
                <p>
                    <h3>From <span id="high">2008</span> upto <span id="high">2016</span></h3>
                    I did my primary education in a public schools in Kenya.
                    This school is located at Nakuru county. The name of the school is called
                    <span id="skool">mirera primary school</span>.
                    I did my Kenya Certificate Of Primary Education(K.C.P.E) and attain a grade of: B
                </p>
            </div>
        </div>
    </section>
    <hr>
    <!--section services-->
    <section class="services" id="Services">
        <div class="service">Services</div>
    <div class="drid-layer">
            <div class="frontend" id="sersam">
                <div class="head"><h2>Front End Skills</h2></div>
              <div class="dis">
                <div class="html">
                    <p>Html</p>
                    <span id="html"><span id="txt-htm">95%</span></span>
                 </div>

                 <div class="CSS">
                    <p>CSS</p>
                    <span id="css"><span id="txt-cs">90%</span></span>
                 </div>

                 <div class="script">
                    <p>JavaScript</p>
                    <span id="javascript"><span id="txt-js">80%</span></span>
                 </div>
             </div>
            </div>

        <div class="backend" id="sersam">
                <div class="head"><h2>Backend Skills</h2></div>
            <div class="dised">

                <div class="php">
                    <p>PHP</p>
                    <span id="php"><span id="txt-be">80%</span></span>
                </div>

                <div class="sql">
                    <p>Database MySQL</p>
                    <span id="sql"><span id="txt-sq">83%</span></span>
                </div>

                <div class="java">
                    <p>Java</p>
                    <span id="jav"><span id="txt-jv">72%</span></span>
                </div>

                <div class="python">
                    <p>Python</p>
                    <span id="pytho"><span id="txt-py">62%</span></span>
                </div>
                
            </div>
        </div>
        </div>
    </section>
    <hr>

    <!--section contact--->
    <section class="contact" id="Contact">
        <div class="cont">Contact</div>

        <center><div class="alert alert-warning alert-dismissible fade show" role="alert">
       <strong><?php echo "Message sent successfully"?></strong>
       </div>
       </center>

        <div class="form">
            <form action="" method="post">
                <table>
                    <tr>
                        <td><label for="fname">First Name</label></td>
                        <td><input type="text" name="finame" id="fname" required></td>
                    </tr>
                    <tr>
                        <td><label for="lname">Last Name</label></td>
                        <td><input type="text" name="laname" id="lname" required></td>
                    </tr>
                
                    <tr>
                        <td><label for="phon">Phone</label></td>
                        <td><input type="tel" name="phone" id="phon" required></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email</label></td>
                        <td><input type="text" name="mail" id="email" required></td>
                    </tr>
                    <tr>
                        <td><label for="subj">Subject</label></td>
                        <td><input type="text" name="subje" id="subj" required></td>
                    </tr>
                </table>
                <td><textarea name="messo" id="" cols="60" rows="5" placeholder="Type your message..."></textarea></td>
            <div class="butt">
                <button type="submit">Send</button>
            </div>
            </form>
        </div>

</section>

</body>
<script src="reniportfoli.js"></script>


</html>


