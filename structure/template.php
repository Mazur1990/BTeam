<?php
// session_start();
$address = 'https://bteam.pl';

$template_start_head = ' 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="author" content="Krzysztof Baraniecki & Andrzej Mazurkiewicz & Konrad Łączniak - webyou.pl">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="'.$address.'/build/main.css'.'">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
       function onSubmit(token) {
         document.getElementById("demo-form").submit();
       }
     </script>
     <style>
        .grecaptcha-badge{
            display: none !important;
        }
     </style>
';

$template_end_head = '
    <link rel="apple-touch-icon" sizes="180x180" href="'.$address.'/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="'.$address.'/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="'.$address.'/images/favicon-16x16.png">
    <link rel="mask-icon" href="'.$address.'/images/safari-pinned-tab.svg" color="#e1a1e1">
    <meta name="msapplication-TileColor" content="#e1a1e1">
    <meta name="theme-color" content="#ffffff">
</head>
';

$template_start_body = '

';
$template_end_body = '
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    AOS.init();
  </script>
    <script type="text/javascript" src="'.$address.'/js/main.js"></script>
</body>
';

$nav_menu = '

<nav class="navbar navbar-expand-lg static-top navbar-dark" id="navbar">
  <div class="container ">
    <a class="navbar-brand" href="#">
          <img src="images/galleries/logo/bteam.svg" style="height:150px; width:150px;" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        
            <li class="nav-item">
            <a class="nav-link" href="#oNas" data-toggle="collapse" data-target=".navbar-collapse.show">O Nas</a>
            </li>
            <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
            <a class="nav-link" href="#oferta">Oferta</a>
            </li>
            <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
            <a class="nav-link" href="#referencje">Referencje</a>
            </li>
                    <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
            <a class="nav-link" href="#kontakt">Kontakt</a>
            </li>
                    <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
            <a class="nav-link" href="#partners">Partnerzy</a>
            </li>
        </ul>
        </div>
  </div>
</nav>
';

$cta = '
    <section id="cta">
        <div class="trianglesInImages-up"></div>
            <div class="container text-center">
                <p class="mb-5 font-weight-bold">Donec commodo viverra metus a iaculis. Cras scelerisque risus ac mi posuere, sit amet sollicitudin magna ultricies. Nunc elementum efficitur lectus in mattis. Ut feugiat aliquet rutrum. Praesent condimentum velit ut urna blandit scelerisque. Duis condimentum tortor purus, in sodales ante ornare ac. Sed sit amet sem dapibus, pharetra quam id, interdum risus.</p>
                <a href="#!" class="btn btn-primary">kontakt</a>
            </div>
        <div class="trianglesInImages-down"></div>
    </section>
';

// $footer = '
//     <footer id="footer">
//         <div class="container">
//             <div class="row">
//                 <div class="col-12">
//                     <p>footer</p>
//                 </div>
//         </div>
//     </footer>
// ';

