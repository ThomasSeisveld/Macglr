<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/Dev.css">
    <link rel="stylesheet" href="CSS/privacy.css">
    <link rel="stylesheet" href="CSS/footer.css">
</head>
<body>
<?php
include_once 'PHP/header.php';
?>

<?php

if (isset($_GET['id'])) {
    $privacy_id = $_GET['id'];

    $pagename = "";
    $info = "";


    if ($privacy_id == "conditions") {

        $pagename = "<h2>Conditions</h2>";
        $info = "<p><b>Property Information Accuracy:</b>
        <br>
        a. The website should provide accurate and up-to-date information about the apartments for sale, including details about the location, size, amenities, and pricing.
        b. The website should clearly mention if the information provided is subject to change and the frequency at which updates are made.
        <br><br>
        <b>Pricing and Payment:</b>
        <br>
        a. The website should clearly display the price of each apartment along with any additional costs, such as maintenance fees, taxes, or registration charges.
        b. Payment options, including any financing or installment plans, should be clearly stated on the website.
        c. The website should outline the refund and cancellation policy, if applicable, for buyers who change their minds or encounter unforeseen circumstances.
        <br><br>
        <b>Availability and Reservation:</b>
        <br>
        a. The website should indicate the availability status of each apartment, clearly distinguishing between sold units and those still available for purchase.
        b. If reservation or pre-booking options are offered, the website should provide details on how to reserve an apartment, any associated fees, and the duration for which the reservation will be held.
        <br><br>
        <b>Property Features and Amenities:</b>
        <br>
        a. The website should provide comprehensive information about the features, amenities, and specifications of each apartment, including floor plans, room sizes, materials used, and any additional facilities like parking, gym, or swimming pool.
        b. Any images, videos, or virtual tours provided on the website should accurately represent the apartments for sale.
        <br><br>
        <b>Legal Information:</b>
        <br>
        a. The website should clearly mention the legal status of the apartments, including ownership details, titles, and any legal restrictions or encumbrances.
        b. If applicable, the website should provide information on the governing homeowners' association (HOA) or any other regulatory bodies, along with associated fees and rules.
        <br><br>
        <b>Privacy and Data Protection:</b>
        <br>
        a. The website should have a clear privacy policy that outlines how user data is collected, stored, and used. It should comply with relevant data protection laws and regulations.
        b. Users should have the option to opt out of any data sharing or marketing communications.
        <br><br>
        <b>Customer Support and Complaints:</b>
        <br>
        a. The website should provide contact information or a dedicated customer support channel to address queries, complaints, or requests for assistance.
        b. The website should have a process for handling and resolving customer complaints in a timely and professional manner.
        <br><br>
        <b>Disclaimers and Limitations:</b>
        <br>
        a. The website should include disclaimers regarding the accuracy of information, potential risks associated with real estate transactions, and any limitations of liability for the website owner.
        b. Any legal or financial advice provided on the website should be clearly stated as general information and not personalized advice.</p>
        ";

    } elseif ($privacy_id == "cookies"){

        $pagename = "<h3>Cookies</h3>";
        $info = "<p><b>1. Algemeen</b>
        <br>
        Dit cookiebeleid heeft betrekking op het Villa4U. 
        
        Wij vinden het belangrijk dat je weet welke cookies wij inzetten en voor welke doeleinden we dit doen. Hieronder lees je meer over de soorten cookies die we onderscheiden, wie ze plaatsen, de redenen waarom ze worden gebruikt en hoe lang de cookies worden opgeslagen. Daarnaast kun je je toestemmingsvoorkeuren beheren via het voorkeurenmenu.
        
        <br><br>
        <b>2. Wat zijn cookies?</b>
        <br>
        Cookies zijn kleine informatiebestandjes die op je device (zoals je computer, tablet of telefoon) kunnen worden geplaatst wanneer je webpagina’s bezoekt, zoals funda.nl. De belangrijkste functie van cookies is om beperkt data op te slaan van bezoekers. Als wij het in dit cookiebeleid hebben over cookies verstaan wij daaronder ook vergelijkbare technieken zoals web-beacons, Flash-cookies en device fingerprinting.
        <br><br>
        <b>3. Waarom en welke cookies gebruiken wij?</b>
        <br>
        Cookies helpen ons het Villa4U-platform veilig, snel en optimaal beschikbaar te houden. Ook kunnen we je dankzij cookies nuttige functionaliteiten aanbieden zoals het opslaan van je meest recente zoekopdracht, het automatisch invullen van gegevens en het onthouden dat je bent ingelogd. Dit maakt het gebruik van Villa4U aangenamer, makkelijker en persoonlijker. Ook gebruiken we cookies om je advertertenties op maat te kunnen aanbieden – afgestemd op jouw persoonlijke voorkeuren.
        
        Met sommige cookies die we gebruiken op het Villa4U-platform worden ook persoonsgegevens verzameld. In ons Privacybeleid , hebben we beschreven op welke wijze we omgaan met deze persoonsgegevens.
        
        In ons cookiebeleid maken wij onderscheid tussen verschillende soorten cookies: functionele, analytische, personalisatie en advertentie-cookies. Per categorie geven we hieronder aan welk soort cookies waar onder valt en met welke reden deze op je device(s) worden geplaatst.
        <br><br>
        <b>4. Functionele cookies</b>
        <br>
        Deze cookies zijn nodig voor het goed laten functioneren van Villa4U. Functionele cookies zijn bijvoorbeeld:
        
        cookies die te maken hebben met de gebruikersfunctionaliteit van ons platform, zoals bij inloggen, om iets te kunnen afrekenen of je laatste zoekopdracht op te kunnen slaan;
        no-follow cookies, aan de hand hiervan weten we welke andere soorten cookies we met jouw toestemming mogen plaatsen op jouw device en welke niet;
        load-balancing cookies, die het verkeer over onze servers verdelen;
        cookies waarmee we ongewenst verkeer op Villa4U kunnen herkennen en blokkeren.
        Diverse features in het Villa4U-platform zijn erop gericht om het jou als gebruiker zo gemakkelijk mogelijk te maken en daarbij ook jouw persoonlijke voorkeuren op te slaan. Zo slaan we je laatst gebruikte zoekopdracht in cookies op, zodat je bij het volgende bezoek aan onze site direct vanaf de homepage weer naar die zoekopdracht kunt teruggaan.
        
        Zie voor een verdere beschrijving van alle functionele cookies de cookielijst, die beschikbaar is via het voorkeurenmenu. Een knop naar het voorkeurenmenu is beschikbaar onder paragraaf 10 van dit cookiebeleid.
        <br><br>
        <b>5. Analytische cookies</b>
        <br>
        Deze cookies geven ons informatie over de kwaliteit en effectiviteit van de door ons geleverde diensten. Wij onderscheiden hierin:
        
        analytische cookies die de kwaliteit en effectiviteit van het Villa4U-platform meten;
        A/B-testing cookies, waarmee we verschillende interface-scenario’s kunnen testen;
        site en performance monitoring cookies, waarmee we de stabiliteit van Villa4U kunnen waarborgen.
        Om te bepalen welke onderdelen van het Villa4U-platform het meest interessant zijn voor onze bezoekers, proberen wij met tools zoals Google Analytics – die we overigens zo privacyvriendelijk mogelijk instellen – continu te meten hoeveel bezoekers er op ons platform komen, welke onderdelen het meest worden bekeken en hoe snel de pagina’s laden. Van al deze door ons verzamelde informatie maken we vervolgens statistieken. Die geven ons inzicht in hoe het Villa4U-platform wordt gebruikt, hoe wij het platform stabiel kunnen houden en welke verbeteringen wij moeten doorvoeren om onze dienstverlening te optimaliseren.
        
        Zie voor een verdere beschrijving van alle analytische cookies de cookielijst, die beschikbaar is via het voorkeurenmenu. Een knop naar het voorkeurenmenu is beschikbaar onder paragraaf 10 van dit cookiebeleid.
        <br><br>
        <b>6. Personalisatie cookies</b>
        <br>
        Wij gebruiken cookies om van jou een gebruikersprofiel op te bouwen, zodat we je van relevante informatie kunnen voorzien en je gebruikerservaring persoonlijker kunnen maken. Ook kan de inhoud van advertenties worden gepersonaliseerd als je ook advertentiecookies toestaat (ga naar ‘advertentiecookies’ voor meer informatie). Dit gebeurt onder andere op basis van je gedrag op het Villa4U-platform over de verschillende devices die je gebruikt. Voor het plaatsen van deze cookies moet je toestemming geven.
        
        Zie voor een verdere beschrijving van de personalisatie cookies de cookielijst, die beschikbaar is via het voorkeurenmenu. Een knop naar het voorkeurenmenu is beschikbaar onder paragraaf 10 van dit cookiebeleid.
        <br><br>
        <b>7. Advertentie cookies</b>
        <br>
        Deze cookies worden gebruikt door ons en door derde partijen waarmee wij samenwerken (hierna: Villa4U-partners). Op basis van je internetgedrag binnen en buiten het Villa4U-platform en over de verschillende devices die je gebruikt wordt hier een gebruikersprofiel mee opgebouwd. Hiermee kunnen advertenties op jou persoonlijk afgestemd worden, zowel op ons platform als door derden. Deze cookies worden bijvoorbeeld gebruikt:
        
        om bij te houden welke advertenties je al hebt gezien;
        om bij te houden hoeveel bezoekers de advertentie in zijn totaliteit zien, erop klikken of na het klikken erop een bestelling plaatsen;
        om een persoonlijk profiel op te bouwen en je op basis van jouw persoonlijke interesses relevante advertenties op het Villa4U-platform of andere platformen aan te kunnen bieden.
        Advertentienetwerken en mediabureaus fungeren in sommige gevallen als tussenpersoon tussen ons en de bedrijven die advertenties op Villa4U plaatsen. Via deze tussenpersonen kunnen adverteerders automatisch bieden op advertentieruimte. Door de inzet van deze advertentietechnieken, hebben wij niet altijd tijdig zicht op de partijen die adverteren en de cookies die zij plaatsen via het Villa4U-platform.
        
        Zie voor een verdere beschrijving van de advertentie cookies de cookielijst, die beschikbaar is via het voorkeurenmenu. Een knop naar het voorkeurenmenu is beschikbaar onder paragraaf 10 van dit cookiebeleid.
        <br><br>
        <b>8. Hoelang worden cookies opgeslagen?</b>
        <br>
        Hoelang cookies worden opgeslagen, kun je uitgebreid per type cookie lezen via de cookielijst die beschikbaar is via het voorkeurenmenu. Een knop naar het voorkeurenmenu is beschikbaar onder paragraaf 10 van dit cookiebeleid. Zie ook ons Privacybeleid om te zien hoelang wij bepaalde persoonsgegevens bewaren die we hebben verkregen via cookies.
        <br><br>
        <b>9. Moet ik toestemming geven?</b>
        <br>
        We informeren je zo goed mogelijk over de doelen waarvoor cookies op je device worden opgeslagen, en welke dat dan precies zijn. Alle functionele en analytische cookies plaatsen we direct zodra je Villa4U gebruikt. Voor het plaatsen van personalisatie- en advertentiecookies hebben we je toestemming nodig. Die verstrek je aan ons door een expliciete keuze te maken via onze cookiebanner, of via het voorkeurenmenu. Mocht je geen toestemming willen geven, dan kun je van Villa4U gebruikmaken zonder de personalisatie- en advertentiecookies. Als je géén toestemming geeft voor advertentiecookies, betekent dit overigens niet dat er geen advertenties meer worden getoond. De advertenties zullen in dat geval alleen niet langer zijn afgestemd op jouw persoonlijke interesses.</p>";
    } elseif ($privacy_id == "privacy") {

        $pagename = "<h3>Privacy</h3>";
        $info = "<p><b>Information We Collect:</b>
        <br>

        Personal Information: When you visit our website or use our services, we may collect certain personal information such as your name, email address, phone number, and mailing address. This information is necessary for us to provide you with the requested services and communicate with you effectively.
        Financial Information: In order to process payments for apartment purchases, we may collect payment card details, bank account information, or other financial information. Please note that we use a secure payment gateway to ensure the security of your financial data.
        Log Data: Our website automatically collects certain information when you visit, such as your IP address, browser type, referring/exit pages, and timestamps. This information is used to analyze trends, administer the site, and gather demographic information for overall website improvement.
        Cookies and Similar Technologies: We use cookies and similar technologies to enhance your browsing experience, analyze website traffic, and personalize content. You can manage your cookie preferences through your browser settings.
        <br><br>
        <b>How We Use Your Information:</b>
        <br>
        Provide Services: We use your personal information to process apartment sales, communicate with you regarding your purchase, and deliver the requested services.
        Improve User Experience: Your information helps us understand your preferences and tailor our website to provide a personalized experience.
        Marketing and Communications: We may use your contact information to send you promotional materials, updates, or newsletters. You can opt-out of receiving such communications at any time.
        Legal Compliance: We may use or disclose your information to comply with applicable laws, regulations, legal processes, or enforceable governmental requests.
        <br><br>
        <b>Information Sharing:</b>
        <br>
        
        Third-Party Service Providers: We may share your information with trusted third-party service providers who assist us in operating our website, conducting business activities, or delivering services on our behalf.
        Business Transfers: In the event of a merger, acquisition, or sale of assets, your personal information may be transferred as part of the transaction.
        Legal Requirements: We may disclose your information if required by law or in response to a valid legal request.
        <br><br>
        <b>Data Security:</b>
        <br>
        
        We implement appropriate security measures to protect your personal information from unauthorized access, alteration, disclosure, or destruction.
        However, please note that no method of transmission over the internet or electronic storage is 100% secure. We cannot guarantee the absolute security of your data.
        <br><br>
        <b>Your Choices and Rights:</b>
        <br>
        You have the right to access, update, correct, or delete your personal information. You can exercise these rights by contacting us using the information provided below.
        You may opt-out of receiving promotional communications by following the instructions in our emails or contacting us directly.
        Please note that certain information may be necessary for us to provide the requested services, and deleting or limiting its use may affect your ability to use our website or services.
        <br><br>
        <b>Third-Party Websites:</b>
        <br>
        Our website may contain links to third-party websites or services. This Privacy Policy does not apply to those websites. We recommend reviewing the privacy policies of any third-party websites you visit.
        <br><br>
        <b>Children's Privacy:</b>
        <br>
        Our website is not intended for children under the age of 16. We do not knowingly collect personal information from individuals in this age group. If you believe we have inadvertently collected such information, please contact us to request its deletion.
        Changes to this Privacy Policy:
        
        We may update this Privacy Policy from time to time to reflect changes in our</p>";
    } else {
        echo "House not found.";
    }
} else {
    echo "Invalid request.";
}
?>
<div class='main'>
    <p><?php echo $pagename ?></p>
    <p><?php echo $info ?></p>
</div>

<div class="footer">
    <hr class="hr-top">
    <img src="img/logo.png" id="logo-footer" alt="logo">
    <div class="footer-text">
        <a href="privacy.php?id=conditions">Conditions</a>
        <a href="privacy.php?id=cookies">Cookies</a>

        &copy2023Villa4u

        <a href="privacy.php?id=privacy">Privacy</a>
        <a href="contact.html">Contact</a>
    </div>

    <hr class="hr-bottom">
</div>

<script src="JS/Dev.js"></script>
</body>
</html>
