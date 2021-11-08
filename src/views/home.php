<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/home.css">
    <title>Daniel Marcelo's Digital Gym</title>
</head>
<body>
    <header>
        <div class="bg white">
            <div class="z2">
                <nav>
                    <ul>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#workouts">Workouts</a></li>
                        <li><a href="#contact">Contacts</a></li>
                    </ul>
                </nav>
            </div>
            <div class="z2 main-content">
                <div>
                    <p>Web Developer</p>
                    <h1>Hi I<span class="purple">'</span>m Daniel Marcelo</h1>
                    <h2>People call me Creative/<</h2>
                </div>
                <div class="buttons">
                    <!-- MELHORAR ESTES BOTÕES!! -->
                    <a class="hd-btn main" href="assets/resources/DanielMarcelo.pdf" download><img src="./assets/resources/download.svg" alt="Download it here!"><div>Download CV</div></a>
                    <a class="hd-btn" href="#contact">Contact Me</a>
                </div>
            </div>
            <div id="more" class="clickable z2">
                <a href="#projects">
                    <div>
                        <p>Check my projects</p>
                    </div>
                    <div class="container">
                        <img src="./assets/resources/down.svg" alt="Check out my portfolio">
                    </div>
                </a>
                
            </div>
        </div>
    </header>
    <main id="projects">
        <section class="project">
            <!-- Flex-order a variar conforme o id seja par ou ímpar -->
            <div class="project-images">
                <div>
                    <img src="./assets/resources/xpress.png" alt="Imagem do projeto">
                </div>
            </div>
            <div class="project-description">
                <div>
                    <h3>Web-development | Xpress Garden</h3>
                </div>
                <div class="stack">
                    <div><p>HTML</p></div>
                    <div><p>BOOTSTRAP</p></div>
                    <div><p>JS</p></div>
                    <div><p>MySQL</p></div>    
                </div>
                <div>
                    <p>
                    Website developed for digital positionaing of a small gardening company starting business in pandemic times. Tried to use a clean design that was both informative and figurative, with SEO analysis for good position.
                    </p>
                </div>
                <div class="features">
                    <ul>
                        <li>
                        <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_mvrqybo6.json" background="transparent"  speed="1" loop autoplay></lottie-player>
                            Client testimonials dynamically produced on load, with a database.
                        </li>
                        <li>
                            <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_mvrqybo6.json" background="transparent"  speed="1" loop autoplay></lottie-player>
                            Customized form validation for contact form.
                        </li>
                        <li>
                            <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_mvrqybo6.json" background="transparent"  speed="1" loop autoplay></lottie-player>
                            Fully responsive for mobile, both in structure and content.
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="project">
            <!-- Flex-order a variar conforme o id seja par ou ímpar -->
            <div class="project-images">
                <div>
                    <img src="./assets/resources/renascer.png" alt="Imagem do projeto">
                </div>
            </div>
            <div class="project-description">
                <div>
                    <h3>Web-development | Associação Renascer</h3>
                </div>
                <div class="stack">
                    <div><p>HTML</p></div>
                    <div><p>CSS</p></div>
                    <div><p>jQuery</p></div>
                    <div><p>PHP</p></div>  
                    <div><p>MySQL</p></div>    
                </div>
                <div>
                    <p>
                    This project had the objective to develop a brand new website from scratch, with all information condensed in one page, in an easily scrollable website with a strategy in content delivery and positioning.
                    </p>
                </div>
                <div class="features">
                    <ul>
                        <li>
                            <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_mvrqybo6.json" background="transparent"  speed="1" loop autoplay></lottie-player>
                            Map developed using a third-party API
                        </li>
                        <li>
                            <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_mvrqybo6.json" background="transparent"  speed="1" loop autoplay></lottie-player>
                            Fully responsive for mobile, both in structure and in content
                        </li>
                        <li>
                            <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_mvrqybo6.json" background="transparent"  speed="1" loop autoplay></lottie-player>
                            Animations on load using jQuery.
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <section id="workouts">
        <div>
            <div id="dynamic" class="dynamic">
                
                <video loop>
                    <source src="assets/resources/proj1.mp4" type="video/mp4">
                </video>
                
            </div>
            <img id="bulb" src="../assets/resources/bulb.png" alt="">
            <img id="weight" src="../assets/resources/weight.png" alt="">
            <!-- Imagem é gerada dinamicamente conforme o clique -->
        </div>
        <div>
            <div>
                <div>
                    <h2>Workouts</h2>
                </div>
                <div>
                    <p>Programming is hard work. Want to know how these fingers flex? Check below some small functionalities and projects, by clicking and interacting with them.</p>
                </div>
                <div id="workoutList">
                    <ul>
                        <li class="workout active" proj="1">Project 1 | In N' Out System</li>
                        <li class="workout" proj="2">Project 2 | Search bar animation</li>
                        <li class="workout" proj="3">Project 3 | Expanding Cards</li>
                        <li class="workout" proj="4">Project 4 | Form Wave</li>
                        <li class="workout" proj="5">Project 5 | Rotating Navigation</li>
                    </ul>
                </div>
            </div>
            
        </div>
    </section>
    <section id="contact">
        <div>
            <div>
                <div class="contact-title">
                    <img src="assets/resources/pin.png" alt="" id="pin">
                    <h3>Let's Talk !</h3>
                    <img src="assets/resources/thumb.png" alt="" id="thumb">
                </div>
                <div>
                    <p>If you think my skills could be applied to a project of yours, contact me. I am looking forward to your challenge and to work with you!</p>
                </div>
            </div>
        </div>
        <div>
            <div>
                <div class="contact-text">
                    <h4>Send me an email,</h4>
                    <p>I'm a click away <strong>*wink</strong></p>
                </div>
                <div class="contacts">
                    <div>
                        <div class="contact-icon"><img src="..\assets\resources\mail.svg" alt=""></div>
                        <div><p>danielfsmarcelo&commat;gmail.com</p></div>
                    </div>
                    <div>
                        <div class="contact-icon"><img src="..\assets\resources\phone.svg" alt=""></div>
                        <div><p>968237471</p></div>
                    </div>
                    <img src="assets/resources/envelope.png" alt="" id="envelope">
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div>
            <div class="footer-nav">
                <nav>
                    <ul>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#workouts">Workouts</a></li>
                        <li><a href="#contact">Contacts</a></li>
                    </ul>
                </nav>
            </div>
            <div class="copyright"><p >© Daniel Marcelo | Front-end Developer</p></div>
        </div>
    </footer>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="./assets/js/index.js"></script>
</body>
</html>