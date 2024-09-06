<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turismo Cusco</title>
    <link rel="stylesheet" href="{{ mix('css/home/home.css') }}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background: #333;
    color: white;
    padding: 20px 0;
    text-align: center;
}

.nav-bar ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
}

.nav-bar li {
    margin: 0 15px;
}

.nav-bar a {
    color: white;
    text-decoration: none;
    padding: 10px;
}

.nav-bar a:hover {
    text-decoration: underline;
}

.hero {
    background: url('path/to/hero-image.jpg') no-repeat center center;
    background-size: cover;
    color: white;
    text-align: center;
    padding: 100px 20px;
}

.hero-content h2 {
    font-size: 2.5em;
    margin: 0;
}

.cta-button {
    background: #e94e77;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
}

.cta-button:hover {
    background: #d43f6c;
}

.destinations, .packages, .testimonials, .contact {
    padding: 20px;
}

.container {
    width: 80%;
    margin: auto;
}

.destination-card, .package-card {
    background: #f9f9f9;
    padding: 15px;
    border-radius: 5px;
    margin-bottom: 20px;
}

.destination-card img, .package-card img {
    max-width: 100%;
    border-radius: 5px;
}

.contact form {
    display: flex;
    flex-direction: column;
}

.contact label {
    margin-top: 10px;
}

.contact input, .contact textarea {
    padding: 10px;
    margin-top: 5px;
}

.contact button {
    margin-top: 10px;
    background: #e94e77;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.contact button:hover {
    background: #d43f6c;
}

footer {
    background: #333;
    color: white;
    text-align: center;
    padding: 10px 0;
}

    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <h1>Descubre Cusco</h1>
            <p>Tu puerta de entrada a la magia del Perú</p>
            <nav class="nav-bar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Destinos</a></li>
                    <li><a href="#">Paquetes</a></li>
                    <li><a href="#">Galería</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h2>Explora los Maravillosos Destinos de Cusco</h2>
            <p>Desde la majestuosa Machu Picchu hasta la vibrante cultura local.</p>
            <a href="#" class="cta-button">Explorar Paquetes</a>
        </div>
    </section>

    <!-- Destinations Section -->
    <section class="destinations">
        <div class="container">
            <h2>Destinos Populares</h2>
            <div class="destination-card">
                <img src="path/to/machu-picchu.jpg" alt="Machu Picchu">
                <h3>Machu Picchu</h3>
                <p>Descubre la ciudad perdida de los Incas, una de las maravillas del mundo.</p>
                <a href="#">Ver Más</a>
            </div>
            <div class="destination-card">
                <img src="path/to/sacsayhuaman.jpg" alt="Sacsayhuamán">
                <h3>Sacsayhuamán</h3>
                <p>Explora esta fortaleza ceremonial con impresionantes paredes de piedra.</p>
                <a href="#">Ver Más</a>
            </div>
            <!-- Agrega más tarjetas de destinos según sea necesario -->
        </div>
    </section>

    <!-- Packages Section -->
    <section class="packages">
        <div class="container">
            <h2>Paquetes Turísticos</h2>
            <div class="package-card">
                <h3>Paquete A</h3>
                <p>Incluye visitas a Machu Picchu, Sacsayhuamán y más.</p>
                <a href="#">Más Información</a>
            </div>
            <div class="package-card">
                <h3>Paquete B</h3>
                <p>Un recorrido completo por Cusco y sus alrededores.</p>
                <a href="#">Más Información</a>
            </div>
            <!-- Agrega más tarjetas de paquetes según sea necesario -->
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <h2>Testimonios</h2>
            <blockquote>
                <p>"Un viaje inolvidable. Cusco es mágico y cada momento fue especial. Recomiendo este tour a todos."</p>
                <footer>- Juan Pérez</footer>
            </blockquote>
            <!-- Agrega más testimonios según sea necesario -->
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact">
        <div class="container">
            <h2>Contáctanos</h2>
            <p>¿Tienes alguna pregunta? No dudes en ponerte en contacto con nosotros.</p>
            <form action="#" method="post">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Mensaje:</label>
                <textarea id="message" name="message" required></textarea>
                <button type="submit" class="cta-button">Enviar</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Turismo Cusco. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
