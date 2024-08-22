@extends('adminlte::page')

@section('content')
<div class="container">
    <h1>Página Principal del Empleado</h1>
    <div class="grid-container">
        <div class="grid-item large-grid">
            <h2>Bienvenido a tu Panel de Empleado</h2>
            <p>¡Hola! Queremos darte la más cordial bienvenida a nuestro equipo en la empresa inmobiliaria. Estamos emocionados de tenerte aquí y esperamos que esta plataforma te brinde todas las herramientas necesarias para llevar a cabo tus responsabilidades de manera efectiva y satisfactoria.</p>
            <p>Como miembro de nuestro equipo, desempeñas un papel fundamental en el éxito y el crecimiento de la empresa. Valoramos tu arduo trabajo, dedicación y compromiso para brindar un servicio excepcional a nuestros clientes.</p>
            <p>Este panel está diseñado para facilitar tu trabajo diario. Desde aquí, puedes acceder a información importante, registrar tus actividades, colaborar con tus colegas y mucho más. Siempre estamos trabajando para mejorar nuestra plataforma y estamos abiertos a tus sugerencias y comentarios.</p>
            <p>Recuerda que nuestro objetivo es crear un ambiente de trabajo positivo y colaborativo, donde todos puedan crecer y prosperar. Juntos, podemos alcanzar grandes logros y seguir construyendo el éxito de nuestra empresa.</p>
            <p>Gracias por formar parte de nuestro equipo. ¡Esperamos que tu experiencia aquí sea gratificante y enriquecedora!</p>
        </div>
        <div class="grid-item">
            <h2>Dibujar</h2>
            <canvas id="canvas" width="400" height="600"></canvas>
        </div>
        <div class="grid-item">
            <h2>Notas</h2>
            <textarea rows="5" cols="50"></textarea>
        </div>
    </div>
</div>
@endsection

@section('css')
<style>
    .grid-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 20px;
    }

    .grid-item {
        border: 1px solid #ccc;
        padding: 20px;
        text-align: center;
    }

    .large-grid {
        grid-column: span 2; /* Ocupa dos columnas */
    }
</style>
@endsection

@section('js')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var canvas = document.getElementById('canvas');
        var ctx = canvas.getContext('2d');
        var painting = false;

        canvas.addEventListener('mousedown', startPosition);
        canvas.addEventListener('mouseup', finishedPosition);
        canvas.addEventListener('mousemove', draw);

        function startPosition(e) {
            painting = true;
            draw(e);
        }

        function finishedPosition() {
            painting = false;
            ctx.beginPath();
        }

        function draw(e) {
            if (!painting) return;
            ctx.lineWidth = 5;
            ctx.lineCap = 'round';

            ctx.lineTo(e.clientX - canvas.offsetLeft, e.clientY - canvas.offsetTop);
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(e.clientX - canvas.offsetLeft, e.clientY - canvas.offsetTop);
        }
    });
</script>
@endsection
