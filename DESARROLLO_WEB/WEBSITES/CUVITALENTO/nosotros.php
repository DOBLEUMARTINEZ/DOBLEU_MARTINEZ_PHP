<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Empresa dedicada en brindar soluciones y servicios de recursos humanos, consultoría administrativa, contable y de marketing">
  <meta name="author" content="Dobleu Martinez">
  <meta name="theme-color" content="#111">

    
  <title>CUVITALENTO | Nosotros </title>

  <link href="images/logo/icon.png" rel="shortcut icon"/>

  <link rel="manifest" href="https://atsonline.com.mx/images/logo/icon.png">
  <link rel="icon" type="images/logo/icon.png" sizes="32x32" href="https://atsonline.com.mx/images/logo/icon.png">
  <link rel="icon" type="images/logo/icon.png" sizes="16x16" href="https://atsonline.com.mx/images/logo/icon.png">


  <link rel="stylesheet" href="css/styles.css"/>
  <link rel="stylesheet" href="css/main.css"/>

  <!-- icons CDN -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

  <!--jquery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>


<body>

  <?php include("php/head.php");?>

  <?php //include("php/slide.php");?> 

  <?php include("php/slide-nosotros.php");?>  


  <section py="5" class="body-back">

    <article>

      <!-- CONTAINER -US -->
      <div  class="container">
        <div class="container-us">

          <div class="row no-gutters">
            
            <div class="col-md-6" style="margin: auto;">
              <h2>
                ¿Quiénes somos?
              </h2>
              <p>
                Somos una empresa dedicada en brindar soluciones y servicios de recursos humanos, consultoría administrativa, contable y de marketing; proporcionando las herramientas y personal de confianza necesarios a nuestros clientes.<br>
                <button data-toggle="modal" data-target="#modal-1" class="cta-02">Contáctanos</button>
              </p>

            </div>

            <div class="col-md-6 desktop">
              <img class="w-img-s1 img-fluid desktop" src="./images/img/nosotros-02.jpg" title="ats" alt="ats">
            </div> 

            <div class="col-md-6 mobil">
              <img class="w-img-s1 img-fluid mobil" src="./images/img/nosotros-02.jpg" title="ats" alt="ats">
            </div> 

          </div>

          <br><br>

          <div class="row no-gutters">
            
            <div class="col-md-6" style="margin: auto;">
              <h2>
                Misión
              </h2>
              <p>
                Somos una empresa dedicada en brindar soluciones y servicios de recursos humanos, consultoría administrativa, contable y de marketing; proporcionando las herramientas y personal de confianza necesarios a nuestros clientes.
              </p>

            </div>

            <div class="col-md-6" style="margin: auto;">
              <h2>
                Visión
              </h2>
              <p>
                Ser una empresa reconocida por su calidad y rapidez con la que responde a sus clientes de la misma forma en la que brindamos a nuestros colaboradores un lugar agradable, sano, con sentido de pertenencia, permitiéndoles desarrollar sus habilidades y su crecimiento laboral. 
              </p>

            </div>

             <div class="col-md-12" style="margin: auto;">
              <br><br>
              <h2>
                Valores
              </h2>
              <p>
                Honestidad - Respeto - Equidad - Inclusión - Responsabilidad
              </p>

            </div>

          </div>

        </div>
      </div>

       <br><br>

      <!-- contacto  -->
      <div class="container-contact">
            <div class="row no-gutters">
              <div class="col-md-7" style="background: #111;">
                <h3>¿Necesitas información de nuestros servicios?</h3>
                <form method="POST" action="./send.php">
                  <label>Nombre *</label>
                  <input type="text" name="name" placeholder="Nombre y Apellidos" required="required"><br>
                  <label>Teléfono *</label>

                  <div style="display: grid; grid-template-rows: 100%;margin: 4% 0%;">
     
                  <input type="tel" name="phone" placeholder=" 55 5555 5555" required="required" pattern="[0-9]{10}" style="margin: 0;">   

                  </div>

                  <label>Correo *</label>
                  <input type="text" name="email" placeholder="ejemplo@gmail.com" required="required">
                  
                  <label>Escribenos tu mensaje</label>
                  <textarea style="margin-top: 15px;" name="msg" placeholder="Escribe tu mensaje..." required="required"></textarea> <br>

                  <center><button name="action" value="new_contact">Enviar</button></center>
                </form>           
              </div>
              <div class="col-md-5">

                <iframe class="desktop"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.0468818559907!2d-99.14956882080214!3d19.410380250765964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff2035e03071%3A0x55fa4d0e920a6aa2!2sPanam%C3%A1%2017-int%20b201!5e0!3m2!1ses-419!2smx!4v1644794278640!5m2!1ses-419!2smx" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

              <div class="container-end">
                <ul>
                  <li  onclick="window.location.href='tel:5546490418';"><i  id="rotate" class="fas fa-phone"></i> 55 4649 0418 </li>
                  <li onclick="window.location.href='mailto:contacto@cuvitalento.com';"><i class="fas fa-envelope" ></i> contacto@cuvitalento.com</li>

                  <li onclick="window.location.href='https://goo.gl/maps/f6hTZf6ZRiv6o1rs9';">
                    <i class="fas fa-map-marker-alt"></i>
                    Cerrada de Panamá col. Doctores, Ciudad de México, CDMX
                  </li>

                </ul>
              </div>                
              </div>
            </div>
      </div>

    </article>
  </section>

  <?php 

    include 'php/modal.php';

    include 'php/footer.php';

  ?>
  
</body>

</html>