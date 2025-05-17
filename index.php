<!-- index.html -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Alpha Coders - Desarrollo web a medida con pasión y excelencia técnica. Transformamos ideas en soluciones digitales innovadoras." />
  <title>Alpha Coders | Desarrollo Web con Pasión</title>
  <link rel="stylesheet" href="styles.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCIgdmlld0JveD0iMCAwIDY0IDY0IiBmaWxsPSJub25lIj4KICA8Y2lyY2xlIGN4PSIzMiIgY3k9IjMyIiByPSIzMiIgZmlsbD0iI2ZmNjI5NSIvPgogIDxwYXRoIGQ9Ik0xNSAzMkwzMCAxOEw0NSAzMkwzMCA0NloiIGZpbGw9IndoaXRlIi8+CiAgPHBhdGggZD0iTTM0IDMyTDQ5IDE4TDYxIDMyTDQ5IDQ2WiIgZmlsbD0id2hpdGUiLz4KPC9zdmc+">
</head>
<body>
  <header id="navbar">
    <div class="container">
      <div class="nav-wrapper">
        <h1><a href="index.html" class="logo-link"><span class="logo-highlight">Alpha</span>Coders</a></h1>
        <button class="menu-toggle" aria-label="Abrir menú">
          <span class="hamburger"></span>
        </button>
        <nav class="main-nav">
          <ul>
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#sobre">Nosotros</a></li>
            <li><a href="#servicios">Servicios</a></li>
            <li><a href="#portafolio">Proyectos</a></li>
            <li><a href="#contacto" class="nav-cta">Contacto</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <main>
    <section id="inicio" class="animate">
      <div class="container">
        <div class="hero-content">
          <div class="hero-text">
            <h2 class="animate animate-delay-1">Tu sueño. <span class="text-gradient">Nuestro código.</span></h2>
            <p class="animate animate-delay-2">En el cielo de las ideas, <strong>Alpha Coders</strong> es una estrella naciente. 
              Brilla para los que creen que aún lo invisible puede cambiar el mundo.</p>
            <div class="cta-buttons animate animate-delay-3">
              <a href="#servicios" class="btn btn-primary">Descubre nuestros servicios</a>
              <a href="#contacto" class="btn btn-secondary">Contáctanos</a>
            </div>
          </div>
          <div class="hero-image animate animate-delay-2">
            <div class="blob-shape">
              <img src="https://images.unsplash.com/photo-1581472723648-909f4851d4ae?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Desarrollo web moderno">
            </div>
          </div>
        </div>
        
      </div>
    </section>

    <section id="sobre" class="animate">
      <div class="container">
        <h2>Sobre Alpha Coders</h2>
        <div class="sobre-content">
          <div class="sobre-text">
            <p>
              Nacimos de un sueño. Uno que duele, pero también ilumina.  
              Porque creemos que detrás de cada buena idea hay una historia que merece ser contada... y codificada.
            </p>
            <p>
              Fundado por una mente curiosa, sensible y con hambre de construir algo que valga la pena.
            </p>
            <p>
              En Alpha Coders no solo creamos código. Creamos experiencias digitales que transforman ideas en realidad
              y conectan a las personas con soluciones innovadoras.
            </p>
            <a href="#contacto" class="btn btn-primary mt-20">Hablemos de tu proyecto</a>
          </div>
          <div class="stats-container">
            <div class="stat-item">
              <span class="stat-number">100%</span>
              <span class="stat-text">Satisfacción</span>
            </div>
            <div class="stat-item">
              <span class="stat-number">24/7</span>
              <span class="stat-text">Soporte</span>
            </div>
            <div class="stat-item">
              <span class="stat-number">+50</span>
              <span class="stat-text">Proyectos</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="servicios" class="animate">
      <div class="container">
        <h2>¿Qué hacemos?</h2>
        <p>Ofrecemos soluciones digitales a medida para emprendedores, startups y empresas que buscan destacar en el mundo digital.</p>
        <ul class="lista-limpia servicios-grid">
          <li>
            <i class="fas fa-code service-icon"></i>
            <h3>Desarrollo web a medida</h3>
            <p>Creamos sitios web únicos que se adaptan a tus necesidades específicas y objetivos de negocio.</p>
          </li>
          <li>
            <i class="fas fa-paint-brush service-icon"></i>
            <h3>Diseño responsivo y con alma</h3>
            <p>Diseños que no solo son hermosos, sino que también convierten visitantes en clientes.</p>
          </li>
          <li>
            <i class="fas fa-tools service-icon"></i>
            <h3>Soporte técnico para emprendedores</h3>
            <p>Te acompañamos en cada paso del camino, resolviendo problemas y optimizando tu presencia online.</p>
          </li>
          <li>
            <i class="fas fa-book service-icon"></i>
            <h3>Mentoría para nuevos programadores</h3>
            <p>Compartimos nuestro conocimiento y experiencia para ayudarte a crecer como desarrollador.</p>
          </li>
        </ul>
      </div>
    </section>

    <section id="valores" class="animate">
      <div class="container">
        <h2>Nuestros Valores</h2>
        <p>Estos principios guían nuestro trabajo día a día y definen quiénes somos.</p>
        <ul class="lista-limpia valores-grid">
          <li>
            <i class="fas fa-lightbulb valor-icon"></i>
            <h3>Innovación constante</h3>
            <p>Buscamos siempre nuevas formas de resolver problemas y mejorar nuestras soluciones.</p>
          </li>
          <li>
            <i class="fas fa-users valor-icon"></i>
            <h3>Trabajo en equipo</h3>
            <p>Creemos en el poder de la colaboración para lograr resultados excepcionales.</p>
          </li>
          <li>
            <i class="fas fa-globe valor-icon"></i>
            <h3>Responsabilidad social</h3>
            <p>Nos comprometemos a crear tecnología que tenga un impacto positivo en la sociedad.</p>
          </li>
          <li>
            <i class="fas fa-heart valor-icon"></i>
            <h3>Pasión por lo que hacemos</h3>
            <p>Amamos nuestro trabajo y eso se refleja en cada proyecto que realizamos.</p>
          </li>
        </ul>
      </div>
    </section>

    <section id="metodologia" class="animate">
      <div class="container">
        <h2>Nuestra Metodología</h2>
        <div class="metodo-proceso">
          <div class="proceso-item">
            <div class="proceso-numero">1</div>
            <h3>Descubrimiento</h3>
            <p>Entendemos tu negocio, tus objetivos y tu audiencia.</p>
          </div>
          <div class="proceso-item">
            <div class="proceso-numero">2</div>
            <h3>Planificación</h3>
            <p>Definimos la estrategia y creamos un plan de acción claro.</p>
          </div>
          <div class="proceso-item">
            <div class="proceso-numero">3</div>
            <h3>Diseño y Desarrollo</h3>
            <p>Transformamos las ideas en realidad con código limpio y eficiente.</p>
          </div>
          <div class="proceso-item">
            <div class="proceso-numero">4</div>
            <h3>Lanzamiento y Soporte</h3>
            <p>Te acompañamos después del lanzamiento para asegurar el éxito continuo.</p>
          </div>
        </div>
        <p>Trabajamos con metodologías ágiles, porque sabemos que el mundo cambia rápido y nosotros también.
          Nos adaptamos a tus necesidades y te acompañamos en cada paso del camino.</p>
        <p>Desde la planificación hasta la entrega, cada línea de código es un paso hacia tu sueño.</p>
      </div>
    </section>

    <section id="portafolio" class="animate">
      <div class="container">
        <h2>Proyectos</h2>
        <p>Estamos en construcción, como todo lo que vale la pena.
          Mientras tanto, te mostramos lo que ya vamos creando:</p>

        <div class="proyectos-grid">
          <div class="proyecto-card">
            <div class="proyecto-imagen">
              <i class="fas fa-shield-alt"></i>
            </div>
            <div class="proyecto-info">
              <h3>CryptoGuard</h3>
              <p>Plataforma de seguridad para criptomonedas con protección avanzada y monitoreo en tiempo real.</p>
              <a href="https://github.com/juanitalorenaherrera/CryptoGuard-main" class="btn-proyecto">Ver detalles</a>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section id="contacto" class="animate">
      <div class="container">
        <h2><i class="fas fa-phone-alt"></i> Contacto</h2>
        <p>¿Hablamos?</p>
        <p>Si tenés una idea, un sueño o un proyecto que necesita código y corazón, estás en el lugar correcto</p>

        <div class="contacto-contenido">
          <form id="contactForm" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>

            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" placeholder="Tu email" required>
            
            <label for="telefono">Teléfono (opcional)</label>
            <input type="tel" id="telefono" name="telefono" placeholder="Tu número de teléfono">

            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje" name="mensaje" rows="5" placeholder="¿Cómo podemos ayudarte?" required></textarea>

            <div id="mensajeRespuesta" class="mensaje-respuesta"></div>
            <button type="submit"><i class="fas fa-paper-plane"></i> Enviar mensaje</button>
          </form>

          <div class="contacto-info">
            <div class="datos-contacto">
              <h3>Información de contacto</h3>
              <p><i class="fas fa-envelope"></i> juanitaherrera846@gmail.com</p>
              <p><i class="fas fa-envelope"></i> guarinromerojuandavid@gmail.com</p>
              <p><i class="fab fa-whatsapp"></i> <a href="https://api.whatsapp.com/send/?phone=%2B573213061122&text&type=phone_number&app_absent=0" target="_blank">WhatsApp de Juanita</a></p>
            </div>

            <div class="redes">
              <h3>Redes sociales</h3>
              <p><i class="fab fa-github"></i> <a href="https://github.com/juanitalorenaherrera" target="_blank">GitHub Juanita</a></p>
              <p><i class="fab fa-github"></i> <a href="https://github.com/teka369" target="_blank">GitHub Guarin</a></p>
              <p><i class="fab fa-linkedin"></i> <a href="https://www.linkedin.com/in/juanita-herrera-329064277/" target="_blank">LinkedIn de Juanita</a></p>
            </div>
            
            <div class="mapa">
              <h3>Nuestra ubicación</h3>
              <div class="mapa-contenedor">
                <iframe 
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.7892!2d-74.1234!3d4.5678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNMKwMzQnMDQuMSJOIDc0wrAwNycyNC4zIlc!5e0!3m2!1ses!2sco!4v1234567890"
                  width="100%" 
                  height="300" 
                  style="border:0;" 
                  allowfullscreen="" 
                  loading="lazy" 
                  referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <div class="mapa-info">
                  <a href="https://goo.gl/maps/6Dz7HPxGYt2J1SVAA" target="_blank" class="btn btn-mapa">
                    <i class="fas fa-map-marker-alt"></i> Ver en Google Maps
                  </a>
                  <p><i class="fas fa-map-pin"></i> Puente Aranda, Bogotá, Colombia</p>
                  <p><i class="fas fa-clock"></i> Horario de atención: Lunes a Viernes 9:00 AM - 6:00 PM</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer style="background-color: #333333; padding: 4rem 0 2rem; color: #ffffff; margin-top: 4rem; position: relative;">
    <div class="container">
      <div style="display: flex; flex-wrap: wrap; justify-content: space-between; margin-bottom: 2rem;">
        <div style="flex: 1; min-width: 240px; margin-bottom: 2rem; padding-right: 2rem;">
          <h3><span style="color: #ff6b95;">Alpha</span>Coders</h3>
          <p style="opacity: 0.8; margin-bottom: 1rem; font-size: 0.95rem; line-height: 1.5;">Transformamos ideas en soluciones digitales innovadoras con pasión y excelencia técnica.</p>
          <p style="font-weight: 600; margin: 1rem 0;">Tu sueño. Nuestro código. <span style="color: #ff6b95;">❤</span></p>
          <div style="margin-top: 1.2rem;">
            <p style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.8rem;"><i style="color: #ff6b95;" class="fas fa-envelope"></i> juanitaherrera846@gmail.com</p>
            <p style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.8rem;"><i style="color: #ff6b95;" class="fas fa-envelope"></i> guarinromerojuandavid@gmail.com</p>
          </div>
        </div>
        
        <div style="flex: 1; min-width: 240px; margin-bottom: 2rem; padding-right: 2rem;">
          <h4 style="color: #ffbfd1; margin-bottom: 1.2rem; font-size: 1.2rem; position: relative; display: inline-block; padding-bottom: 0.5rem;">Navegación</h4>
          <ul style="list-style: none; padding: 0; margin: 0;">
            <li style="margin-bottom: 0.8rem; display: flex; align-items: center;"><a style="color: #ffffff; text-decoration: none; display: flex; align-items: center; gap: 0.5rem;" href="#inicio"><i style="color: #ffbfd1; min-width: 20px;" class="fas fa-home"></i> Inicio</a></li>
            <li style="margin-bottom: 0.8rem; display: flex; align-items: center;"><a style="color: #ffffff; text-decoration: none; display: flex; align-items: center; gap: 0.5rem;" href="#sobre"><i style="color: #ffbfd1; min-width: 20px;" class="fas fa-users"></i> Nosotros</a></li>
            <li style="margin-bottom: 0.8rem; display: flex; align-items: center;"><a style="color: #ffffff; text-decoration: none; display: flex; align-items: center; gap: 0.5rem;" href="#servicios"><i style="color: #ffbfd1; min-width: 20px;" class="fas fa-code"></i> Servicios</a></li>
            <li style="margin-bottom: 0.8rem; display: flex; align-items: center;"><a style="color: #ffffff; text-decoration: none; display: flex; align-items: center; gap: 0.5rem;" href="#portafolio"><i style="color: #ffbfd1; min-width: 20px;" class="fas fa-laptop-code"></i> Proyectos</a></li>
            <li style="margin-bottom: 0.8rem; display: flex; align-items: center;"><a style="color: #ffffff; text-decoration: none; display: flex; align-items: center; gap: 0.5rem;" href="#contacto"><i style="color: #ffbfd1; min-width: 20px;" class="fas fa-envelope"></i> Contacto</a></li>
          </ul>
        </div>
        
        <div style="flex: 1; min-width: 240px; margin-bottom: 2rem; padding-right: 2rem;">
          <h4 style="color: #ffbfd1; margin-bottom: 1.2rem; font-size: 1.2rem; position: relative; display: inline-block; padding-bottom: 0.5rem;">Nuestros Servicios</h4>
          <ul style="list-style: none; padding: 0; margin: 0;">
            <li style="margin-bottom: 0.8rem; display: flex; align-items: center;"><i style="color: #ffbfd1; min-width: 20px;" class="fas fa-check"></i> Desarrollo web a medida</li>
            <li style="margin-bottom: 0.8rem; display: flex; align-items: center;"><i style="color: #ffbfd1; min-width: 20px;" class="fas fa-check"></i> Diseño responsivo</li>
            <li style="margin-bottom: 0.8rem; display: flex; align-items: center;"><i style="color: #ffbfd1; min-width: 20px;" class="fas fa-check"></i> Soporte técnico</li>
            <li style="margin-bottom: 0.8rem; display: flex; align-items: center;"><i style="color: #ffbfd1; min-width: 20px;" class="fas fa-check"></i> Mentoría para programadores</li>
            <li style="margin-bottom: 0.8rem; display: flex; align-items: center;"><i style="color: #ffbfd1; min-width: 20px;" class="fas fa-check"></i> Consultoría tecnológica</li>
          </ul>
        </div>
        
        <div style="flex: 1; min-width: 240px; margin-bottom: 2rem;">
          <h4 style="color: #ffbfd1; margin-bottom: 1.2rem; font-size: 1.2rem; position: relative; display: inline-block; padding-bottom: 0.5rem;">Síguenos</h4>
          <div style="display: flex; flex-wrap: wrap; gap: 1rem;">
            <a style="display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; background-color: rgba(255, 255, 255, 0.1); border-radius: 50%; color: #ffffff;" href="https://github.com/juanitalorenaherrera" target="_blank" title="GitHub de Juanita">
              <i class="fab fa-github"></i>
            </a>
            <a style="display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; background-color: rgba(255, 255, 255, 0.1); border-radius: 50%; color: #ffffff;" href="https://github.com/teka369" target="_blank" title="GitHub de Guarin">
              <i class="fab fa-github"></i>
            </a>
            <a style="display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; background-color: rgba(255, 255, 255, 0.1); border-radius: 50%; color: #ffffff;" href="https://www.linkedin.com/in/juanita-herrera-329064277/" target="_blank" title="LinkedIn de Juanita">
              <i class="fab fa-linkedin"></i>
            </a>
            <a style="display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; background-color: rgba(255, 255, 255, 0.1); border-radius: 50%; color: #ffffff;" href="https://api.whatsapp.com/send/?phone=%2B573213061122&text&type=phone_number&app_absent=0" target="_blank" title="WhatsApp de Juanita">
              <i class="fab fa-whatsapp"></i>
            </a>
          </div>
        </div>
      </div>
      
      <div style="height: 1px; background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.2), transparent); margin: 2rem 0;"></div>
      <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; padding-top: 1.5rem; border-top: 1px solid rgba(255, 255, 255, 0.1); gap: 1rem;">
        <p style="font-size: 0.9rem; opacity: 0.7;">&copy; 2025 Alpha Coders. Con <i style="color: #ff6b95;" class="fas fa-heart"></i> y código desde el corazón.</p>
      </div>
    </div>
    
    <div style="position: fixed; bottom: 20px; right: 20px; width: 45px; height: 45px; background-color: #ff6b95; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2); cursor: pointer; z-index: 999;">
      <a style="color: #ffffff; font-size: 1.2rem;" href="#inicio" title="Volver arriba">
        <i class="fas fa-arrow-up"></i>
      </a>
    </div>
  </footer>

  <script>
    // Script para el navbar con efecto de desplazamiento
    window.addEventListener('scroll', function() {
      const navbar = document.getElementById('navbar');
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });

    // Script para el menú hamburguesa
    document.addEventListener('DOMContentLoaded', function() {
      const menuToggle = document.querySelector('.menu-toggle');
      const mainNav = document.querySelector('.main-nav');
      
      menuToggle.addEventListener('click', function() {
        mainNav.classList.toggle('active');
        menuToggle.classList.toggle('active');
      });
      
      // Cerrar menú al hacer clic en un enlace
      const navLinks = document.querySelectorAll('.main-nav a');
      navLinks.forEach(link => {
        link.addEventListener('click', function() {
          mainNav.classList.remove('active');
          menuToggle.classList.remove('active');
        });
      });
      
      // Script para animaciones al hacer scroll
      const elements = document.querySelectorAll('.animate');
      
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
          }
        });
      }, { threshold: 0.1 });
      
      elements.forEach(element => {
        observer.observe(element);
      });
      
      // Procesar el formulario de contacto con AJAX
      const contactForm = document.getElementById('contactForm');
      const mensajeRespuesta = document.getElementById('mensajeRespuesta');
      
      contactForm.addEventListener('submit', function(event) {
        event.preventDefault();
        
        // Mostrar indicador de carga
        mensajeRespuesta.innerHTML = '<p class="enviando">Enviando mensaje...</p>';
        mensajeRespuesta.style.display = 'block';
        
        // Obtener los datos del formulario
        const formData = new FormData(contactForm);
        
        // Enviar solicitud AJAX
        fetch('backend/procesar_contacto.php', {
          method: 'POST',
          body: formData
        })
        .then(response => response.json())
        .then(data => {
          // Mostrar mensaje de respuesta
          const messageClass = data.success ? 'exito' : 'error';
          mensajeRespuesta.innerHTML = `<p class="${messageClass}">${data.message}</p>`;
          
          // Si es exitoso, resetear el formulario
          if (data.success) {
            contactForm.reset();
          }
        })
        .catch(error => {
          mensajeRespuesta.innerHTML = '<p class="error">Ocurrió un error al enviar el mensaje. Por favor, intenta nuevamente.</p>';
          console.error('Error:', error);
        });
      });
      
      // Botón de volver arriba
      const scrollTopButton = document.querySelector('.scroll-top a');
      
      scrollTopButton.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
      });
      
      // Mostrar/ocultar botón de volver arriba
      window.addEventListener('scroll', function() {
        const scrollTop = document.querySelector('.scroll-top');
        if (window.scrollY > 300) {
          scrollTop.classList.add('visible');
        } else {
          scrollTop.classList.remove('visible');
        }
      });
    });
  </script>
</body>
</html>
