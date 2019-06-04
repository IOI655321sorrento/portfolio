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
      <h1>Hobbies</h1>
      <div class='wrapper'>
      <img src='IMG/csgo.jpg' class='prof'>
      <img src='IMG/myers.png' class='prof'>
      <p>Hi, my name is Jordan Zapata and I live in Clovis, CA. I am 16 Years old and I attend Clovis North High School. I also currently attend the Center for Advanced Research and Technology and I am in the Web Application Development Lab. In the future, I am planning on being a foreign exchange student to Japan. I am currently learning how to play the guitar, and how to play the piano. I am interested in art, music, anime, and video games. I also enjoy hanging out with friends, as we often go to movies or just hang out at the park. I also love participating in family event such as holidays, games days, or just days where we want to see eachother.
</p>
      <img src='IMG/wand.jpg' class='prof'>
       <img src='IMG/dbd.jpg' class='prof'>
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