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
      <h1>My coding</h1>
      <div class='row'>
      <div class='wrapper'>
     <img src='IMG/csszen.PNG' class='test'>
      <div class='third'>
       <p>As an assignment for my Web Applications class, we had to create our own CSS zen garden. This entailed putting all of our current CSS skills to use in a website that was graded by our teacher. We also learned new and important skills while making our website, including floats.</p>
          </div>
       <br>
       <div class='third'>
       <p>As I began to work on my website, I encountered my first challenge. While I was making my aside, I couldn’t get it into the position I wanted it to be in. After some experimentation, and with the help of w3schools, I managed to get it in position. Also, I had to figure out how to format my paragraphs to have a different background-color and font, along with making them appear side-by-side. Again, after consulting w3schools and my teacher, I was able to make it happen.</p>
          </div>
          <div class='third'>
       <p><br>This project taught me to be resourceful and be responsible. This was because I struggled with making the deadline because I decided to procrastinate during one day and it set me back really far. I have learned from this experience and made smarter choices with the rest of my projects. I also learned more skills that enabled me to make my website look better and function properly. </p>
          </div>
          <img src='IMG/forms.PNG' class='test'>
          <div class='third'>
              <p>While this website was styled, it shows some more of my capabilities with HTML forms. In this website I learned how to create different text boxes that you would commonly see in surveys. This includes: name boxes, email boxes, sliders, date and time boxes, birth date boxes, and list style options. </p>
          </div>
          <div class='third'>
              <p>This is what the forms look like while they aren't stylized. If you want to stylize them, you can personalize them however you wish. If I had styled them, I would have made them seem more modern. I also would have centered the forms to make them neater.</p>
          </div>
          <div class='third'>
              <p>As stated in the first paragraph, you will often find these forms in surveys. ALso, you can find them in other portfolio websites like these so that they can contact you. When I learn how to collect information from these forms, I will put them on my portfolio website.</p>
          </div>
          <img src='IMG/media.PNG' class='test'>
          <div class='third'>
              <p>In this project, we learned how to use media queries. A Media Query is used to size the browser screen for different platforms like phones and tablets. We had to use these to show we could format for different devices. When you shrink the browser, the font would change and the layout would shrink.</p>
          </div>
          <div class='third'>
              <p>You can stylize media queries to work better for certain devices along with what I said earlier about making them look better. In fact, a lot of websites use media queries to move their websites onto different platforms so phone and tablet users don't have to constantly zoom in or zoom out.</p>
          </div>
          <div class='third'>
              <p>This project was actually difficult because you had to format all of your content for a specific screen. This gave me a lot of trouble even though some people were able to get it instantly. However, this is a useful skill to have and helps people access your website.</p>
          </div>
          <img src='IMG/clientsite.png' class='test' alt='Client Site'>
          <div class='third'>
              <p>This was the second to last project of the year, and we were tasked to create a website for an actual business. Our group made our website for a photographer, and we think it turned out pretty good as website go.</p>
          </div>
          <div class='third'>
              <p>We had a csv file setup that received data from the html forms on the contact page. That file was able to be opened with microsoft excel for managing. However, we have not hosted the website yet on a web service, but we do plan to put it on the internet.</p>
          </div>
          <div class='third'>
              <p>This project wasn’t hard technically, but coordinating with your client’s wants and needs proved to be a challenge for us and other people. I also struggled with remembering to commit changes that I made on the website, which almost resulted in us losing a day’s worth of progress.</p>
          </div>
          <img src='IMG/jscalculator.png' class='test' alt='calculator'>
          <div class='third'>
              <p>When we first started learning about javascript functions, we were tasked with creating a calculator using only javascript and basic html. Using a string of basic functions, I managed to get the calculator systems working.</p>
          </div>
          <div class='third'>
              <p>This was accomplished using some prompts and some if statements. I just had to make a working interface in which the person would input numbers and the math function desired and output the result onto the html page.</p>
          </div>
          <div class='third'>
              <p>It started with some prompts showing up asking you what numbers you wanted to use. Then another one popped up asking what basic math functions you wanted to use. Then it outputted the result onto the html page using the document.write() method.</p>
          </div>
          <img src='IMG/trouble.png' class='test' alt='trouble'>
          <div class='third'>
              <p>At the end of the javascript lesson, we were told to program the game of trouble with only html, css, and javascript. This was the most challenging project of the year, as we had to apply concepts to situations that we have had no experience with.</p>
          </div>
          <div class='third'>
              <p>I was forced to employ the html canvas to draw the board and the pieces. Our group only manage to get the board and dice system set up, along with only one piece moving. </p>
          </div>
          <div class='third'>
              <p>This was poor, but only a couple groups in our class managed to get the entire game working. Those kids are now the kids we pray to as we are unworthy of breathing the same air as them.</p>
          </div>
        </div>
        </div>
          <footer class='contact-bar'>
           <p>Jordan Zapata    Phone Number: (559)-288-3652     email: Jordan.Gerety@icloud.com</p>
       </footer>
    </body>
</html>";
echo "$a";
?>
