<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TransportParis - Transport Chișinău Paris</title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>

<header class="header">
    <nav class="navbar">
        <a href="#home" class="logo">
            Transport<span>Paris</span>
        </a>

        <ul class="nav-links">
            <li><a href="#home">Acasă</a></li>
            <li><a href="#despre">Despre Noi</a></li>
            <li><a href="#servicii">Servicii</a></li>
            <li><a href="#galerie">Galerie</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="login.php">Login</a></li>
<li><a href="dashboard.php">Contul meu</a></li>
        </ul>

        <a href="#contact" class="nav-btn">Contactează-ne</a>

        <div class="menu-btn">
            <i class="fa-solid fa-bars"></i>
        </div>
    </nav>
</header>

<section class="hero" id="home">
    <div class="hero-overlay"></div>

    <div class="hero-content">
        <span class="hero-small">Transport internațional</span>

        <h1>Transport Chișinău – Paris Pasageri & Colete</h1>

        <p>
            TransportParis oferă curse regulate Moldova – Franța pentru pasageri,
            colete, mutări și transport auto, cu accent pe siguranță, punctualitate
            și confort pe tot parcursul drumului.
        </p>

        <div class="hero-buttons">
            <a href="#contact" class="main-btn">Rezervă acum</a>
            <a href="#servicii" class="second-btn">Vezi serviciile</a>
        </div>
    </div>
</section>

<section class="about" id="despre">
    <div class="container about-container">
        <div class="about-image">
            <img src="https://images.pexels.com/photos/7235894/pexels-photo-7235894.jpeg" alt="Transport Moldova Franța">
        </div>

        <div class="about-text">
            <span class="section-small">Despre TransportParis</span>
            <h2>Transport internațional Chișinău – Paris</h2>

            <p>
                TransportParis este o echipă specializată în transport internațional
                între Moldova și Franța, oferind curse regulate pentru pasageri,
                colete, mutări și automobile. Ne concentrăm pe seriozitate,
                comunicare rapidă și condiții confortabile pentru fiecare client.
            </p>

            <p>
                Fiecare cursă este organizată atent pentru ca transportul să fie
                sigur, rapid și fără complicații. Punem accent pe punctualitate,
                siguranța bagajelor și o experiență confortabilă pe tot parcursul
                drumului.
            </p>

            <ul class="about-list">
                <li><i class="fa-solid fa-check"></i> Transport pasageri confortabil</li>
                <li><i class="fa-solid fa-check"></i> Livrare rapidă colete</li>
                <li><i class="fa-solid fa-check"></i> Transport auto pe platformă</li>
                <li><i class="fa-solid fa-check"></i> Mutări și relocări în Franța</li>
            </ul>

            <div class="about-buttons">
                <a href="#contact" class="main-btn">Rezervă acum</a>
                <a href="viber://chat?number=%2B37379334439" class="circle-btn viber">
                    <i class="fa-brands fa-viber"></i>
                </a>
                <a href="https://wa.me/37379334439" class="circle-btn whatsapp">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="services" id="servicii">
    <div class="container">
        <div class="section-head light">
            <span class="section-small">Servicii</span>
            <h2>Serviciile noastre de transport</h2>
            <p>
                Oferim soluții complete de transport pentru pasageri, colete,
                mutări și automobile între Moldova și Franța.
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <i class="fa-solid fa-van-shuttle"></i>
                <h3>Transport Pasageri</h3>
                <p>Curse regulate Chișinău – Paris cu condiții confortabile și sigure.</p>
                <a href="#contact">Rezervă acum</a>
            </div>

            <div class="service-card">
                <i class="fa-solid fa-box-open"></i>
                <h3>Transport Colete</h3>
                <p>Livrăm rapid colete, bagaje și bunuri personale în Franța.</p>
                <a href="#contact">Rezervă acum</a>
            </div>

            <div class="service-card">
                <i class="fa-solid fa-truck-moving"></i>
                <h3>Mutări în Paris</h3>
                <p>Transport sigur pentru mobilă, bagaje mari și bunuri personale.</p>
                <a href="#contact">Rezervă acum</a>
            </div>

            <div class="service-card">
                <i class="fa-solid fa-car"></i>
                <h3>Transport Auto</h3>
                <p>Transport auto pe platformă pentru mașini și automobile.</p>
                <a href="#contact">Rezervă acum</a>
            </div>
        </div>
    </div>
</section>