$socialMedia_fix = '
    <aside id="socialMedia-fix">
        <div class="fixedFb">
            <a target="_blank" href="https://www.facebook.com/%C5%81P-Bochenkiewicz-Bteam-455067328026150/">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48" version="1.1">
                    <g id="surface1">
                        <path style=" fill:#3F51B5;" d="M 42 37 C 42 39.761719 39.761719 42 37 42 L 11 42 C 8.238281 42 6 39.761719 6 37 L 6 11 C 6 8.238281 8.238281 6 11 6 L 37 6 C 39.761719 6 42 8.238281 42 11 Z "></path>
                        <path style=" fill:#FFFFFF;" d="M 34.367188 25 L 31 25 L 31 38 L 26 38 L 26 25 L 23 25 L 23 21 L 26 21 L 26 18.589844 C 26.003906 15.082031 27.460938 13 31.59375 13 L 35 13 L 35 17 L 32.714844 17 C 31.105469 17 31 17.601563 31 18.722656 L 31 21 L 35 21 Z "></path>
                    </g>
                </svg>
            </a>
        </div>
        <div class="fixedIn">
            <a target="_blank" href="https://www.instagram.com/bteam.pl/">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 48 48" style="enable-background:new 0 0 48 48;" xml:space="preserve">
                    <g id="surface1">
                        <path style="fill:#304FFE;" d="M32,42H16c-5.5,0-10-4.5-10-10V16c0-5.5,4.5-10,10-10h16c5.5,0,10,4.5,10,10v16   C42,37.5,37.5,42,32,42z"></path>
                    <path style="fill:#304FFE;fill-opacity:0.2902;" d="M6,16v16c0,5.5,4.5,10,10,10h16c5.5,0,10-4.5,10-10V16c0-1-0.1-1.9-0.4-2.8   C36,8.7,28.8,6,21,6c-3.7,0-7.3,0.6-10.7,1.8C7.7,9.6,6,12.6,6,16z"></path>
                    <path style="fill:#6200EA;" d="M21,8c-5,0-9.6,1.2-13.8,3.2C6.4,12.7,6,14.3,6,16v16c0,5.5,4.5,10,10,10h16c5.5,0,10-4.5,10-10   V16.2C36.5,11.1,29.1,8,21,8z"></path>
                    <path style="fill:#673AB7;" d="M42,19c-5.3-5.5-12.7-9-21-9c-5.4,0-10.5,1.5-14.8,4.1C6.1,14.7,6,15.3,6,16v16c0,5.5,4.5,10,10,10   h16c5.5,0,10-4.5,10-10V19z"></path>
                    <path style="fill:#8E24AA;" d="M42,22c-4.9-6.1-12.5-10-21-10c-5.6,0-10.7,1.7-15,4.6V32c0,5.5,4.5,10,10,10h16c5.5,0,10-4.5,10-10   V22z"></path>
                    <path style="fill:#C2185B;" d="M42,32v-6.6C37.5,18.6,29.8,14,21,14c-5.6,0-10.8,1.9-15,5v13c0,5.5,4.5,10,10,10h16   C37.5,42,42,37.5,42,32z"></path>
                    <path style="fill:#D81B60;" d="M42,32v-2.4C38.4,21.6,30.4,16,21,16c-5.7,0-11,2.1-15,5.6V32c0,5.5,4.5,10,10,10h16   C37.5,42,42,37.5,42,32z"></path>
                    <path style="fill:#F50057;" d="M41.6,34.8C39.7,25.2,31.2,18,21,18c-5.9,0-11.2,2.4-15,6.3V32c0,5.5,4.5,10,10,10h16   C36.5,42,40.4,39,41.6,34.8z"></path>
                    <path style="fill:#FF1744;" d="M39.9,38C39.4,28,31.2,20,21,20c-6.1,0-11.5,2.9-15,7.4V32c0,5.5,4.5,10,10,10h16   C35.2,42,38.1,40.4,39.9,38z"></path>
                    <path style="fill:#FF5722;" d="M21,22c-6.5,0-12.1,3.6-15,9v1c0,5.5,4.5,10,10,10h16c2.2,0,4.3-0.7,5.9-2c0-0.3,0.1-0.7,0.1-1   C38,29.6,30.4,22,21,22z"></path>
                    <path style="fill:#FF6F00;" d="M21,24c-7,0-12.8,4.7-14.5,11.2c1.3,4,5.1,6.8,9.5,6.8h16c1.4,0,2.6-0.3,3.8-0.8   c0.1-0.7,0.2-1.5,0.2-2.2C36,30.7,29.3,24,21,24z"></path>
                    <path style="fill:#FF9800;" d="M21,26c-6.9,0-12.5,5.3-12.9,12c1.8,2.4,4.7,4,7.9,4h16c0.6,0,1.1-0.1,1.7-0.2   C33.9,40.9,34,40,34,39C34,31.8,28.2,26,21,26z"></path>
                    <path style="fill:#FFC107;" d="M31.6,42c0.3-1,0.4-2,0.4-3c0-6.1-4.9-11-11-11s-11,4.9-11,11c0,0.3,0,0.7,0.1,1   c1.7,1.2,3.7,2,5.9,2H31.6z"></path>
                    <path style="fill:#FFD54F;" d="M21,30c-5,0-9,4-9,9c0,0.8,0.1,1.6,0.3,2.3c1.1,0.5,2.4,0.7,3.7,0.7h13.5c0.3-0.9,0.5-1.9,0.5-3   C30,34,26,30,21,30z"></path>
                    <path style="fill:#FFE082;" d="M21,32.1c-3.9,0-7,3.1-7,7c0,1,0.2,1.9,0.6,2.8C15.1,42,15.5,42,16,42h11.4c0.4-0.9,0.6-1.9,0.6-2.9   C28,35.2,24.9,32.1,21,32.1z"></path>
                    <path style="fill:#FFECB3;" d="M21,34.1c-2.8,0-5,2.2-5,5c0,1.1,0.4,2.1,1,2.9H25c0.6-0.8,1-1.8,1-2.9C26,36.3,23.8,34.1,21,34.1z"></path>
                    <path style="fill:#FFFFFF;" d="M30,38H18c-4.4,0-8-3.6-8-8V18c0-4.4,3.6-8,8-8h12c4.4,0,8,3.6,8,8v12C38,34.4,34.4,38,30,38z    M18,12c-3.3,0-6,2.7-6,6v12c0,3.3,2.7,6,6,6h12c3.3,0,6-2.7,6-6V18c0-3.3-2.7-6-6-6H18z"></path>
                    <path style="fill:#FFFFFF;" d="M24,31c-3.9,0-7-3.1-7-7c0-3.9,3.1-7,7-7c3.9,0,7,3.1,7,7C31,27.9,27.9,31,24,31z M24,19   c-2.8,0-5,2.2-5,5s2.2,5,5,5s5-2.2,5-5S26.8,19,24,19z"></path>
                    <path style="fill:#FFFFFF;" d="M32,16c0,0.6-0.4,1-1,1s-1-0.4-1-1s0.4-1,1-1S32,15.4,32,16z"></path>
                    </g>
                </svg>
            </a>
        </div>
    </aside>
