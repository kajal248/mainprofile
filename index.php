<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Kajal_Singh </title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
   <!---------------------------starting nav bar------------------------->
   <nav>
      <div class="toggle">
         <i class="fa fa-navicon "></i>
      </div>
      <ul>
         <li> <a href="#"><i class="fa fa-fw fa-home"></i> Home</a></li>
         <li> <a href="#"> <i class="fa fa-user-circle-o"></i>About Me</a></li>
         <li> <a href="#"><i class="fa fa-suitcase"></i> Experience</a></li>
         <li> <a href="#"><i class="fa fa-pencil-square-o"></i> Skill</a></li>
         <li> <a href="#"> <i class="fa fa-phone"></i>Contact</a></li>
      </ul>
      </div>
   </nav>
   <!-----------end navbar---------------->
   <!-----------------starting of introduction-->
   <section id="home">
      <div class="container">
         <img src="image/image13.jpg">
         <div class="centered">
            <h3> Hi I am </h3>
            <h2> Kajal Singh </h2>
            <h3>Seo Executive </h3>
         </div>
      </div>
   </section>
   <!-----------end home---------------->
   <section id="about">
      <h1> About Me </h1>
      <div class="container1">
         <div><span>
               <img class="box" src="image/kajal.jpg"> </span>
         </div>
         <div class="box2">
            <p>My name is kajal singh. I live in Noida with family.I am so proud of myself because I am eager to
               learn and utilise m skill work for our organization. I like everything I do to be well organized.
               I am curious about new technologies and always try to learn them and make something productive. <a class="box4" href="image/reports.jpg">....to know more </a>
            </p>
         </div>
         <div class="box3">
            <h2> Education</h2>
            <div class="EDUCATION">
               <li><span>Bachelor of Computer Applications</span> <br><span style="color:  rgb(248, 93, 93);;">M.A.I.T. Pilkhuwa, Ghaziabad</span></li>
               <br>
               <li><span>Intermediate</span><br><span style="color:  rgb(248, 93, 93);;"> Bal Jyoti Public
                     School</span>
               </li>
               <br><br>
               <li> <span>High School</span><br><span style="color:  rgb(248, 93, 93);;"> City Public School</span>
               </li>
            </div>
         </div>
      </div>
   </section>
   <!-----------------------------------------------------------starting experience------------------------------------------------------------------------>
   <section id="experince">
      <h1>Experience</h1>
      <div class="container2">
         <div class="experince">
            <li>Web Marketing Executive At Report Ocean Pvt. Ltd. from August 2021 to August 2022 </li>
            <li>SEO Executive At Seoczar Pvt. Ltd. Feb To July</li>
            <a href="image/reports.jpg" download class="btn"> Download CV</a>
         </div>
      </div>
   </section>
   <!--------------------------------------------end of experience-------------------------------------------------------->
   <!---------------------------------------------------starting of skill-------------------------------------------------------->
   <section id="Skill">
      <h1> Skill</h1>
      <div class="wrapper">
         <div class="shape-1"></div>
         <div class="shape-2"></div>
         <div class="container-skill">
            <div class="skills">
               <div class="details">
                  <span>HTML</span>
                  <span>90%</span>
               </div>
               <div class="bar">
                  <div id="html-bar"></div>
               </div>
            </div>
            <div class="skills">
               <div class="details">
                  <span>CSS</span>
                  <span>75%</span>
               </div>
               <div class="bar">
                  <div id="css-bar"></div>
               </div>
            </div>
            <div class="skills">
               <div class="details">
                  <span>Seo</span>
                  <span>65%</span>
               </div>
               <div class="bar">
                  <div id="seo-bar"></div>
               </div>
            </div>
            <div class="skills">
               <div class="details">
                  <span>Excel</span>
                  <span>50%</span>
               </div>
               <div class="bar">
                  <div id="excel-bar"></div>
               </div>
            </div>
            <div class="skills">
               <div class="details">
                  <span>Guest Post</span>
                  <span>30%</span>
               </div>
               <div class="bar">
                  <div id="guestpost-bar"></div>
               </div>
            </div>

            <div class="skills">
               <div class="details">
                  <span>GBP</span>
                  <span>90%</span>
               </div>
               <div class="bar">
                  <div id="GBP-bar"></div>
               </div>
            </div>

            <div class="skills">
               <div class="details">
                  <span>Keyword Research</span>
                  <span>70%</span>
               </div>
               <div class="bar">
                  <div id="keyword-bar"></div>
               </div>
            </div>
            <div class="skills">
               <div class="details">
                  <span>Quality Backlink</span>
                  <span>80%</span>
               </div>
               <div class="bar">
                  <div id="quality-bar"></div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--------------------------------------------------------end of skill---------------------------------------------------------------------------------------->
   <!---------------------------starting of contact---------------------------------------------------------------------------------------->
   <section id="contact">
  

      <div style="margin-right: 50px;
            margin-top: 5px;">
         <h1>Contact Me</h1>
         <div class="container3">
            <span>
               <form action="" method="POST">
                  <div class="form-group">
                     <input type="text" name="name" placeholder="Enter Your Name" value="" required>
                  </div>
                  <div class="form-group">
                     <input type="email" name="email" placeholder="Enter Your Email" value="" required>
                  </div>
                  <div class="form-group">
                     <input type="text" name="number" placeholder="Enter Your Number" value="" required>
                  </div>
                  <div class="form-group">

                     <textarea rows="5" name="message" class="form-control" value="" placeholder="Type Your Message Here..." cols="30" rows="4" required></textarea><br>
                     <input type="submit" name="submit" value="Submit">
                     
                     <?php include 'PHPMailer/mail.php'; ?>

               </form>
         </div>
         </span>
         <div class=" follow">
            <h2> Get connected with me on social networks</h2>
            <p class="social-icon">
               <a href="https://www.linkedin.com/in/kajal-singh-968a22196/"> <i class="fa fa-linkedin-square"></i></a>
               <a href=""><i class="fa fa-github"> </i></a>
               <a href="https://web.telegram.org/k/"><i class="fa fa-telegram"> </i></a>
               <a> <i class="fa fa-whatsapp"></i></a>
               <!-- <i class="fa fa-snapchat"></i>
                     <i class="fa fa-twitter"></i>-->
            </p>
            <h2 class="Detail1"> Contact Details</h2>
            <p>
               <i class="fa fa-envelope"></i>ksingh248a@gmail.com
               <i class="fa fa-phone-square"></i> 9990179349
            </p>
         </div>
      </div>
   </section>
   <!-------------------------end of contact-------------------------------------------->
   <footer id="footer">
      <p class="icons">
         <a> <i class="fa fa-linkedin-square"></i></a>
         <a><i class="fa fa-envelope-square"></i></a>
         <a><i class="fa fa-github"> </i></a>
         <a><i class="fa fa-telegram"> </i></a>
         <a> <i class="fa fa-whatsapp"></i></a>
      </p>
      <a style="  text-align: center; font-size:24px"> Developed & Design</a>
      <a class="fa fa-copyright" style="font-size:24px">By Kajal Singh</a>
   </footer>
   </main>
   <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
   <script type="text/javascript">
      $(document).ready(function() {
         $('.fa-navicon').click(function() {
            $('ul').toggleClass('active')

         })
      })
   </script>
   <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>

</html>