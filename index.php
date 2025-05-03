<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link rel="shortcut icon" type="x-icon" href="Image/GCT-Logo3.png">
      <link rel="stylesheet" href="style.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPH
      s44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
</head>
<body>
    <section class="header">
        <nav>
         <a href="HP.html"><img src="Image/GCT-Logo3.png" alt=""></a>
         <div class="nav-l" id="navid">
            <i class="fa fa-door-closed"onclick=hmenu()></i>
            <ul>
               
                <li><a href="">ABOUT US</a></li>
                <li><a href="enrollment_form.html">ONLINE ENROLLMENT</a></li>
                <li><a href="courses.html">COURSES</a></li>
                <li><a href="signup.html">LOGOUT</a></li>
            </ul>
         </div>   
         <i class="fa fa-bars" onclick="smenu()"></i>
        </nav>
        <div class="text-box">
            <h1> Welcome to Garcia College of Technology "Go Online"</h1>
            <p>Be a bearer excellence!
                An Institution Committed to Affordable and Accessible QUALITY EDUCATION
            </p>
            <a href=""class="hero-btn">Visit Us to know More</a>
        </div>

    </section>
<!----Course----->

<section class="course">
    <h1>PROGRAMS WE OFFERED</h1>
    <p></p>

    <div class="row">
        <div class="course-col">
            <h3>BSCE</h3>
            <P>Bachelor of Science in Civil Engineering</P>
        </div>
        <div class="course-col">
            <h3>BSEE</h3>
            <P>Bachelor of Science in Electrical Engineering</P>
        </div>
        <div class="course-col">
            <h3>BSME</h3>
            <P>Bachelor of Science in Mechanical Engineering</P>
        </div>
        
    </div>
</section>

<!------- campus ----->

<section class="campus">
    <h1>OUR BELOVED GCT</h1>
    <p></p>
    <div class="row">
        <div class="campus-col">
            <img src="Image/16.jpg">
            <div class="layer">
                <h3>CAMPUS</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="Image/12.jpg">
            <div class="layer">
                <h3>ACHIEVEMENT</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="Image/18.jpg">
            <div class="layer">
                <h3>QUALITY EDUCATION</h3>
            </div>
        </div>
    </div>
</section>
    <!------- Facilities-------->
<section class="facilities">
    <h1>GCT FACILITIES </h1>
    <p>Our college takes great pride in the exceptional standard of our campus facilities, which are meticulously maintained to provide students with a comfortable, 
        well-equipped, and conducive learning environment.</p>
    <div class="row">
        <div class="faci-col">
            <img src="Image/9.jpg" alt="">
            <h3>QUALITY STANDARD EQUIPMENT</h3>
            <P>Our college provides students with standard
                 quality, state-of-the-art equipment and resources to support their academic excellence.

            </P>

        </div>
        <div class="faci-col">
            <img src="Image/1.jpg" alt="">
            <h3>QUALITY STANDARD COM-LABS</h3>
            <P>Our college industry-standard hardware and software, empowering students to develop vital tech skills.</P>
                
        </div>
        <div class="faci-col">
            <img src="Image/13.jpg" alt="">
            <h3>QUALITY STANDARD LIBRARY</h3>
            <P>The college extensive library offers an 
                unparalleled collection of high-quality, industry-standard print and digital resources to support student academics and research.</P>
                
        </div>
    </div>
</section>
    <!------- call-------->
    <section class="call">
        <h1>Enroll for our variours courses Anywhere from the World</h1>
   <a href=""class="hero-btn"> CONTACT US</a>
    </section>
  <!------- footer-------->
<section class="footer">
    <h4>About Us</h4>
    <p>Welcome to Garcia College of Technology!

        At Garcia College of Technology, we are committed to fostering academic excellence and preparing our students for successful careers in today
        's dynamic world. Established in 2025, our institution has a rich history of providing quality education and innovative learning experiences.</p>
         <div class="icon">
            <i class="fa-brands fa-square-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-square-x-twitter"></i>
         </div>
         <p>Made by STUF TEAM BSIT 2-S-1 </p>
</section>
    <!------- JavaScript for Menu-------->
    <script>
        var navid = document.getElementById("navid");
        function smenu() {
            navid.style.right = "0";           
        }
        function hmenu() {
            navid.style.right = "-200px";           
        }

    </script>
</body>
</html>
