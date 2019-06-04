<?php 
$a ="
<html lang='en'>
<head>
        <title>My Portfolio Website</title>
        <link rel='stylesheet' href='CSS/portfolio.css'>
        <meta charset='utf-8'>
</head>
    <body>
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
    
      <br>
      <h1>My Writing</h1>
      <div class='row'>
      <div class='wrapper'>
      <img src='IMG/essay.PNG' class='test'>
      <div class='third'>
      <p>In my web application development class, we were required to write an essay about our career of choice, and the responsibilities it entails. We had to cover every aspect of our job, along with showing the job growth. Some of the other requirements included the education path, the salary, the duties, and the important qualities of someone working in that position. </p>
          </div>
       <br>
       <div class='third'>
       <p>My first challenge was creating the two required graphs for this essay. I was not used to making them, and I had to get help from the people in my group to figure out how to make them. Once I did, I realized how easy it actually was, and will make more use of them in the future. The next challenge I ran into was getting the minimum amount of sources for my essay. The sources I picked already covered a lot of aspects that I didn’t need other sources for. So gathering the rest of the sources was hard but manageable.</p>
          </div>
       <br>
       <div class='third'>
       <p>I took away a lot from this essay and will use the information to help me select a career. I learned the specifics about the career that I was interested in and let me see other sides to the career I didn’t expect.</p>
          </div>
        
       <img src='IMG/summary.PNG' class='test'>
         <div class='third'>
             <p>These summaries are some of the stuff we worked on during our first few weeks. These summaries are of some new technological developments that happened recently. We also had to give a small presentation to practice our speaking skills. The purpose of these was to keep us up to date on recent news.</p>
         </div>
         <div class='third'>
            <p>The first article is about the recent development in autonomous flying. We now have the ability to create an autonomous flying machine. We currently can only use it with helicopters, but we are close to using it with other flying vehicles. This is an amazing development considering we have just got done with autonomous cars.</p>
         </div>
         <div class='third'>
            <p>The second article is about a 'bionic eye'. This is very interesting because this is something we always see in science fiction movies. However this is actually within the realm of reality. This eye can give people back their sight and improve your sight.</p>
         </div>
         <img src='IMG/rp1essay' class='test' alt='essay'>
         <div class='third'>
             <p>n our english class, we read a book called Ready Player One. Our assignment was to pick on of the selected topics to write an essay. I chose to write about whether or not we should have a public school system similar to what  they had in Ready Player One. </p>
         </div>
         <div class='third'>
            <p>I argued in favor of this because it creates a fulfilling and fun way to learn in school and helps solve some of the problems with the public school system. This essay was extremely fun to write as I was able to do a lot of speculation</p>
         </div>
         <div class='third'>
            <p>about what our future would be like if we had that kind of school. The entire book was a great speculation about what our future would be like.</p>
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