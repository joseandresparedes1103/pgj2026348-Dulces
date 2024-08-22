import React from "react";
import { createRoot } from 'react-dom/client';



function Codea() {
  return (
    <html lang="en">
      <head>
        <meta charSet="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Bob Inmobiliario</title>
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.15.4/css/all.min.css" />
       <style>
            {`
              body {
                font-family: 'Arial', sans-serif;
                background: #f4f4f4;
                color: #333;
                margin: 0;
                padding: 0;
              }
              header {
                background: #333;
                color: #fff;
                padding: 1rem 2rem;
                display: flex;
                justify-content: space-between;
                align-items: center;
              }
              header h1 {
                margin: 0;
                font-size: 1.5rem;
              }
              nav ul {
                list-style: none;
                padding: 0;
                margin: 0;
                display: flex;
              }
              nav ul li {
                margin-left: 1rem;
              }
              nav ul li a {
                color: #fff;
                text-decoration: none;
                font-weight: bold;
              }
              nav ul li a:hover {
                text-decoration: underline;
              }
              .hero {
                background: url('https://source.unsplash.com/1600x900/?real-estate') no-repeat center center/cover;
                color: #fff;
                text-align: center;
                padding: 4rem 2rem;
              }
              .hero h2 {
                font-size: 2.5rem;
                margin-bottom: 1rem;
              }
              .hero p {
                font-size: 1.2rem;
              }
              .features, .how-we-help, .testimonials, .contact {
                padding: 2rem;
                text-align: center;
              }
              .features h2, .how-we-help h2, .testimonials h2, .contact h2 {
                font-size: 2rem;
                margin-bottom: 1rem;
              }
              .features .feature-item, .how-we-help .help-item, .testimonials .testimonial-item, .contact form {
                display: flex;
                flex-direction: column;
                align-items: center;
                max-width: 600px;
                margin: 0 auto 1rem;
              }
              .features .feature-item i, .how-we-help .help-item i, .testimonials .testimonial-item i, .contact form i {
                font-size: 2rem;
                margin-bottom: 0.5rem;
              }
              .features .feature-item p, .how-we-help .help-item p, .testimonials .testimonial-item p, .contact form p {
                font-size: 1rem;
              }
              .contact form input, .contact form textarea {
                width: 100%;
                padding: 0.5rem;
                margin-bottom: 1rem;
                border: 1px solid #ccc;
                border-radius: 5px;
              }
              .contact form button {
                padding: 0.75rem 1.5rem;
                border: none;
                background: #333;
                color: #fff;
                border-radius: 5px;
                cursor: pointer;
                font-size: 1rem;
              }
              .contact form button:hover {
                background: #555;
              }
              .how-we-help {
                background: #fff;
                padding: 2rem 0;
              }
              .how-we-help .help-item {
                max-width: 300px;
                margin: 0 1rem;
                text-align: center;
              }
              .how-we-help .help-item i {
                font-size: 3rem;
                color: #ff6600;
              }
              .how-we-help .help-item h3 {
                font-size: 1.5rem;
                margin: 1rem 0 0.5rem;
              }
              .how-we-help .help-item p {
                font-size: 1rem;
                color: #666;
              }
              .how-we-help .help-container {
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
              }
              .testimonials .testimonial-item {
                background: #fff;
                padding: 1rem;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                margin-bottom: 1rem;
              }
              .testimonials .testimonial-item p {
                font-style: italic;
              }
              .testimonials .testimonial-item .author {
                font-weight: bold;
                margin-top: 0.5rem;
              }
              footer {
                background: #333;
                color: #fff;
                text-align: center;
                padding: 1rem 0;
                position: fixed;
                bottom: 0;
                width: 100%;
              }
              .join-us {
                background: #2c0d9b;
                color: #fff;
                padding: 2rem;
                text-align: center;
              }
              .join-us h2 {
                font-size: 2rem;
                margin-bottom: 1rem;
              }
              .join-us button {
                padding: 0.75rem 1.5rem;
                border: none;
                background: #333;
                color: #fff;
                border-radius: 5px;
                cursor: pointer;
                font-size: 1rem;
              }
              .join-us button:hover {
                background: #555;
              }
            `}
          </style>
      </head>
      <body className="antialiased">
        <header>
          <h1>Bob Inmobiliario</h1>
          <nav>
            <ul>
              <li>
                <a href="/home" className="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                  <i className="fas fa-compass"></i> Inicio
                </a>
                <a href="/login" className="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                  <i className="fas fa-sign-in-alt"></i> Iniciar Sesión
                </a>
                <a href="/register" className="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                  <i className="fas fa-user-plus"></i> Registrarse
                </a>
              </li>
            </ul>
          </nav>
        </header>
        <section className="hero">
          <h2>Bienvenido a Bob Inmobiliario</h2>
          <p>Encuentra la propiedad de tus sueños con nosotros</p>
        </section>
        <section className="features">
          <h2>Nuestras Características</h2>
          <div className="feature-item">
            <i className="fas fa-home"></i>
            <p>Amplia variedad de propiedades</p>
          </div>
          <div className="feature-item">
            <i className="fas fa-dollar-sign"></i>
            <p>Precios competitivos</p>
          </div>
          <div className="feature-item">
            <i className="fas fa-users"></i>
            <p>Atención personalizada</p>
          </div>
        </section>
        <section className="how-we-help">
          <h2>Mirá cómo Bob Inmobiliario te puede ayudar</h2>
          <div className="help-container">
            <div className="help-item">
              <i className="fas fa-building"></i>
              <h3>Todas las propiedades</h3>
              <p>Con más de 20,000 propiedades publicadas, alcanzamos el 97% de la oferta inmobiliaria del país.</p>
            </div>
            <div className="help-item">
              <i className="fas fa-search"></i>
              <h3>Búsqueda exacta</h3>
              <p>Nuestros filtros te permiten encontrar la propiedad que estás buscando en el menor tiempo posible.</p>
            </div>
            <div className="help-item">
              <i className="fas fa-chart-line"></i>
              <h3>Big Data</h3>
              <p>Diseñamos herramientas para que puedas tomar las mejores decisiones basadas en datos.</p>
            </div>
          </div>
        </section>
        <section className="testimonials">
          <h2>Testimonios</h2>
          <div className="testimonial-item">
            <p>"Gracias a Bob Inmobiliario encontré la casa perfecta para mi familia. Excelente servicio y atención personalizada."</p>
            <div className="author">- Juan Pérez</div>
          </div>
          <div className="testimonial-item">
            <p>"La mejor plataforma para buscar propiedades. La interfaz es muy amigable y encontré muchas opciones que se ajustaban a mi presupuesto."</p>
            <div className="author">- María García</div>
          </div>
        </section>
        <section className="contact">
          <h2>Contacto</h2>
          <form>
            <input type="text" placeholder="Nombre" />
            <input type="email" placeholder="Email" />
            <textarea placeholder="Mensaje"></textarea>
            <button type="submit">Enviar</button>
          </form>
        </section>
        <footer>
          <p>&copy; 2024 Bob Inmobiliario. Todos los derechos reservados.</p>
        </footer>
        <section className="join-us">
          <h2>Únete a nosotros</h2>
          <button>Registrate ahora</button>
        </section>
      </body>
    </html>
  );
}

export default Codea;

if (document.getElementById('codeareact')) {
  createRoot(document.getElementById('codeareact')).render(<Codea />);
}
