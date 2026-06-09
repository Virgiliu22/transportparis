<?php
require_once "php/auth.php";

$isLoggedIn = isLoggedIn();
$user = getLoggedUser();
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>TransportParis - Transport Chișinău Paris</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css?v=100">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>

<header class="header">
    <nav class="navbar">
        <a href="#home" class="logo">Transport<span>Paris</span></a>

        <ul class="nav-links">
            <li><a href="#home" data-i18n="nav.home">Acasă</a></li>
            <li><a href="#despre" data-i18n="nav.about">Despre Noi</a></li>
            <li><a href="#servicii" data-i18n="nav.services">Servicii</a></li>
            <li><a href="#galerie" data-i18n="nav.gallery">Galerie</a></li>
            <li><a href="#contact" data-i18n="nav.contact">Contact</a></li>

            <?php if ($isLoggedIn): ?>
                <li><a href="dashboard.php" data-i18n="nav.account">Contul meu</a></li>
                <li><a href="logout.php" data-i18n="nav.logout">Ieșire</a></li>
            <?php else: ?>
                <li><a href="login.php" data-i18n="nav.login">Login</a></li>
                <li><a href="register.php" data-i18n="nav.register">Register</a></li>
            <?php endif; ?>
        </ul>

        <div class="nav-tools">
            <select class="lang-select" data-lang-select>
                <option value="ro">RO</option>
                <option value="en">EN</option>
                <option value="fr">FR</option>
            </select>

            <button type="button" class="theme-toggle" data-theme-toggle>🌙</button>

            <a href="#contact" class="nav-btn" data-i18n="nav.cta">Contactează-ne</a>
        </div>

        <div class="menu-btn">
            <i class="fa-solid fa-bars"></i>
        </div>
    </nav>
</header>

<section class="hero" id="home">
    <div class="hero-content">
        <span class="hero-small" data-i18n="hero.small">Transport internațional</span>

        <h1 data-i18n="hero.title">Transport Chișinău – Paris Pasageri & Colete</h1>

        <p data-i18n="hero.text">
            TransportParis oferă curse regulate Moldova – Franța pentru pasageri, colete, mutări și transport auto, cu accent pe siguranță, punctualitate și confort.
        </p>

        <div class="hero-buttons">
            <a href="#contact" class="main-btn" data-i18n="hero.btn1">Rezervă acum</a>
            <a href="#servicii" class="second-btn" data-i18n="hero.btn2">Vezi serviciile</a>
        </div>
    </div>
</section>

<section class="about" id="despre">
    <div class="container about-container">
        <div class="about-image">
            <img src="https://images.pexels.com/photos/7235894/pexels-photo-7235894.jpeg" alt="Transport Moldova Franța">
        </div>

        <div class="about-text">
            <span class="section-small" data-i18n="about.small">Despre TransportParis</span>
            <h2 data-i18n="about.title">Transport internațional Chișinău – Paris</h2>

            <p data-i18n="about.text1">
                TransportParis este o echipă specializată în transport internațional între Moldova și Franța, oferind curse regulate pentru pasageri, colete, mutări și automobile.
            </p>

            <p data-i18n="about.text2">
                Fiecare cursă este organizată atent pentru ca transportul să fie sigur, rapid și fără complicații. Punem accent pe punctualitate, siguranța bagajelor și confort.
            </p>

            <ul class="about-list">
                <li><i class="fa-solid fa-check"></i> <span data-i18n="about.li1">Transport pasageri confortabil</span></li>
                <li><i class="fa-solid fa-check"></i> <span data-i18n="about.li2">Livrare rapidă colete</span></li>
                <li><i class="fa-solid fa-check"></i> <span data-i18n="about.li3">Transport auto pe platformă</span></li>
                <li><i class="fa-solid fa-check"></i> <span data-i18n="about.li4">Mutări și relocări în Franța</span></li>
            </ul>
        </div>
    </div>
</section>

<section class="services" id="servicii">
    <div class="container">
        <div class="section-head light">
            <span class="section-small" data-i18n="services.small">Servicii</span>
            <h2 data-i18n="services.title">Serviciile noastre de transport</h2>
            <p data-i18n="services.text">
                Oferim soluții complete de transport pentru pasageri, colete, mutări și automobile între Moldova și Franța.
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <i class="fa-solid fa-van-shuttle"></i>
                <h3 data-i18n="services.card1.title">Transport Pasageri</h3>
                <p data-i18n="services.card1.text">Curse regulate Chișinău – Paris cu condiții confortabile și sigure.</p>
                <a href="#contact" data-i18n="hero.btn1">Rezervă acum</a>
            </div>

            <div class="service-card">
                <i class="fa-solid fa-box-open"></i>
                <h3 data-i18n="services.card2.title">Transport Colete</h3>
                <p data-i18n="services.card2.text">Livrăm rapid colete, bagaje și bunuri personale în Franța.</p>
                <a href="#contact" data-i18n="hero.btn1">Rezervă acum</a>
            </div>

            <div class="service-card">
                <i class="fa-solid fa-truck-moving"></i>
                <h3 data-i18n="services.card3.title">Mutări în Paris</h3>
                <p data-i18n="services.card3.text">Transport sigur pentru mobilă, bagaje mari și bunuri personale.</p>
                <a href="#contact" data-i18n="hero.btn1">Rezervă acum</a>
            </div>

            <div class="service-card">
                <i class="fa-solid fa-car"></i>
                <h3 data-i18n="services.card4.title">Transport Auto</h3>
                <p data-i18n="services.card4.text">Transport auto pe platformă pentru mașini și automobile.</p>
                <a href="#contact" data-i18n="hero.btn1">Rezervă acum</a>
            </div>
        </div>
    </div>
