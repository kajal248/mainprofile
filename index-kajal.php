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
      <script>
         $(document).ready(function () {
             $("form").submit(function () {
                 console.log(form);
                 alert("Submitted");
                 location.reload();
             });
         });
      </script>
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
            <img src=" image/image13.jpg">
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
                  I am curious about new technologies and always try to learn them and make something productive. <a
                     class="box4" href="image/reports.jpg">....to know more </a>
               </p>
            </div>
            <div class="box3">
               <h2> Education</h2>
               <div class="EDUCATION">
                  <li><span>Bachelor of Computer Applications</span> <br><span
                     style="color:  rgb(248, 93, 93);;">M.A.I.T. Pilkhuwa, Ghaziabad</span></li>
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
               <li> I am writing to express my keen interest in the SEO Executive position at [your company], as advertised.<br> With three years of hands-on experience in SEO, I bring a proven track record of driving organic traffic, enhancing online visibility, and optimizing digital assets for optimal performance.

Key Strengths:

Strategic SEO Planning: Over the years, I have developed and executed comprehensive SEO strategies that align with business objectives. This includes keyword research, on-page optimization, and link-building initiatives.

Technical Proficiency: I am well-versed in SEO tools and technologies, ensuring efficient website audits, and implementing technical SEO improvements. My expertise includes addressing crawl issues, optimizing site speed, and improving overall website health.

Data-Driven Decision-Making: I leverage analytics and data insights to continually refine strategies. This includes tracking KPIs, monitoring trends, and adjusting approaches to ensure optimal campaign performance.

Content Optimization: I have a strong understanding of content optimization, ensuring that web content is not only search engine-friendly but also resonates with the target audience.

Achievements:

Successfully increased organic traffic by 50% for previous employers through a combination of on-page optimization and targeted content strategies.

Implemented a link-building campaign that resulted in a Y% increase in domain authority within a six-month period.


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
            <div class="container4">
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
                     <span>Javascript</span>
                     <span>30%</span>
                  </div>
                  <div class="bar">
                     <div id="js-bar"></div>
                  </div>
               </div>
               <div class="skills">
                  <div class="details">
                     <span>jQuery</span>
                     <span>30%</span>
                  </div>
                  <div class="bar">
                     <div id="jQuery-bar"></div>
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
               <form name="submit-to-google-sheet">
                  <div class="form-group">
                     <input type="text" name="Name" placeholder="Enter Your Name" required>
                  </div>
                  <div class="form-group">
                     <input type="text" name="Gmail ID" placeholder="Enter Your Email" required>
                  </div>
                  <div class="form-group">
                     <input type="text" name="Contact Number" placeholder="Enter Your Number" required>
                  </div>
                  <div class="form-group">
                     <textarea name="Message" class="form-control" placeholder="Type Your Message Here..."
                        rows="4" required></textarea>
                     <br><br>
                     <button class="btn2" name="submit"> Submit</button>
               </form>
               </div>
            </span>
            <div class=" follow">
               <h2> Get connected with me on social networks</h2>
               <p class="social-icon">
                  <a href="https://www.linkedin.com/in/kajal-singh-968a22196/"> <i
                     class="fa fa-linkedin-square"></i></a>
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
      <script>
         const scriptURL = 'https://script.google.com/macros/s/AKfycbxtWW7_51AG_iNmJK7q5RxgmHGWWXVhR6-fsjNOwtojdcQPfVDoqiAt1KrUrPGWcthTZQ/exec'
         const form = document.forms['submit-to-google-sheet']
         
         form.addEventListener('submit', e => {
             e.preventDefault()
             fetch(scriptURL, { method: 'POST', body: new FormData(form) })
                 .then(response => console.log('Success!', response))
                 .catch(error => console.error('Error!', error.message))
         })
      </script>
      <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
      <script type="text/javascript">
         $(document).ready(function () {
             $('.fa-navicon').click(function () {
                 $('ul').toggleClass('active')
         
             })
         })
      </script>
      <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
   </body>
</html>