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
       <img src='IMG/myarmor.jpg'>
      <p>This is one of my drawings that I created. I quite like drawing knights in armor and it is what I started drawing. Knights were appealing to me when I first started out because of their relatively simple design that you could make as complext as you want. Also, knights always looked cool especially when you some of the crazy designs people have come up with. You can also apply different styles of art to knights, like and anime-style knight or a more realistic-style knight. <br>All in all, knights are a great starting point for anyone who is interested in art and doesn't want to start with something more challenging. That doesn't mean drawing knights is the easiest thing ever though. While it definitely is one of the easier things to draw, it still has its difficulties. One of the more basic difficulties is getting the body proportions right. You can't have a knight that looks like his chest is 10 times bigger than his lower body! I also like drawing some mythical creatures, which I will show below.</p>
          </div>

       <div class='third'>
              <img src='IMG/mydragon.jpg'>
       <p>Here we have one the dragons I drew after I got better at drawing knights. This one did take me a while because I was not used to drawing animals and I was still developing my art skills. I always wanted to start drawing dragons and was one of my original goals. This is one of my drawings that I haven't cleaned up and finalized yet, but this picture is from when I got better at drawing. At this point my art style was more refined and less sloppy. I also was getting into a more anime-like style of drawing, and have continued to use it today.</p>
          </div>
          <div class='third'>
              <img src='IMG/ninja.jpg'>
              <p>This was my first ninja drawing that took place in between the dragon and the knight. This was my first attempt at drawing a slimmer character since I hadn't started drawing dragons. This was very fun for me since there are so many ways to draw a ninja. The options are endless when it comes to them. The reason for this is because of the variants of colors and clothing that they have, along with their weapons and magic abilities. It is very interesting to combine different styles of ninjas with different elements to give you some very cool-looking characters. Also, you can do a more traditional style ninja and use traditional weapons and armor but still have the amount of options to choose from. This drawing was one of my favorites because I didn't use any tutorials or lessons to help me draw him. I liked him so much, I named him Jack.</p>
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