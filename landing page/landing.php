<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page Lenguaje de programacion 2</title>
</head>
<body>
    <header>
        <h1>Empresa</h1>
        <p>Soluciones para tus negocios</p>
    </header>

    <nav class="navbar">
        <ul>
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#servicios">Servicios</a></li>
            <li><a href="#nosotros">Nosotros</a></li>
            <li><a href="#contacto">Contacto</a></li>
        </ul>
    </nav>

    <main>
        <section id="inicio">
            <h2>Bienvenido a nuestra página</h2>
            <p>Descubrenos</p>
            
            <div class="carrusel">
                <figure>
                    <img src="images/descarga (1).jpg" alt="Imagen 1 del carrusel" width="300" height="250">
                    <figcaption>Nuestros productos</figcaption>
                </figure>
                <figure>
                    <img src="images/descarga.jpg" alt="Imagen 2 del carrusel" width="300" height="250">
                    <figcaption>Nuestro equipo</figcaption>
                </figure>
                <figure>
                    <img src="images/images.jpg" alt="Imagen 3 del carrusel" width="300" height="250">
                    <figcaption>Nuestras instalaciones</figcaption>
                </figure>
            </div>
        </section>

        <section id="servicios">
            <h2>Nuestros Servicios</h2>
            <div class="servicios-container">
                <div class="servicio">
                    <h3>Consultoría</h3>
                    <p>Pruduccion y distrubucion de alimentos</p>
                </div>
            </div>
        </section>

        <section id="contacto">
            <h2>Contáctanos</h2>
            <form>
                <div>
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div>
                    <label for="servicio">Servicio de interés:</label>
                    <select id="servicio" name="servicio">
                        <option value="consultoria">Consultoría</option>
                        <option value="desarrollo">Desarrollo</option>
                    </select>
                </div>
                
                <div>
                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
                </div>
                
                <button type="submit">Enviar mensaje</button>
            </form>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h4>Contacto</h4>
                <p>Email: empresa@gmail.com</p>
                <p>Teléfono: +58 4125249386</p>
            </div>
            
            <div class="footer-section">
                <h4>Síguenos</h4>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">X</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h4>Legal</h4>
                <ul>
                    <li><a href="#">Política de privacidad</a></li>
                    <li><a href="#">Términos y condiciones</a></li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; Empresa. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>