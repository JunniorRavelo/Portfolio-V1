<?php include("includes/header.php") ?>


<!-- Seccion Hero -->
<section class="hero align-items-stretch">
  <div class="hero-principal d-flex flex-column justify-content-center align-items-center">
    <img class="hero-imagen-desarrollador rounded-circle photo-perfil" src="resources/imagenes-desarrolladores/desarrollador-ejemplo.svg" alt="Foto de Junnior Ravelo">
    <h1>Hola, soy Jr Ravelo :)</h1>
    <h2>Freelance especializado en el desarrollo de aplicaciones web y de escritorio.</h2>
  </div>
  <div class="hero-inferior">
    <img class="hero-inferior-imagen img-fluid" src="resources/hero-inferior.svg" alt="Monitor, laptop y logos de HTML, CSS, JavaScript y React.">
  </div>
</section>

<!-- Sobre mi -->
<section id="sobre-mi" class="sobre-mi seccion-oscura">
  <div class="contenedor">
    <h2 class="seccion-titulo">Acerca de Jr Ravelo</h2>
    <p class="seccion-texto">Jr Ravelo es un desarrollador de software con experiencia en el diseño y desarrollo de aplicaciones web y de escritorio. Apasionado por la creación de soluciones tecnológicas prácticas, Jr combina habilidades técnicas sólidas con creatividad para desarrollar software funcional y fácil de usar. Con conocimientos en diversas tecnologías y lenguajes de programación, se dedica a construir sistemas robustos y escalables que satisfagan las necesidades de sus clientes. Su enfoque se centra en ofrecer productos de calidad que resuelvan problemas de manera eficiente y precisa.</p>
  </div>
</section>

<!-- Experiencia -->
<section class="experiencia seccion-clara">
  <div class="container text-center">
    <div class="row">
      <!-- Desarrollo Web -->
      <div class="columna col-12 col-md-4">
        <i class="bi bi-laptop"></i>
        <p class="experiencia-titulo">Desarrollo Web</p>
        <p>Especializado en la creación de soluciones digitales de alto rendimiento, poseo experiencia en tecnologías de vanguardia. Mi enfoque se centra en proporcionar resultados técnicos excepcionales que impulsen el éxito en línea de mis clientes.</p>
        <div class="badges-contenedor">
          <span class="badge text-bg-primary">HTML</span>
          <span class="badge text-bg-primary">CSS</span>
          <span class="badge text-bg-primary">Node.js</span>
          <span class="badge text-bg-primary">PHP</span>
          <span class="badge text-bg-primary">Laravel</span>
        </div>
      </div>
      <!-- Desarrollo Desktop -->
      <div class="columna col-12 col-md-4">
        <i class="bi bi-laptop"></i>
        <p class="experiencia-titulo">Desarrollo Desktop</p>
        <p>Especializado en software robusto y eficiente, ofrezco soluciones personalizadas que impulsan la productividad y el éxito operativo de mis clientes.</p>
        <div class="badges-contenedor">
          <span class="badge text-bg-primary">Java JVM</span>
          <span class="badge text-bg-primary">C++</span>
          <span class="badge text-bg-primary">Python</span>
          <span class="badge text-bg-primary">MariaDB</span>
          <span class="badge text-bg-primary">MongoDB</span>
        </div>
      </div>
      <!-- Estudiante -->
      <div class="columna col-12 col-md-4">
        <i class="bi bi-laptop"></i>
        <p class="experiencia-titulo">Estudiante</p>
        <p>Actualmente cursando el 8vo semestre de Ingeniería de Sistemas en la Universidad de Pamplona. Busco adquirir conocimientos sólidos y habilidades prácticas para destacarme en el campo de la tecnología.</p>
        <div class="badges-contenedor">
          <span class="badge text-bg-primary">Universidad de Pamplona</span>
          <span class="badge text-bg-primary">Ing. Sistemas</span>
          <span class="badge text-bg-primary">8vo Semestre</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Proyectos -->
