<?php 
$a ="
<html lang='en'>
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
      <div class='third'>
      <img src='IMG/robotics.png' class='test'>
      <p>I have aquired multiple achievements during my period in middle school and high school. One of my first achievements was when I was a part of the middle school robotics team. This is where I was first introduced to coding. After that, I joined several clubs including the reading and poetry club, where I refined my writing skills. Then in high school, I joined their robotics team and further developed my coding skills and learned how to use a router that cut metal. Finally, I joined a triathalon club in my freshman year of high school. It was there that I discovered my love for biking and swimming.</p>
          </div>
        </div>
        </div>
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