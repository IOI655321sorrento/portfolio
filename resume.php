<?php 
$a ="<html lang='en'>
<head>
        <title>My Portfolio Website</title>
        <link rel='stylesheet' href='CSS/portfolio.css'>
        <meta charset='utf-8'>
</head>
    <body>
    <div class='content'>
     <nav class='topnav'>
      <ul>
         <li><a href='index.php'>Home</a></li> 
         <li class='dd'><a href='about.php'>About Me</a>
         <ul class='ddc'>
                 <li><a href='hobby.php'>Hobbies</a></li>
                 <li><a href='college.php'>4-year plan</a></li>
                 <li><a href='achi.php'>Achievements</a></li>
             </ul>
         </li> 
         <li><a href='resume.php'>Resume</a></li> 
         <li><a href='contact.php'>Contact</a></li> 
         <li class='dda''><a href='port.php'>Portfolio</a>
             <ul class='ddca'>
                 <li><a href='code.php'>Coding</a></li>
                 <li><a href='writing.php'>Writing</a></li>
                 <li><a href='art.php'>Art</a></li>
             </ul>
         </li> 
      </ul>
        </nav>
        </div>
      <br>
      <h1>Home</h1>
      <div class='row'>
      <div class='wrapper'>
          <p>Jordan Zapata</p> <br>
      <div class='third'>
<p>Clovis, CA<br>
							
Email: jordan.zapata@student.cart.com	<br>	LinkedIn: https://www.linkedin.com/in/jordan-zapata-cart/			<br>		Cell:(559)-288-3652		<br>			
Objective: <br>
Web Application Development internship 
<br>
          <u><b>Education</b></u>: <br>		
         <u>Center for Advanced Research and Technology</u> <br> 
Web Application Development Lab/AP Computer Science (Aug. 2018-present) <br>
- Coded websites using html <br>
- Collaborated with team members to generate ideas<br>
- Presented a flash talk on cryptocurrency<br>
- Created Adobe Spark pages<br></p>
          </div>
<br>
         <div class='third'>
             <p> <u>Clovis North High School (Aug. 2016-present)</u> <br>
-College preparatory classes<br>
-GPA 3.3 <br>
<br>
          <u><b>Computer Software:</b></u> <br>
-HTML Basics <br>
-CSS basics <br>
-Adobe Spark <br>
<br></p>
         </div>
          <div class='third'>
              <p><u><b>Languages:</b></u> <br>
-Basic Spanish<br>
<br>
          <u><b>Work Experience:</b></u> <br>
-Poverello House (January 2017-present)<br>
-Prepared meals<br>
-Handled Clothing Drive<br>
<br>
          <u><b>Extracurricular Activities:</b></u> <br>
-Clovis North Robotics<br>

 </p>
          </div>

        </div>
        </div>
        <div class='pdf'><a href='pdf/Resume_Web_Jordan_Zapata.pdf' target='_blank'>Resume</a></div>
        <footer class='contact-bar'>
           <ul>
               <li>Jordan Zapata</li>
               <li>Cell Phone: 559-288-3652</li>
           </ul>
           <ul>
               <li>Email:</li>
               <li>Jordan.Zapata@student.cart.org</li>
           </ul>
       </footer>
    </body>
</html>";
    echo "$a";
?>