<section id="actividad" class="proyectos-recientes seccion-clara d-flex flex-column">
  <h2 class="seccion-titulo texto-negro">Actividad reciente</h2>
  <h3 class="seccion-descripcion">Estos son algunos proyectos y modulos que he creado y/o colaborado recientemente...</h3>

  <!-- Galeria de Proyectos -->
  <div class="container text-center proyectos-contenedor">
    <div class="row">
      <!-- Proyecto 1 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="proyecto">
          <img src="resources/proyecto1.svg" alt="Proyecto 1">
          <div class="overlay">
            <p>Lista de tareas PHP</p>
            <div class="iconos-contenedor">
              <a href="https://github.com/JunniorRavelo/phpToDo" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-github"></i>
              </a>
              <a href="https://jrravelo.site/project_phpToDo/" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-laptop"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Proyecto 2 --
          <div class="col-12 col-md-6 col-lg-4">
            <div class="proyecto">
              <img src="resources/proyecto2.svg" alt="Proyecto 1">
              <div class="overlay">
                <p>Moodle LMS</p>
                <div class="iconos-contenedor">
                  <a href="https://github.com/JunniorRavelo" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-github"></i>
                  </a>
                  <a href="" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-laptop"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Proyecto 3 --
          <div class="col-12 col-md-6 col-lg-4">
            <div class="proyecto">
              <img src="resources/proyecto3.svg" alt="Proyecto 1">
              <div class="overlay">
                <p>Node.js Puppeteer</p>
                <div class="iconos-contenedor">
                  <a href="https://github.com/JunniorRavelo" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-github"></i>
                  </a>
                  <a href="" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-laptop"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Proyecto 4 --
          <div class="col-12 col-md-6 col-lg-4">
            <div class="proyecto">
              <img src="resources/proyecto4.svg" alt="Proyecto 1">
              <div class="overlay">
                <p>Gestion de inventario JVM</p>
                <div class="iconos-contenedor">
                  <a href="https://github.com/JunniorRavelo" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-github"></i>
                  </a>
                  <a href="" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-laptop"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Proyecto 5 --
          <div class="col-12 col-md-6 col-lg-4">
            <div class="proyecto">
              <img src="resources/proyecto5.svg" alt="Proyecto 1">
              <div class="overlay">
                <p>Normalizador .wav Tensorflow</p>
                <div class="iconos-contenedor">
                  <a href="https://github.com/JunniorRavelo" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-github"></i>
                  </a>
                  <a href="" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-laptop"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Proyecto 6 --
          <div class="col-12 col-md-6 col-lg-4">
            <div class="proyecto">
              <img src="resources/proyecto6.svg" alt="Proyecto 1">
              <div class="overlay">
                <p>Automata (RPA)</p>
                <div class="iconos-contenedor">
                  <a href="https://github.com/JunniorRavelo" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-github"></i>
                  </a>
                  <a href="" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-laptop"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
-->

      <a href="https://github.com/JunniorRavelo?tab=repositories" target="_blank" rel="noopener noreferrer">
        <button type="button" class="btn btn-info">
          Ver más
          <i class="bi bi-arrow-right-circle-fill"></i>
        </button>
      </a>
</section>



<br><br><br><br>

<!-- Contacto -->
<section id="contacto" class="contacto seccion-oscura">
  <div class="container">
    <div class="container text-center rectangulo d-flex justify-content-evenly">
      <div class="row">
        <div class="col-12 col-md-4 seccion-titulo">
          ¡Hablemos!
        </div>
        <div class="col-12 col-md-4 descripcion">
          Comprometido con el aprendizaje continuo y la innovación diaria. <br>Estoy listo para colaborar en tu próximo proyecto.
        </div>
        <div class="col-12 col-md-4">
          <a href="mailto:dev.jrsantiagoravelo@gmail.com">
            <button type="button">
              Contacto
              <i class="bi bi-envelope-check-fill"></i>
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include("includes/footer.php") ?>