<section class="gallery" id="galerie">
    <div class="container">
        <div class="section-head">
            <span class="section-small">Galerie TransportParis</span>
            <h2>Curse & transport în imagini</h2>
            <p>
                Imagini reprezentative pentru curse, transport, pasageri, colete
                și destinații între Moldova și Franța.
            </p>
        </div>

        <div class="gallery-grid">
            <img src="https://images.pexels.com/photos/2033343/pexels-photo-2033343.jpeg" alt="Interior microbuz transport">
            <img src="https://images.pexels.com/photos/4391470/pexels-photo-4391470.jpeg" alt="Transport rutier">
            <img src="https://images.pexels.com/photos/13861/IMG_3496bfree.jpg" alt="Paris Franța">
            <img src="https://images.pexels.com/photos/460672/pexels-photo-460672.jpeg" alt="Turnul Eiffel Paris">
            <img src="https://images.pexels.com/photos/1796730/pexels-photo-1796730.jpeg" alt="Paris seara">
            <img src="https://images.pexels.com/photos/210182/pexels-photo-210182.jpeg" alt="Drum internațional">
        </div>
    </div>
</section>

<section class="contact-section" id="contact">
    <div class="container contact-container">
        <div class="contact-info">
            <h2>Rezervă transportul tău acum</h2>

            <p>
                Completează formularul și echipa TransportParis te va contacta rapid
                pentru rezervări, informații despre curse, transport colete, mutări
                sau automobile pe ruta Moldova – Franța.
            </p>

            <div class="contact-details">
                <div>
                    <h3>Contacte</h3>
                    <p><i class="fa-solid fa-phone"></i> +373 79 334 439</p>
                    <p><i class="fa-solid fa-envelope"></i> example@gmail.com</p>
                    <p><i class="fa-solid fa-location-dot"></i> Chișinău, Republica Moldova</p>
                </div>

                <div>
                    <h3>Destinații Franța</h3>
                    <p><i class="fa-solid fa-city"></i> Paris</p>
                    <p><i class="fa-solid fa-building"></i> Strasbourg</p>
                    <p><i class="fa-solid fa-building"></i> Metz • Nancy • Reims</p>
                    <p><i class="fa-solid fa-city"></i> Lyon • Bordeaux</p>
                </div>
            </div>
        </div>

        <form class="contact-form" action="contact.php" method="POST">
            <label>Nume și Prenume *</label>
            <input type="text" name="name" required>

            <label>Telefon *</label>
            <input type="text" name="phone" placeholder="ex, +373 69 234 782" required>

            <label>Serviciu dorit *</label>
            <select name="service" required>
                <option value="">Alege serviciul</option>
                <option value="Transport pasageri">Transport pasageri</option>
                <option value="Transport colete">Transport colete</option>
                <option value="Mutări în Paris">Mutări în Paris</option>
                <option value="Transport auto">Transport auto</option>
            </select>

            <label>Comentariu sau mesaj *</label>
            <textarea name="message" placeholder="Scrie în câteva cuvinte de ce ai nevoie..." required></textarea>

            <button type="submit">Rezervă acum</button>
        </form>
    </div>
</section>

<section class="reviews">
    <div class="container">
        <div class="section-head light">
            <span class="section-small">Recenzii</span>
            <h2>Recenzii clienți</h2>
            <p>
                Experiențele clienților care au ales TransportParis pentru curse,
                colete și transport internațional între Moldova și Franța.
            </p>
        </div>

        <div class="reviews-grid">
            <div class="review-card">
                <div class="stars">★★★★★</div>
                <p>„Transport foarte confortabil și punctual. Recomand cu încredere.”</p>
                <h3>— Andrei M.</h3>
            </div>

            <div class="review-card">
                <div class="stars">★★★★★</div>
                <p>„Coletele au ajuns rapid și fără probleme.”</p>
                <h3>— Cristina P.</h3>
            </div>

            <div class="review-card">
                <div class="stars">★★★★★</div>
                <p>„Șofer serios și condiții excelente. Recomand.”</p>
                <h3>— Daniel R.</h3>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container footer-container">
        <div>
            <h3>TransportParis</h3>
            <p>
                TransportParis oferă curse regulate Moldova – Franța pentru
                pasageri, colete, mutări și transport auto.
            </p>
        </div>

        <div>
            <h3>Linkuri rapide</h3>
            <a href="#home">Acasă</a>
            <a href="#despre">Despre Noi</a>
            <a href="#servicii">Servicii</a>
            <a href="#galerie">Galerie</a>
            <a href="#contact">Contact</a>
        </div>

        <div>
            <h3>Contacte</h3>
            <p>Chișinău, Republica Moldova</p>
            <p>+373 79 334 439</p>
            <p>Disponibil 24/7</p>
        </div>
    </div>

    <div class="footer-bottom">
        Copyright © 2026 TransportParis. Toate drepturile rezervate.
    </div>
</footer>

<a href="https://wa.me/37379334439" class="floating-whatsapp">
    <i class="fa-brands fa-whatsapp"></i>
</a>

<script src="js/script.js"></script>
</body>
</html>