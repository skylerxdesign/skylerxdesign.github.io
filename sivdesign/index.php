<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.17/fullpage.min.css" integrity="sha512-JIWkx/Vz4qw2gIbB6CCH0f8TdElaUt22FCIIytW9C792hpBivsgmsBqoIMtlDTbqLI9mCA+PXw4/v6BCRLbtKw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Siv's Design</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!-------Navigation Bar-------->
        <!-- <header>
            <a href="index.php" class="logo">Siv Leong</a>
            <div class="bx bx-menu" id="menu-icon"></div>
            <ul class="navbar">
                <li><a href="#Home">Home</a></li>
                <li><a href="#About">About</a></li>
                <li><a href="#Services">Services</a></li>
                <li><a href="#Portfolio">Portfolio</a></li>
                <li><a href="#Contact">Contact</a></li>
            </ul>
        </header> -->

    <!-------Home Page-------->
    <div id="fullPage">
        <section class="section home" id="home">
            <header>
                <a href="index.php" class="logo">Siv Leong</a>
                <div class="bx bx-menu" id="menu-icon"></div>
                <ul class="navbar">
                    <li><a href="#Home">Home</a></li>
                    <li><a href="#About">About</a></li>
                    <li><a href="#Services">Services</a></li>
                    <!-- <li><a href="#Portfolio">Portfolio</a></li> -->
                    <li><a href="#Contact">Contact</a></li>
                </ul>
            </header>
            <div class="home-text">
                <h3>I'm a <span class="multiText"></span></h3>
                <p>Hello, I'm an interior designer who loves creating spaces that are both functional and aesthetically pleasing. Through my designs, I strive to enhance people's lives and help them make the most of their space.</p>
                <a href="#" class="btnHireMe">DOWNLOAD MY CV</a>

            </div>
        </section>

    <!-------------------About Me----------------->

        <section class="section aboutme">
            <!-- <div class="line1"></div>
            <div class = "line2"></div> -->
            <div class="header">
                <h4>ABOUT ME</h4>
            </div>
            
            <img class="aboutimage" src="../sivdesign/images/sivprofilepic.jpg" alt="mypicture">
            <div class="aboutme-container">
                <h5>Interior Designer</h5>
                <p>As an interior designer, I am constantly inspired by the power of design to transform spaces and enhance the lives of those who inhabit them. I am passionate about creating spaces that reflect my clients' unique personalities and lifestyles while balancing form and function.

My attention to detail and commitment to delivering exceptional results has earned me a reputation as a skilled and trusted designer in the industry.</p>
            </div>
            <div class="skill-container">
                <h5>Skills</h5>
                <div class="skills">
                    <div class="skill">
                        <div class="skill-name">Adobe Creative Suite</div>
                        <div class="skill-bar">
                            <div class="skill-per" per="70%" style="max-width:70%"></div>
                        </div>
                    </div>

                    <div class="skill">
                        <div class="skill-name">AutoCAD</div>
                        <div class="skill-bar">
                            <div class="skill-per" per="83%" style="max-width:83%"></div>
                        </div>
                    </div>

                    <div class="skill">
                        <div class="skill-name">3ds Max</div>
                        <div class="skill-bar">
                            <div class="skill-per" per="78%" style="max-width:78%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-------------------Services----------------->
        <section class="section services">
            <div class="header">
                <h4>Services</h4>
            </div>
            <div class="service-container">
                <div class="box">
                    <i class='bx bxl-adobe' ></i>
                    <h2>Design & Planning</h2>
                    <p>We will help you to get the result you dreamed of</p>
                </div>
                <div class="box">
                    <i class='bx bxs-bulb' ></i>
                    <h2>Custom Solution</h2>   
                    <p>Individual aesthetically stunning solution for customers</p>
                </div>
                <div class="box">
                    <i class='bx bxs-cube' ></i>
                    <h2>Furniture & Decor</h2>
                    <p>We create and product our product design lines</p>
                </div>
            </div>
        </section>
    <!-------------------Portfolio----------------->
        <!-- <section class="section">
            <div class="header">
                <h4>Portfolio</h4>
            </div>
        </section> -->
    <!-------------------Contact Me----------------->
        <section class="section contactme">
            <div class="header">
                <h4>CONTACT ME</h4>              
            </div>
            <form class="contact-form" action="index.html" method="post">
                    <input type="text" class="contact-form-text" placeholder="Your Name">
                    <input type="email" class="contact-form-text" placeholder="Your Email">
                    <textarea class="contact-form-text" placeholder="Your Message"></textarea>
                    <input type="#" class="contact-form-btn" value="SEND">
                </form>
            <div class="contact-container">
                <div class="contactinfo">
                    <h3>PHONE NUMBER</h3>
                    <p>+60167283478</p>
                </div>
                <div class="contactinfo">
                    <h3>EMAIL</h3>
                    <p>skylerxdesign@gmail.com</p>
                </div>
                <div class="contactinfo">
                    <h3>ADDRESS</h3>
                    <p>No. 23, Jalan Setia Impian 2/1,
Taman Setia Impian,
43000 Kajang, Selangor,
Malaysia.</p>
                </div>
            </div>
        </section>
    </div>

    

    <!-------custom js link-------->
    <script type="text/javascript" src="js/script.js"></script>

    <!-------Typing Text Animation-------->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typingEffect = new Typed(".multiText",{
            strings : ["Designer", "Photographer", "Freelancer"],
            loop : true,
            typeSpeed : 100,
            backSpeed : 80,
            backDelay : 1500
        })
    </script>

    <!-------Full Page Scroll Animation (Fullpage.js)-------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.17/fullpage.min.js"></script>
    <script>
        new fullpage('#fullPage',{
            autoScrolling:true,
            navigation: true,
            anchors:['Home','About','Services','Portfolio','Contact'],
            scrollingSpeed: 1200
        })
    </script>
</body>
</html>