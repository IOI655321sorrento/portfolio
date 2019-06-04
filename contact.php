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
      <div class='fourth'>
      <p>Professional Links:</p>
         <br>
      <a href='www.linkedin.com/in/jordan-zapata-cart' target='_blank'>Linked in</a>    
          </div>
          <div class='fourth'>
              <p>Contact Form: </p>
              <br>
              <p>Phone number: 559-288-3652</p>
          </div>
      <div class='fourth'>
          <p>Thank you for visting my website! I hope you like what you saw. I also hope you will consider me as a future employee after I graduate. As I sadi earlier, I will continue to update my website when my skills improve. Good day/night/afternoon folks!</p>
      </div>
       <div class='fourth'>
           <p>Email:</p>
           <br>
           <p>Jordan.Zapata.Gerety@outlook.com</p>
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