</section>

<section class="gallery" id="galerie">
    <div class="container">
        <div class="section-head">
            <span class="section-small" data-i18n="gallery.small">Galerie TransportParis</span>
            <h2 data-i18n="gallery.title">Curse & transport în imagini</h2>
            <p data-i18n="gallery.text">
                Imagini reprezentative pentru curse, transport, pasageri, colete și destinații între Moldova și Franța.
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
            <h2 data-i18n="contact.title">Rezervă transportul tău acum</h2>

            <p data-i18n="contact.text">
                Completează formularul și echipa TransportParis te va contacta rapid pentru rezervări, informații despre curse, colete, mutări sau automobile.
            </p>

            <div class="contact-details">
                <div>
                    <h3 data-i18n="contact.details1">Contacte</h3>
                    <p>📞 +373 79 334 439</p>
                    <p>✉️ example@gmail.com</p>
                    <p>📍 Chișinău, Republica Moldova</p>
                </div>

                <div>
                    <h3 data-i18n="contact.details2">Destinații Franța</h3>
                    <p>Paris</p>
                    <p>Strasbourg</p>
                    <p>Metz • Nancy • Reims</p>
                    <p>Lyon • Bordeaux</p>
                </div>
            </div>
        </div>

        <form class="contact-form" action="contact.php" method="POST">
            <label data-i18n="form.name">Nume și Prenume *</label>
            <input type="text" name="name" required data-i18n-placeholder="form.namePlaceholder" placeholder="Introdu numele tău">

            <label data-i18n="form.phone">Telefon *</label>
            <input type="text" name="phone" required data-i18n-placeholder="form.phonePlaceholder" placeholder="ex. +373 69 234 782">

            <label data-i18n="form.service">Serviciu dorit *</label>
            <select name="service" required>
                <option value="" data-i18n="form.choose">Alege serviciul</option>
                <option value="Transport pasageri" data-i18n="services.card1.title">Transport pasageri</option>
                <option value="Transport colete" data-i18n="services.card2.title">Transport colete</option>
                <option value="Mutări în Paris" data-i18n="services.card3.title">Mutări în Paris</option>
                <option value="Transport auto" data-i18n="services.card4.title">Transport auto</option>
            </select>

            <label data-i18n="form.message">Comentariu sau mesaj *</label>
            <textarea name="message" required data-i18n-placeholder="form.messagePlaceholder" placeholder="Scrie în câteva cuvinte de ce ai nevoie..."></textarea>

            <button type="submit" data-i18n="form.submit">Trimite cererea</button>
        </form>
    </div>
</section>

<section class="reviews">
    <div class="container">
        <div class="section-head light">
            <span class="section-small" data-i18n="reviews.small">Recenzii</span>
            <h2 data-i18n="reviews.title">Recenzii clienți</h2>
            <p data-i18n="reviews.text">
                Experiențele clienților care au ales TransportParis.
            </p>
        </div>

        <div class="reviews-grid">
            <div class="review-card">
                <div class="stars">★★★★★</div>
                <p data-i18n="reviews.r1">„Transport foarte confortabil și punctual. Recomand cu încredere.”</p>
                <h3>— Andrei M.</h3>
            </div>

            <div class="review-card">
                <div class="stars">★★★★★</div>
                <p data-i18n="reviews.r2">„Coletele au ajuns rapid și fără probleme.”</p>
                <h3>— Cristina P.</h3>
            </div>

            <div class="review-card">
                <div class="stars">★★★★★</div>
                <p data-i18n="reviews.r3">„Șofer serios și condiții excelente. Recomand.”</p>
                <h3>— Daniel R.</h3>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container footer-container">
        <div>
            <h3>TransportParis</h3>
            <p data-i18n="footer.text">
                TransportParis oferă curse regulate Moldova – Franța pentru pasageri, colete, mutări și transport auto.
            </p>
        </div>

        <div>
            <h3 data-i18n="footer.links">Linkuri rapide</h3>
            <a href="#home" data-i18n="nav.home">Acasă</a>
            <a href="#despre" data-i18n="nav.about">Despre Noi</a>
            <a href="#servicii" data-i18n="nav.services">Servicii</a>
            <a href="#galerie" data-i18n="nav.gallery">Galerie</a>
            <a href="#contact" data-i18n="nav.contact">Contact</a>
        </div>

        <div>
            <h3 data-i18n="footer.contact">Contacte</h3>
            <p>Chișinău, Republica Moldova</p>
            <p>+373 79 334 439</p>
            <p data-i18n="footer.available">Disponibil 24/7</p>
        </div>
    </div>

    <div class="footer-bottom" data-i18n="footer.copy">
        Copyright © 2026 TransportParis. Toate drepturile rezervate.
    </div>
</footer>

<a href="https://wa.me/37379334439" class="floating-whatsapp">☏</a>

<script src="js/script.js?v=100"></script>
</body>
</html>