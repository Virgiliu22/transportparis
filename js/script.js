document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector(".header");
    const menuBtn = document.querySelector(".menu-btn");
    const navLinks = document.querySelector(".nav-links");
    const themeButtons = document.querySelectorAll("[data-theme-toggle]");
    const langSelects = document.querySelectorAll("[data-lang-select]");

    if (header) {
        window.addEventListener("scroll", function () {
            if (window.scrollY > 80) {
                header.classList.add("active");
            } else {
                header.classList.remove("active");
            }
        });
    }

    if (menuBtn && navLinks) {
        menuBtn.addEventListener("click", function () {
            navLinks.classList.toggle("open");
        });

        document.querySelectorAll(".nav-links a").forEach(function (link) {
            link.addEventListener("click", function () {
                navLinks.classList.remove("open");
            });
        });
    }

    const translations = {
        ro: {
            "nav.home": "Acasă",
            "nav.about": "Despre Noi",
            "nav.services": "Servicii",
            "nav.gallery": "Galerie",
            "nav.contact": "Contact",
            "nav.login": "Login",
            "nav.register": "Register",
            "nav.account": "Contul meu",
            "nav.logout": "Ieșire",
            "nav.cta": "Contactează-ne",

            "hero.small": "Transport internațional",
            "hero.title": "Transport Chișinău – Paris Pasageri & Colete",
            "hero.text": "TransportParis oferă curse regulate Moldova – Franța pentru pasageri, colete, mutări și transport auto, cu accent pe siguranță, punctualitate și confort.",
            "hero.btn1": "Rezervă acum",
            "hero.btn2": "Vezi serviciile",

            "about.small": "Despre TransportParis",
            "about.title": "Transport internațional Chișinău – Paris",
            "about.text1": "TransportParis este o echipă specializată în transport internațional între Moldova și Franța, oferind curse regulate pentru pasageri, colete, mutări și automobile.",
            "about.text2": "Fiecare cursă este organizată atent pentru ca transportul să fie sigur, rapid și fără complicații. Punem accent pe punctualitate, siguranța bagajelor și confort.",
            "about.li1": "Transport pasageri confortabil",
            "about.li2": "Livrare rapidă colete",
            "about.li3": "Transport auto pe platformă",
            "about.li4": "Mutări și relocări în Franța",

            "services.small": "Servicii",
            "services.title": "Serviciile noastre de transport",
            "services.text": "Oferim soluții complete de transport pentru pasageri, colete, mutări și automobile între Moldova și Franța.",
            "services.card1.title": "Transport Pasageri",
            "services.card1.text": "Curse regulate Chișinău – Paris cu condiții confortabile și sigure.",
            "services.card2.title": "Transport Colete",
            "services.card2.text": "Livrăm rapid colete, bagaje și bunuri personale în Franța.",
            "services.card3.title": "Mutări în Paris",
            "services.card3.text": "Transport sigur pentru mobilă, bagaje mari și bunuri personale.",
            "services.card4.title": "Transport Auto",
            "services.card4.text": "Transport auto pe platformă pentru mașini și automobile.",

            "gallery.small": "Galerie TransportParis",
            "gallery.title": "Curse & transport în imagini",
            "gallery.text": "Imagini reprezentative pentru curse, transport, pasageri, colete și destinații între Moldova și Franța.",

            "contact.title": "Rezervă transportul tău acum",
            "contact.text": "Completează formularul și echipa TransportParis te va contacta rapid pentru rezervări, informații despre curse, colete, mutări sau automobile.",
            "contact.details1": "Contacte",
            "contact.details2": "Destinații Franța",

            "form.name": "Nume și Prenume *",
            "form.namePlaceholder": "Introdu numele tău",
            "form.phone": "Telefon *",
            "form.phonePlaceholder": "ex. +373 69 234 782",
            "form.service": "Serviciu dorit *",
            "form.choose": "Alege serviciul",
            "form.message": "Comentariu sau mesaj *",
            "form.messagePlaceholder": "Scrie în câteva cuvinte de ce ai nevoie...",
            "form.submit": "Trimite cererea",

            "reviews.small": "Recenzii",
            "reviews.title": "Recenzii clienți",
            "reviews.text": "Experiențele clienților care au ales TransportParis.",
            "reviews.r1": "„Transport foarte confortabil și punctual. Recomand cu încredere.”",
            "reviews.r2": "„Coletele au ajuns rapid și fără probleme.”",
            "reviews.r3": "„Șofer serios și condiții excelente. Recomand.”",

            "footer.text": "TransportParis oferă curse regulate Moldova – Franța pentru pasageri, colete, mutări și transport auto.",
            "footer.links": "Linkuri rapide",
            "footer.contact": "Contacte",
            "footer.available": "Disponibil 24/7",
            "footer.copy": "Copyright © 2026 TransportParis. Toate drepturile rezervate.",

            "login.title": "Autentificare",
            "login.email": "Email",
            "login.emailPlaceholder": "Introdu email-ul tău",
            "login.password": "Parolă",
            "login.passwordPlaceholder": "Introdu parola",
            "login.button": "Intră în cont",
            "login.noAccount": "Nu ai cont?",
            "login.register": "Înregistrează-te",
            "login.backHome": "Înapoi la pagina principală",

            "register.title": "Înregistrare",
            "register.username": "Nume utilizator",
            "register.usernamePlaceholder": "Introdu numele tău",
            "register.email": "Email",
            "register.emailPlaceholder": "Introdu email-ul tău",
            "register.password": "Parolă",
            "register.passwordPlaceholder": "Minim 6 caractere",
            "register.button": "Creează cont",
            "register.haveAccount": "Ai deja cont?",
            "register.login": "Autentifică-te",

            "dashboard.title": "Pagina utilizatorului",
            "dashboard.welcome": "Bine ai venit",
            "dashboard.totalRequests": "Total cereri salvate",
            "dashboard.totalServices": "Servicii solicitate",
            "dashboard.currentYear": "Anul curent",
            "dashboard.editTitle": "Modifică cererea",
            "dashboard.saveChanges": "Salvează modificările",
            "dashboard.cancel": "Anulează",
            "dashboard.jsonTitle": "Date salvate în JSON",
            "dashboard.empty": "Nu există încă cereri salvate.",
            "dashboard.edit": "Modifică",
            "dashboard.delete": "Șterge",

            "table.name": "Nume",
            "table.phone": "Telefon",
            "table.service": "Serviciu",
            "table.message": "Mesaj",
            "table.date": "Data",
            "table.actions": "Acțiuni",

            "contactResult.successTitle": "Cererea a fost trimisă cu succes!",
            "contactResult.successText": "Mulțumim! Echipa TransportParis te va contacta în curând pentru confirmarea detaliilor.",
            "contactResult.requiredTitle": "Toate câmpurile sunt obligatorii.",
            "contactResult.requiredText": "Te rugăm să completezi numele, telefonul, serviciul dorit și mesajul.",
            "contactResult.phoneTitle": "Număr de telefon invalid.",
            "contactResult.phoneText": "Introdu un număr de telefon corect, de exemplu +373 69 234 782.",
            "contactResult.messageTitle": "Mesaj prea scurt.",
            "contactResult.messageText": "Mesajul trebuie să conțină cel puțin 5 caractere.",
            "contactResult.errorTitle": "A apărut o eroare.",
            "contactResult.errorText": "Cererea nu a putut fi procesată. Încearcă din nou.",
            "contactResult.backForm": "Înapoi la formular",
            "contactResult.backHome": "Pagina principală"
        },

        en: {
            "nav.home": "Home",
            "nav.about": "About Us",
            "nav.services": "Services",
            "nav.gallery": "Gallery",
            "nav.contact": "Contact",
            "nav.login": "Login",
            "nav.register": "Register",
            "nav.account": "My Account",
            "nav.logout": "Logout",
            "nav.cta": "Contact us",

            "hero.small": "International transport",
            "hero.title": "Chișinău – Paris Passenger & Parcel Transport",
            "hero.text": "TransportParis offers regular Moldova – France routes for passengers, parcels, relocations and car transport, focused on safety, punctuality and comfort.",
            "hero.btn1": "Book now",
            "hero.btn2": "View services",

            "about.small": "About TransportParis",
            "about.title": "International transport Chișinău – Paris",
            "about.text1": "TransportParis is a team specialized in international transport between Moldova and France, offering regular routes for passengers, parcels, relocations and cars.",
            "about.text2": "Every trip is carefully organized to make transport safe, fast and simple. We focus on punctuality, luggage safety and comfort.",
            "about.li1": "Comfortable passenger transport",
            "about.li2": "Fast parcel delivery",
            "about.li3": "Car transport on platform",
            "about.li4": "Moving and relocation in France",

            "services.small": "Services",
            "services.title": "Our transport services",
            "services.text": "We offer complete transport solutions for passengers, parcels, relocations and cars between Moldova and France.",
            "services.card1.title": "Passenger Transport",
            "services.card1.text": "Regular Chișinău – Paris routes with comfortable and safe conditions.",
            "services.card2.title": "Parcel Transport",
            "services.card2.text": "Fast delivery of parcels, luggage and personal goods to France.",
            "services.card3.title": "Moving to Paris",
            "services.card3.text": "Safe transport for furniture, large luggage and personal belongings.",
            "services.card4.title": "Car Transport",
            "services.card4.text": "Car transport on platform for vehicles and automobiles.",

            "gallery.small": "TransportParis Gallery",
            "gallery.title": "Trips & transport in images",
            "gallery.text": "Representative images for routes, transport, passengers, parcels and destinations between Moldova and France.",

            "contact.title": "Book your transport now",
            "contact.text": "Fill in the form and the TransportParis team will contact you quickly for bookings, route information, parcels, relocations or car transport.",
            "contact.details1": "Contacts",
            "contact.details2": "France destinations",

            "form.name": "Full name *",
            "form.namePlaceholder": "Enter your name",
            "form.phone": "Phone *",
            "form.phonePlaceholder": "e.g. +373 69 234 782",
            "form.service": "Desired service *",
            "form.choose": "Choose service",
            "form.message": "Comment or message *",
            "form.messagePlaceholder": "Write briefly what you need...",
            "form.submit": "Send request",

            "reviews.small": "Reviews",
            "reviews.title": "Client reviews",
            "reviews.text": "Experiences from clients who chose TransportParis.",
            "reviews.r1": "“Very comfortable and punctual transport. I strongly recommend it.”",
            "reviews.r2": "“The parcels arrived quickly and without problems.”",
            "reviews.r3": "“Serious driver and excellent conditions. Recommended.”",

            "footer.text": "TransportParis offers regular Moldova – France routes for passengers, parcels, relocations and car transport.",
            "footer.links": "Quick links",
            "footer.contact": "Contacts",
            "footer.available": "Available 24/7",
            "footer.copy": "Copyright © 2026 TransportParis. All rights reserved.",

            "login.title": "Login",
            "login.email": "Email",
            "login.emailPlaceholder": "Enter your email",
            "login.password": "Password",
            "login.passwordPlaceholder": "Enter your password",
            "login.button": "Log in",
            "login.noAccount": "No account?",
            "login.register": "Register",
            "login.backHome": "Back to homepage",

            "register.title": "Register",
            "register.username": "Username",
            "register.usernamePlaceholder": "Enter your name",
            "register.email": "Email",
            "register.emailPlaceholder": "Enter your email",
            "register.password": "Password",
            "register.passwordPlaceholder": "Minimum 6 characters",
            "register.button": "Create account",
            "register.haveAccount": "Already have an account?",
            "register.login": "Log in",

            "dashboard.title": "User page",
            "dashboard.welcome": "Welcome",
            "dashboard.totalRequests": "Total saved requests",
            "dashboard.totalServices": "Requested services",
            "dashboard.currentYear": "Current year",
            "dashboard.editTitle": "Edit request",
            "dashboard.saveChanges": "Save changes",
            "dashboard.cancel": "Cancel",
            "dashboard.jsonTitle": "Data saved in JSON",
            "dashboard.empty": "There are no saved requests yet.",
            "dashboard.edit": "Edit",
            "dashboard.delete": "Delete",

            "table.name": "Name",
            "table.phone": "Phone",
            "table.service": "Service",
            "table.message": "Message",
            "table.date": "Date",
            "table.actions": "Actions",

            "contactResult.successTitle": "Your request was sent successfully!",
            "contactResult.successText": "Thank you! The TransportParis team will contact you soon to confirm the details.",
            "contactResult.requiredTitle": "All fields are required.",
            "contactResult.requiredText": "Please fill in your name, phone number, desired service and message.",
            "contactResult.phoneTitle": "Invalid phone number.",
            "contactResult.phoneText": "Enter a valid phone number, for example +373 69 234 782.",
            "contactResult.messageTitle": "Message too short.",
            "contactResult.messageText": "The message must contain at least 5 characters.",
            "contactResult.errorTitle": "An error occurred.",
            "contactResult.errorText": "Your request could not be processed. Please try again.",
            "contactResult.backForm": "Back to form",
            "contactResult.backHome": "Home page"
        },

        fr: {
            "nav.home": "Accueil",
            "nav.about": "À propos",
            "nav.services": "Services",
            "nav.gallery": "Galerie",
            "nav.contact": "Contact",
            "nav.login": "Connexion",
            "nav.register": "Inscription",
            "nav.account": "Mon compte",
            "nav.logout": "Déconnexion",
            "nav.cta": "Contactez-nous",

            "hero.small": "Transport international",
            "hero.title": "Transport Chișinău – Paris Passagers & Colis",
            "hero.text": "TransportParis propose des trajets réguliers Moldavie – France pour passagers, colis, déménagements et transport automobile, avec sécurité, ponctualité et confort.",
            "hero.btn1": "Réserver",
            "hero.btn2": "Voir les services",

            "about.small": "À propos de TransportParis",
            "about.title": "Transport international Chișinău – Paris",
            "about.text1": "TransportParis est une équipe spécialisée dans le transport international entre la Moldavie et la France, avec des trajets réguliers pour passagers, colis, déménagements et voitures.",
            "about.text2": "Chaque trajet est organisé avec attention pour garantir un transport sûr, rapide et simple. Nous mettons l’accent sur la ponctualité, la sécurité des bagages et le confort.",
            "about.li1": "Transport confortable de passagers",
            "about.li2": "Livraison rapide de colis",
            "about.li3": "Transport auto sur plateforme",
            "about.li4": "Déménagements en France",

            "services.small": "Services",
            "services.title": "Nos services de transport",
            "services.text": "Nous proposons des solutions complètes pour passagers, colis, déménagements et voitures entre la Moldavie et la France.",
            "services.card1.title": "Transport Passagers",
            "services.card1.text": "Trajets réguliers Chișinău – Paris avec confort et sécurité.",
            "services.card2.title": "Transport Colis",
            "services.card2.text": "Livraison rapide de colis, bagages et biens personnels en France.",
            "services.card3.title": "Déménagement à Paris",
            "services.card3.text": "Transport sécurisé pour meubles, grands bagages et objets personnels.",
            "services.card4.title": "Transport Auto",
            "services.card4.text": "Transport de voitures sur plateforme.",

            "gallery.small": "Galerie TransportParis",
            "gallery.title": "Trajets & transport en images",
            "gallery.text": "Images représentatives des trajets, du transport, des passagers, des colis et des destinations entre la Moldavie et la France.",

            "contact.title": "Réservez votre transport maintenant",
            "contact.text": "Remplissez le formulaire et l’équipe TransportParis vous contactera rapidement pour les réservations, les informations de trajet, les colis, les déménagements ou le transport automobile.",
            "contact.details1": "Contacts",
            "contact.details2": "Destinations France",

            "form.name": "Nom et prénom *",
            "form.namePlaceholder": "Entrez votre nom",
            "form.phone": "Téléphone *",
            "form.phonePlaceholder": "ex. +373 69 234 782",
            "form.service": "Service souhaité *",
            "form.choose": "Choisir le service",
            "form.message": "Commentaire ou message *",
            "form.messagePlaceholder": "Écrivez brièvement ce dont vous avez besoin...",
            "form.submit": "Envoyer la demande",

            "reviews.small": "Avis",
            "reviews.title": "Avis clients",
            "reviews.text": "Expériences des clients qui ont choisi TransportParis.",
            "reviews.r1": "« Transport très confortable et ponctuel. Je recommande. »",
            "reviews.r2": "« Les colis sont arrivés rapidement et sans problème. »",
            "reviews.r3": "« Chauffeur sérieux et excellentes conditions. Recommandé. »",

            "footer.text": "TransportParis propose des trajets réguliers Moldavie – France pour passagers, colis, déménagements et transport auto.",
            "footer.links": "Liens rapides",
            "footer.contact": "Contacts",
            "footer.available": "Disponible 24/7",
            "footer.copy": "Copyright © 2026 TransportParis. Tous droits réservés.",

            "login.title": "Connexion",
            "login.email": "Email",
            "login.emailPlaceholder": "Entrez votre email",
            "login.password": "Mot de passe",
            "login.passwordPlaceholder": "Entrez le mot de passe",
            "login.button": "Se connecter",
            "login.noAccount": "Pas de compte ?",
            "login.register": "Inscription",
            "login.backHome": "Retour à la page principale",

            "register.title": "Inscription",
            "register.username": "Nom d’utilisateur",
            "register.usernamePlaceholder": "Entrez votre nom",
            "register.email": "Email",
            "register.emailPlaceholder": "Entrez votre email",
            "register.password": "Mot de passe",
            "register.passwordPlaceholder": "Minimum 6 caractères",
            "register.button": "Créer un compte",
            "register.haveAccount": "Vous avez déjà un compte ?",
            "register.login": "Connexion",

            "dashboard.title": "Page utilisateur",
            "dashboard.welcome": "Bienvenue",
            "dashboard.totalRequests": "Total demandes enregistrées",
            "dashboard.totalServices": "Services demandés",
            "dashboard.currentYear": "Année actuelle",
            "dashboard.editTitle": "Modifier la demande",
            "dashboard.saveChanges": "Enregistrer",
            "dashboard.cancel": "Annuler",
            "dashboard.jsonTitle": "Données enregistrées en JSON",
            "dashboard.empty": "Il n’y a pas encore de demandes enregistrées.",
            "dashboard.edit": "Modifier",
            "dashboard.delete": "Supprimer",

            "table.name": "Nom",
            "table.phone": "Téléphone",
            "table.service": "Service",
            "table.message": "Message",
            "table.date": "Date",
            "table.actions": "Actions",

            "contactResult.successTitle": "Votre demande a été envoyée avec succès !",
            "contactResult.successText": "Merci ! L’équipe TransportParis vous contactera bientôt pour confirmer les détails.",
            "contactResult.requiredTitle": "Tous les champs sont obligatoires.",
            "contactResult.requiredText": "Veuillez remplir le nom, le téléphone, le service souhaité et le message.",
            "contactResult.phoneTitle": "Numéro de téléphone invalide.",
            "contactResult.phoneText": "Entrez un numéro valide, par exemple +373 69 234 782.",
            "contactResult.messageTitle": "Message trop court.",
            "contactResult.messageText": "Le message doit contenir au moins 5 caractères.",
            "contactResult.errorTitle": "Une erreur est survenue.",
            "contactResult.errorText": "Votre demande n’a pas pu être traitée. Réessayez.",
            "contactResult.backForm": "Retour au formulaire",
            "contactResult.backHome": "Page d’accueil"
        }
    };

    function applyLanguage(language) {
        const selectedLanguage = translations[language] ? language : "ro";

        document.documentElement.lang = selectedLanguage;
        localStorage.setItem("siteLanguage", selectedLanguage);

        document.querySelectorAll("[data-i18n]").forEach(function (element) {
            const key = element.getAttribute("data-i18n");

            if (translations[selectedLanguage][key]) {
                element.textContent = translations[selectedLanguage][key];
            }
        });

        document.querySelectorAll("[data-i18n-placeholder]").forEach(function (element) {
            const key = element.getAttribute("data-i18n-placeholder");

            if (translations[selectedLanguage][key]) {
                element.setAttribute("placeholder", translations[selectedLanguage][key]);
            }
        });

        langSelects.forEach(function (select) {
            select.value = selectedLanguage;
        });
    }

    function applyTheme(theme) {
        if (theme === "dark") {
            document.body.classList.add("dark-mode");

            themeButtons.forEach(function (button) {
                button.textContent = "☀️";
            });
        } else {
            document.body.classList.remove("dark-mode");

            themeButtons.forEach(function (button) {
                button.textContent = "🌙";
            });
        }

        localStorage.setItem("siteTheme", theme);
    }

    const savedLanguage = localStorage.getItem("siteLanguage") || "ro";
    const savedTheme = localStorage.getItem("siteTheme") || "light";

    applyLanguage(savedLanguage);
    applyTheme(savedTheme);

    langSelects.forEach(function (select) {
        select.addEventListener("change", function () {
            applyLanguage(this.value);
        });
    });

    themeButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            const isDark = document.body.classList.contains("dark-mode");
            applyTheme(isDark ? "light" : "dark");
        });
    });
});