';
	

$template_copyright = '	    
    <div id="copyright">
        <div class="container text-center footer">
            ©2019 <a href="http://www.webyou.pl" target="_blank" >www.webyou.pl</a> - wszelkie prawa zastrzeżone. Projekt zrealizowany przez zespół <a href="http://www.webyou.pl" target="_blank" ><strong>webyou.pl</strong></a>.
        </div>  
    </div>  
';	

$breadcrumbs = '
    <div id="breadcrumbs">
        <p>breadcrumbs</p>
    </div>
';
?>


<!-- FORM  -->
<?php $mainForm = '
<form method="post" action="/structure/form.php" name="kontakt" id="demo-form">
    <div class="md-form">
        <label for="form-name">Imię</label>
        <i class="fas fa-user prefix grey-text"></i>
        <input type="text" id="form-name" class="form-control" name="name" required>
    </div>

    <div class="md-form">
        <label for="form-email">E-mail</label>
        <i class="fas fa-envelope prefix grey-text"></i>
        <input type="email" id="form-email" class="form-control" name="email" required>
    </div>

    <div class="md-form">
        <label for="form-Subject">Temat</label>
        <i class="fas fa-tag prefix grey-text"></i>
        <input type="text" id="form-Subject" class="form-control" name="title" required>
    </div>

    <div class="md-form">
        <label for="form-text">Wiadomość</label>
        <i class="fas fa-pencil-alt prefix grey-text"></i>
        <textarea id="form-text" class="form-control md-textarea" rows="3" name="message" required></textarea>
    </div>
    <div class="text-center kontakt-btn">
        <button id="singlebutton" data-callback="onSubmit" data-sitekey="6LcnT3QaAAAAAEDaRnUZf8QzMOtefJexzmC7n-tW" name="singlebutton" class="btn btn-primary g-recaptcha ">Wyślij</button>
    </div>
</form>
'; ?>