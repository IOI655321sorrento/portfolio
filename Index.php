
<?php 
$a = "<html lang='en'>
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
       <img class='prof' src='IMG/IMG_0102%20(1).jpg' alt='pfp'>
      <div class='wrapper23'>
      <p>Welcome to my portfolio website!This website is a display of my abilities as a programmer throughout the year. This is also going to be used as a basis for job application, as everything you will need to know about me will be here. I was going for a simple yet appealing design for my website, as I believe it gives off an air of professionalism, and is really appealing to me. I will continue to update this website as my skill improves and I know that there is always more to learn.</p>
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
