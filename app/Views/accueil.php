<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fokontany</title>
  <link rel="stylesheet" href="<?= base_url("bootstrap/css/bootstrap.min.css")?>">
  <link rel="icon" type="image/png" href="../../dist/img/logo.png">
  <style>
    <?php $estConnecte = session()->get('estConnecte') ?? false; ?>

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    html {
    scroll-behavior: smooth;
    }

    body, html {
      height: 100%;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      overflow-x: hidden;
    }
    
    .navbar {
      position: fixed;
      /* top: 20px; */
      left: 50%;
      transform: translateX(-50%);
      z-index: 1000;
      background: rgba(255, 255, 255, 0.15); 
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 0 0 20px 20px;
      padding: 5px 20px 5px 20px;
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
    }

    .navbar:hover {
      background: rgba(255, 255, 255, 0.25); 
      box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
    }

    .navbar-nav {
      display: flex;
      align-items: center;
      gap: 40px;
      list-style: none;
      margin: 0;
      padding: 0;
      margin-top: -20px;
    }

    .navbar-nav .nav-link {
      /* font-weight: 500; */
      margin: 0;
      text-decoration: none;
      display: flex;
      flex-direction: row;
      text-decoration: none;
      font-size: 14px;
      transition: all 0.3s ease;
      position: relative;
      margin-top: 18px;
    }

    .navbar-nav .nav-link:hover {
      color: #AA603F;
      transition: all .5s;
      /* font-weight: bold; */
    }

    .nav-link .active {
      font-weight: 600;
      color: #000000;
    }

    .nav-link.active::after {
      content: '';
      position: absolute;
      bottom: -8px;
      left: 50%;
      transform: translateX(-50%);
      width: 6px;
      height: 6px;
      background: #8B4513;
      border-radius: 50%;
    }

    .btn-connecter {
      /* background: linear-gradient(135deg, #CD853F 0%, #8B4513 100%) ; */
      color: white;
      border-radius: 10px ;
      padding: 5px 35px;
      font-weight: 600;
      font-size: 14px;
      cursor: pointer;
      transition: all 0.3s ease ;
      text-decoration: none ;
      display: inline-block;
      background: #AA603F;
      /* box-shadow: 0 4px 15px rgba(139, 69, 19, 0.3); */
      border: none ;
    }

    .btn-connecter:hover{
      background: white;
      color: #AA603F;
    }
    
    .btn-hangataka{
      background: #f9cc67;
      color: #682e1a;
      font-weight: bold;
      margin-top: 2vw;
      padding: 1vw;
      border-radius: 15px;
      border: none;
    }
    .btn-hangataka:hover{
      background: #ffffffff;
      transition: all .3s;
    }
    .haka{
      z-index: 2;
    }
    .haka:hover{
      transition: all .2s;
      font-size: 1.1em;
      font-weight: bold;
      text-decoration: none;
      color: whitesmoke
    }
    .btn-connecter:hover {
      background-color: white;
      color: #AA603F;
    }
    
    /* Section principale */
    .conteneur-principal {
      background-image: url("../../dist/img/bgFkt.png");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
      width: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 100px;
      position: relative;
    }

    .conteneur-principal::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.05);
      pointer-events: none;
    }

    /* Description et bouton */
    .description {
      font-size:14px;
      max-width: 600px;
      line-height: 1.7;
      margin-left: auto;
      margin-top: 80px;
      margin-right: 50px;
      text-align: left;
      animation: fadeInUp 0.8s ease forwards;
      animation-delay: 0.2s;
      opacity: 0;
      color: rgba(0, 0, 0, 0.8);
      font-weight: 400;
      letter-spacing: 0.5px;
      position: relative;
      z-index: 2;
    }

    .btn-decouvrir {
      display: inline-block;
      background: #FFFFFF26;
      backdrop-filter: blur(10px);
      color: #2e2c2cff;
      padding: 10px 20px;
      border-radius: 23px;
      margin-left: auto;
      margin-right: 50px;
      margin-top: 20px;
      font-size: 0.8rem;
      font-weight: 600;
      border: 1px solid rgba(255, 255, 255, 0.3);
      cursor: pointer;
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      animation: fadeInUp 0.8s ease forwards;
      animation-delay: 0.4s;
      opacity: 0;
      position: relative;
      z-index: 2;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .btn-decouvrir:hover {
      transform: translateY(-3px);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
      background: #8B4513;
      color: white;
      border-color: #8B4513;
    }

    /* Animation */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /*tester le scroll */
    .section-service .images {
      /* height: 100vh; */
      background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
      display: flex;
      justify-content: center;
      /* align-items: center; */
      font-size: 1rem;
      color: #495057;
      font-weight: 300;
    }

    .img0{
      padding: 45px 30px;
      position: relative;
      background-repeat: no-repeat;
      /* background-size: cover;
      background-position: center; */
      color: white;
      width: 33vw;
      height: 27vw;
    }
    .img0 span{
      color: #f9cc67
    }
    .haka{
      position: absolute;
      bottom: 0;
      right: 0;
      text-decoration: none;
      color: white;
      margin: 0 40px 40px 0;
    }
    .img0 p{
      font-size: 0.9rem;
    }
    .img1 {
      background: linear-gradient(to bottom right, rgba(0, 0, 0, 0.9), rgba(255, 255, 255, 0)),
                  url('../../dist/img/residence.jpeg');
      background-size: cover;
      background-position: center;
    }
    .img2{
      background: linear-gradient(to bottom right, rgba(0, 0, 0, 0.9), rgba(255, 255, 255, 0)),
                  url('../../dist/img/demenage.jpeg');
      background-size: cover;
      background-position: center;
    }
    .img3{
      background: linear-gradient(to bottom right, rgba(0, 0, 0, 0.92), rgba(255, 255, 255, 0)),
                  url('../../dist/img/deces.jpeg');
      background-size: cover;
      background-position: center;
    }

    .cert-vie{
      display: flex;
      justify-content: end;
      align-items: center;
      background-color: #682e1a;
      width: 100vw;
      height: 30vw;
    }

    .cert-vie h3{
      font-size: 3.2rem;
    }

    .cert-vie p{
      font-size: 1rem;
    }

    .img0 .div1{
      position: absolute;
      right: 15vw;
      width: 80vw;
      bottom: 6vw;
      display: flex;
      flex-direction: column;
      align-items: start;
    }
    .img0 .olombelona{
      /* background-color: black; */
      height: 60vw;
      /* position: absolute; */
    }

    .olombelona img{
      width: 70vw;
    }

    /* Styles pour le footer */
    .footer {
      background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
      color: white;
      padding: 60px 0 30px 0;
      position: relative;
      overflow: hidden;
    }

    .footer::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 1px;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
    }

    .footer-content {
      display: grid !important;
      grid-template-columns: 2fr 1fr 1fr 1.5fr;
      gap: 40px;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
      width: 100%;
    }

    .footer-section {
      min-width: 0;
      width: 100%;
    }

    .footer-section h3 {
      color: #CD853F;
      font-size: 1.3rem;
      margin-bottom: 20px;
      font-weight: 600;
      position: relative;
    }

    .footer-section h3::after {
      content: '';
      position: absolute;
      bottom: -8px;
      left: 0;
      width: 40px;
      height: 2px;
      background: #8B4513;
      border-radius: 2px;
    }

    .footer-description {
      font-size: 1rem;
      line-height: 1.6;
      color: rgba(255, 255, 255, 0.8);
      margin-bottom: 25px;
    }

    .footer-links {
      list-style: none;
      padding: 0;
    }

    .footer-links li {
      margin-bottom: 12px;
    }

    .footer-links a {
      color: rgba(255, 255, 255, 0.7);
      text-decoration: none;
      font-size: 0.95rem;
      transition: all 0.3s ease;
      position: relative;
      padding-left: 15px;
    }

    .footer-links a::before {
      content: '▶';
      position: absolute;
      left: 0;
      color: #CD853F;
      font-size: 0.7rem;
      transition: all 0.3s ease;
    }

    .footer-links a:hover {
      color: #CD853F;
      transform: translateX(5px);
    }

    .footer-links a:hover::before {
      color: #8B4513;
    }

    .footer-contact-info {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .footer-bottom {
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      margin-top: 40px;
      padding-top: 25px;
      text-align: center;
      color: rgba(255, 255, 255, 0.6);
      font-size: 0.9rem;
    }

    .footer-bottom p {
      margin: 0;
    }

    .desactive{
      color: black;
    }

    .seDeconnecter{
      position: absolute;
      z-index: 2;
      font-weight: bold;
      top: 0.5vw;
      right: 5vw;
      text-decoration: none;
      color: white;
      background: #AA603F;
      padding: 5px;
      border-radius: 5px;
    }
    .seDeconnecter:hover{
      color:#AA603F;
      background: white;
      transition: all .5s;
    }
  </style>
</head>

<body>
  <!-- Navigation -->
  <a href="<?= site_url('deconnexion') ?>" style="<?= $estConnecte ? "display:flex;" : "display:none;" ?>" class="seDeconnecter">Hivoaka</a>

  <div class="navbar navbar-expand-lg">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link desactive" href="#" onclick="scrollToSection('accueil')">Fandraisana</a>
      </li>
       <li class="nav-item">
        <a class="nav-link desactive" href="#idfoot">Samihafa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link desactive" href="#" onclick="scrollToSection('service')">Tolotra</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn-connecter" href="seconnecter">Hiditra</a>
      </li>
    </ul>
  </div>
  

  <!-- Section principale -->
  <div class="conteneur-principal" id="accueil">
    <p class="description">
      Tongasoa! <br>
      <span>Hanala ny fahasahiranana, hitsitsy ny fotoana ary<br>hanafaingana ny asa atao eny amin'ny fokontany</span>
    </p>
    <button class="btn-decouvrir" onclick="scrollToSection('service')">Hitsidika</button>
  </div>

  <!-- Section service -->
  <div class="section-service" id="service">
    <div class="images">
      <div class="img0 img1">
        <h3>Taratasy <br><span>Fanamarinam-ponenana</span></h3>
        <p>Antontan-taratasy ofisialy manamarina ny toera-ponenanao .</p>
        <a <?= $estConnecte ? 'href="residence"' : 'href="seconnecter"' ?> class="haka">Hangataka></a>
      </div>
      <div class="img0 img2">
        <h3>Taratasy <br><span>Fifindra-monina</span></h3>
        <p>Antontan-taratasy ofisialy manamarina ny fiàlanao amin'ny trano fonenanao.</p>
        <a <?= $estConnecte ? 'href="/formulaire_demenagement"' : 'href="seconnecter"' ?> class="haka">Hangataka></a>
      </div>
      <dv class="img0 img3">
        <h3>Taratasy <br><span>Fanamarinam-pahafatesana</span></h3>
        <p>Antontan-taratasy manamarina amin'ny fomba ofisialy ny fahafatesan'ny olona iray 
           ary mamaritra ny antony.</p>
        <a <?= $estConnecte ? 'href="/formulaire_deces"' : 'href="seconnecter"' ?> class="haka">Hangataka></a>
      </div>
    </div>
    <div class="img0 cert-vie">
      <div class="div1">
        <h3>Misy ihany koa<br>ny <span>Fanamarinam-pahavelomana</span></h3>
        <p>Antontan-taratasy manamarina ny fahavelomana anaty fotoana iray.</p>
        <a <?= $estConnecte ? 'href="formulaire_vie"' : 'href="seconnecter"' ?> class="btn-connecter">Hangataka</a>
      </div>
      <div class="olombelona">
        <img src="../../dist/img/olombelona.png" alt="">
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer" id="idFoot">
    <div class="footer-content">
      <!-- Section À propos -->
      <div class="footer-section">
        <h3>FOKONTANY</h3>
        <p class="footer-description">
          Manamora ny fidirana amin'ny tolotra ara-pitantanan'ny Fokontany ny sehatra nomerika.
          Hanatsotra ny fomba fiasa ary hampahafantarana anao ny vaovao farany ao amin'ny vondrom-piarahamonina misy anao.
        </p>
        <div class="social-links">
          <a href="#" class="social-link" title="Facebook">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="social-link" title="Twitter">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="social-link" title="Instagram">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#" class="social-link" title="LinkedIn">
            <i class="fab fa-linkedin-in"></i>
          </a>
        </div>
      </div>

      <!-- Liens rapides -->
      <div class="footer-section" id="idfoot">
        <h3>Rohy haingana</h3>
        <ul class="footer-links">
          <li><a href="#" onclick="scrollToSection('accueil')">Fandraisana</a></li>
          <li><a href="#" onclick="scrollToSection('service')">Tolotra</a></li>
          <!-- <li><a href="enregistrement">Hanoratra anarana ao amin'ny fokontany</a></li> -->
          <li><a href="seconnecter">Hiditra</a></li>
        </ul>
      </div>

      <!-- Services -->
      <div class="footer-section">
        <h3>Ireo tolotra</h3>
        <ul class="footer-links">
          <li><a <?= $estConnecte ? 'href="residence"' : 'href="seconnecter"' ?>>Fanamarinam-ponenana</a></li>
          <li><a <?= $estConnecte ? 'href="certificat_vie"' : 'href="seconnecter"' ?>>Fanamarinam-pahavelomana</a></li>
          <li><a <?= $estConnecte ? 'href="certificat_deces"' : 'href="seconnecter"' ?>>Fanamarinam-pahafatesana</a></li>
          <li><a href="#">Taratasy fifindra-monina</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="footer-section">
        <h3>Laharan'antso sy serasera</h3>
        <div class="footer-contact-info">
          <div class="contact-item">
      
            <span>Antananarivo, Madagasikara</span>
          </div>
          <div class="contact-item">
        
            <span>+261 34 00 000 00</span>
          </div>
          <div class="contact-item">
           
            <span>@fokontany.mg</span>
          </div>
          <div class="contact-item">
          
            <span>Alatsinainy - Zoma: 08 ora maraina - 5 ora hariva</span>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <p>&copy; 2025 FOKONTANY. Zo rehetra voatokana.</p>
    </div>
  </footer>
    
  <script>
    // Effet de navbar au scroll
    window.addEventListener('scroll', function() {
      const navbar = document.querySelector('.navbar');
      const scrollTop = window.pageYOffset;
      
      if (scrollTop > 100) {
        navbar.style.background = 'rgba(255, 255, 255, 0.95)';
        navbar.style.backdropFilter = 'blur(25px)';
      } else {
        navbar.style.background = 'rgba(255, 255, 255, 0.15)';
        navbar.style.backdropFilter = 'blur(20px)';
      }
    });

    // Fonction pour faire défiler vers une section
    function scrollToSection(sectionId) {
      const element = document.getElementById(sectionId);
      if (element) {
        element.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
        
        // Mettre à jour l'état actif du menu
        const navLinks = document.querySelectorAll('.nav-link:not(.btn-connecter)');
        navLinks.forEach(link => {
          link.classList.remove('active');
        });
        
        // Ajouter la classe active au lien correspondant
        if (sectionId === 'accueil') {
          document.querySelector('a[onclick*="accueil"]').classList.add('active');
        } else if (sectionId === 'service') {
          document.querySelector('a[onclick*="service"]').classList.add('active');
        }
      }
    }

    // Détecter la section visible pour mettre à jour le menu
    window.addEventListener('scroll', function() {
      const sections = ['accueil', 'service'];
      const navLinks = document.querySelectorAll('.nav-link:not(.btn-connecter)');
      
      let current = '';
      
      sections.forEach(sectionId => {
        const section = document.getElementById(sectionId);
        if (section) {
          const sectionTop = section.offsetTop - 100;
          const sectionHeight = section.offsetHeight;
          
          if (window.pageYOffset >= sectionTop && window.pageYOffset < sectionTop + sectionHeight) {
            current = sectionId;
          }
        }
      });
      
      navLinks.forEach(link => {
        link.classList.remove('active');
        if (current === 'accueil' && link.getAttribute('onclick')?.includes('accueil')) {
          link.classList.add('active');
        } else if (current === 'service' && link.getAttribute('onclick')?.includes('service')) {
          link.classList.add('active');
        }
      });
    });
  </script>
</body>
</html>