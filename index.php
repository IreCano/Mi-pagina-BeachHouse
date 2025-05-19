<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beach House Cabañas</title>
  <!--link rel="stylesheet" href="css/carrito.css" -->
  <link rel="stylesheet" href="assets/styles.css">
  <script src="js/jquery.3.7.js"></script>
  <!--script src="js/carrito.js"></script-->
  <script>
    $( document ).ready(function() {
      $(".frm_reg").on("submit", function (e) {
        console.log(e);
      });
        console.log( "ready!" );
    });
  </script>
</head>

<body>

  <div class="header">
    <img src="Images/logo.png" alt="Logo de Beach House Cabañas" class="logo">
    
<?php
echo '<h1>BEACH HOUSE CABAÑAS SANTA ELENA</h1>';
?>

  </div>
  <div class="botones-cabanas">
    <button class="boton-cabana" id="btnCurazao">Cabaña Familiar</button>
    <button class="boton-cabana" id="btnBonaire">Cabaña para Pareja</button>
    <button class="boton-cabana" id="btnTarifas">Planes y Tarifas</button>
    <button class="boton-cabana" id="btnHorarios">Conoce Nuestros Horarios</button>
    <button class="boton-cabana" id="btnLugares">Lugares cercanos</button>
    <button class="boton-cabana" id="btnMapa">Mapa del Sitio</button>
    <button class="boton-cabana" id="btnContacto">Contacto</button>
    <button class="boton-cabana" id="btnGaleria">Galeria</button>
    <button class="boton-cabana btn_preg" id="btnPreguntas"  formaction="/tienda">Tienda</button>
  </div>

  
  <div id="descripcionCurazao" class="descripcion-cabana" style="display:none;">
  <h2>CABAÑA CURAZAO</h2>
  <p>
    La Cabaña Curazao es el espacio ideal para disfrutar en familia. Con capacidad para 4 adultos y 2 niños, esta cabaña combina confort, 
    privacidad y una vista espectacular de la ciudad de Medellín. Su diseño rústico y acogedor incluye dos camas Queen, un sofá cama, chimenea,
     baño privado, agua caliente, una cocina completamente equipada y un balcón desde donde puedes contemplar la belleza natural de Santa Elena y una vista maravillosa a 
     la ciudad de Medellín.
    Es un espacio pensado para que te sientas como en casa: puedes cocinar tus propios alimentos, pedir domicilio desde tu app favorita o salir
     a recorrer los alrededores y deleitarte con la gastronomía tradicional que ofrece la zona. Perfecta para desconectarse de la rutina, disfrutar
      de la tranquilidad del bosque y crear momentos inolvidables con quienes más quieres.
  </p>
  <img src="Images/Cabaña Curacao/vistearriba.avif" alt="Interior de la Cabaña Curazao">
</div>


<div id="descripcionBonaire" class="descripcion-cabana" style="display:none;">
  <h2>CABAÑA BONAIRE Y CABAÑA ARUBA </h2>
  
  <h3 class="subtitulo-romantico">¿Buscas el lugar perfecto para desconectarte del mundo y reconectar con tu pareja?</h3>
    Nuestras cabañas Bonaire y Aruba están diseñadas especialmente para 
    vivir una experiencia íntima, relajante y mágica en medio del bosque.
    <br>
    Sumérgete en la calidez de su jacuzzi privado, ideal para disfrutar una noche bajo las estrellas o 
    relájate en una bañera rodeada de un ambiente rústico y acogedor, pensado para momentos de tranquilidad y conexión.
    <br>
    Ambas cabañas cuentan con chimenea para veladas acogedoras,cama queen confortable, baño privado, cocina completamente dotada,Vista panorámica al bosque y a la ciudad de Medellín,televisor,
     vino y detalles románticos como rosas frescas

  
  <img src="Images/Cabaña Bonaire/Jacuzzy.avif" alt="Interior de la Cabaña Bonaire">
  <img src="Images/Cabaña Aruba/camamesa.avif" alt="">
</div>



  <div id="descripcionTarifas" class="descripcion-cabana" style="display:none;">
    <h2>NUESTRAS TARIFAS</h2>
    <p>Nuestras tarifas son por noche. ¡Mínimo se deben tomar dos noches!</p>
  
    <table class="tabla-tarifas">
      <thead>
        <tr>
          <th>Duración</th>
          <th>Tarifa</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>2 noches</td>
          <td>$200 usd</td>
        </tr>
      </tbody>
    </table>
  </div>



</div>

<div id="descripcionHorarios" class="descripcion-cabana" style="display:none;">
  <h2>HORARIOS</h2>
  <table class="tabla-tarifas">
    <thead>
      <tr>
        <th>Check-in</th>
        <th>Check-out</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Viernes 14:00 hrs</td>
        <td>Domingo 12:00 hrs</td>
      </tr>
    </tbody>
  </table>
</div>

<div id="descripcionLugares" class="descripcion-cabana" style="display:none;">
  <h2>lUGARES CERCANOS Y DE INTERES</h2>  

  <table class="tabla-tarifas">
    <thead>
      <tr>
        <th>Lugar</th>        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Restaurante Las Hortensias</td>
       
      </tr>
      <tr>
        <td>Universidad Veterinaria Remington</td>
       
      </tr>
      <tr>
        <td>Parque Principal Corregimiento Santa Elena</td>
        
      </tr>
    </tbody>
  </table>

</div>
<div id="descripcionMapa" class="descripcion-cabana" style="display:none;">
  <h2>UBICACION</h2>
  Poner el mapa 
</div>
<div id="descripcionContacto" class="descripcion-cabana" style="display:none;">
  <h2>CONTACTO</h2>
  <p>Puedes comunicarte con nosotros a través de los siguientes medios:</p>

  <table class="tabla-tarifas">
    <thead>
      <tr>
        <th>Medio</th>
        <th>Información</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Teléfono</td>
        <td>+57 304 5064787</td>
      </tr>
      <tr>
        <td>Correo Electrónico</td>
        <td>contacto@beachhousecabanas.co</td>
      </tr>
      <tr>
        <td>Instagram</td>
        <td>@beachhousecabanas</td>
      </tr>
    </tbody>
  </table>
</div>
<div id="descripcionGaleria" class="descripcion-cabana" style="display:none;">
  <h2>GALERIA</h2>
  <img src="Images/Cabaña Curacao/baño.avif" alt="">
  <img src="Images/Cabaña Bonaire/SalaBonaire.avif" alt="">
  <img src="Images/Cabaña Aruba/chimenea.jpeg" alt="">
  <img src="Images/Cabaña Aruba/salacocina.avif" alt="">
  <img src="Images/Cabaña Bonaire/Entrada.webp" alt="">  
  <img src="Images/Images General/ext3.avif" alt="">
  <img src="Images/Cabaña Bonaire/jacuzzy2.webp" alt="">


</div>
<div id="descripcionPreguntas" class="descripcion-cabana" style="display:none;">
<h1>Carrito de Compras</h1>

  <section id="productos">
    <h2>Productos</h2>
    <div class="producto" data-nombre="Cerveza" data-precio="5000">Cerveza - $5.000 <button class="btn_car">Agregar</button></div>
    <div class="producto" data-nombre="Ron" data-precio="60000">Ron - $60.000 <button class="btn_car">Agregar</button></div>
    <div class="producto" data-nombre="Maní" data-precio="6000">Maní - $6.000 <button class="btn_car">Agregar</button></div>
    <div class="producto" data-nombre="Condones" data-precio="24000">Condones - $24.000 <button class="btn_car">Agregar</button></div>
    <div class="producto" data-nombre="Gaseosa" data-precio="4000">Gaseosa - $4.000 <button class="btn_car">Agregar</button></div>
    <div class="producto" data-nombre="Chocolates" data-precio="12000">Chocolates - $12.000 <button class="btn_car">Agregar</button></div>
    <div class="producto" data-nombre="Salchichas" data-precio="8000">Salchichas - $8.000 <button class="btn_car">Agregar</button></div>
  </section>

  <section id="carrito">
    <h2>Tu Carrito</h2>
    <div id="lista-carrito">
  <table>
    <thead>
      <tr>
        <th>Producto</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody id="carrito-body">
      <!-- Aquí JS insertará las filas -->
    </tbody>
  </table>
</div>

    <p>Total: <span id="total">0.00</span></p>
  </section>

  <section id="pago">
    <h2>Método de Pago</h2>
    <label><input type="radio" name="pago" value="tarjeta" checked> Tarjeta</label>
    <label><input type="radio" name="pago" value="efectivo"> Efectivo</label>
    <button id="finalizar">Finalizar Compra</button>
  </section>




  
    


</div>



  <p>
    <h2 class="titulo-seccion">QUIÉNES SOMOS</h2>
    Beachhouse Cabañas es un encantador y acogedor complejo turístico conformado por tres cabañas de madera,
    ubicado en el hermoso corregimiento de Santa Elena, en la ciudad de Medellín. Este mágico lugar, rodeado de
    exuberante naturaleza,
    se encuentra en medio de frondosos jardines y majestuosos árboles, brindando un ambiente de tranquilidad y conexión
    con el entorno natural.

    Cada una de las cabañas lleva el nombre de una isla del Caribe Neerlandés —Aruba, Bonaire y Curazao— evocando así el
    espíritu tropical y
    relajante que caracteriza al complejo. Gracias a su privilegiada ubicación en las montañas, desde cada cabaña se
    puede disfrutar de una vista
    panorámica impresionante de la ciudad de Medellín, especialmente al atardecer y durante las noches estrelladas.

    Además de su encantador alojamiento, Beachhouse Cabañas ofrece a sus visitantes una experiencia completa de descanso
    y entretenimiento. Entre sus
    atractivos se destacan senderos ecológicos ideales para caminatas y exploración, un jacuzzi al aire libre perfecto
    para relajarse rodeado de naturaleza,
    y un bar completamente equipado con una amplia variedad de licores. También cuenta con televisión, equipo de sonido
    y otros servicios diseñados para brindar
    una estadía cómoda, divertida y memorable.
  </p>

  <div class="cabanas-container">
    <!-- Cabaña Aruba -->
    <div class="cabaña">
      <img src="Images/Cabaña Aruba/exterior.avif" alt="Cabaña Aruba">
      <h2>Cabaña Aruba</h2>
      <p>Disfruta de la comodidad y tranquilidad de la Cabaña Aruba, donde la naturaleza y el lujo se encuentran. Ideal
        para una escapada romántica o unas vacaciones relajantes.</p>
      <ul style="list-style: none; padding-left: 0;">
        <li>Cocina</li>
        <li>Baño</li>
        <li>Bañera</li>
        <li>Chimenea</li>
        <li>Cama Queen</li>
        <li>Televisor</li>
      </ul>

    </div>

    <!-- Cabaña Bonaire -->
    <div class="cabaña">
      <img src="Images/Cabaña Bonaire/CabañaBonaire.avif" alt="Cabaña Bonaire">
      <h2>Cabaña Bonaire</h2>
      <p>Con vistas espectaculares y un ambiente acogedor, la Cabaña Bonaire es perfecta para disfrutar de la paz y
        serenidad de la montaña, junto a la naturaleza y la comodidad.</p>
      <ul style="list-style: none; padding-left: 0;">
        <li>Cocina</li>
        <li>Baño</li>
        <li>jacuzzi</li>
        <li>Chimenea</li>
        <li>Cama Queen</li>
        <li>SofaCama</li>
        <li>televisor</li>
      </ul>
    </div>

    <!-- Cabaña Curazao -->
    <div class="cabaña">
      <img src="Images/Cabaña Curacao/CabañaCuracao.avif" alt="Cabaña Curazao">
      <h2>Cabaña Curazao</h2>
      <p>La Cabaña Curazao te ofrece un entorno relajante con un diseño único. Perfecta para disfrutar de la
        tranquilidad y la belleza natural de Santa Elena.
        <ul style="list-style: none; padding-left: 0;">
          <li>Cocina</li>
          <li>Baño</li>
          <li>Chimenea</li>
          <li> 2 Cama Queen</li>
          <li> 1 SofaCama</li>
          <li>Televisor</li>
        </ul>
      </p>
      


    </div>
  </div>

  <div>
    <form class="frm_reg">
      <p>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">

        <label for="apellido">Apellido</label>
        <input type="text" name="apellido">

        <label for="cedula">Cédula</label>
        <input type="text" name="cedula">

        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" id="">

        <label for="email">Email</label>
        <input type="email" name="email" id="email"> 

              <label for="mensaje">Mensaje</label>
        <textarea name="mensaje" id="mensajes"></textarea>       
      </p>
     
      <div style="text-align: center;">
        <button type="submit">Enviar</button>
      </div>     
      
    </form>
  </div>



  <hr>

  <footer class="footer">
    <p>&copy; 2025 Beach House Cabañas</p>
  </footer>

  <script>
    // Seleccionamos todos los botones con la clase "boton-cabana"
    const botones = document.querySelectorAll('.boton-cabana');
    
    botones.forEach(function(boton) {
      boton.addEventListener('click', function() {
        // Obtener el ID del botón clickeado
        const id = boton.id.replace('btn', 'descripcion'); 
        
        // Ocultamos descrpciones
        const todasLasDescripcion = document.querySelectorAll('.descripcion-cabana');
        todasLasDescripcion.forEach(function(descripcion) {
          descripcion.style.display = 'none';
        });

        // Muestra la descripcion
        const descripcion = document.getElementById(id);
        if (descripcion) {
          descripcion.style.display = descripcion.style.display === 'none' ? 'block' : 'none';
        }
      });
    });
    /**------------------------------------------------------------------------------------------------ */
  const botonesAgregar = document.querySelectorAll('.btn_car');
  const carritoBody = document.getElementById('carrito-body');
  const totalSpan = document.getElementById('total');
  const finalizarBtn = document.getElementById('finalizar');

  let carrito = [];

  botonesAgregar.forEach(boton => {
    boton.addEventListener('click', () => {
      const productoDiv = boton.parentElement;
      const nombre = productoDiv.getAttribute('data-nombre');
      const precio = parseFloat(productoDiv.getAttribute('data-precio'));

      const productoExistente = carrito.find(p => p.nombre === nombre);
      if (productoExistente) {
        productoExistente.cantidad++;
      } else {
        carrito.push({ nombre, precio, cantidad: 1 });
      }

      actualizarCarrito();
    });
  });

  function actualizarCarrito() {
    carritoBody.innerHTML = '';
    let total = 0;

    carrito.forEach((producto, index) => {
      const fila = document.createElement('tr');

      const tdNombre = document.createElement('td');
      tdNombre.textContent = producto.nombre;

      const tdPrecio = document.createElement('td');
      tdPrecio.textContent = '$' + (producto.precio).toLocaleString();

      const tdCantidad = document.createElement('td');
      tdCantidad.textContent = producto.cantidad;

      const tdEliminar = document.createElement('td');
      const btnEliminar = document.createElement('button');
      btnEliminar.textContent = 'Eliminar';
      btnEliminar.addEventListener('click', () => {
        carrito.splice(index, 1);
        actualizarCarrito();
      });
      tdEliminar.appendChild(btnEliminar);

      fila.appendChild(tdNombre);
      fila.appendChild(tdPrecio);
      fila.appendChild(tdCantidad);
      fila.appendChild(tdEliminar);

      carritoBody.appendChild(fila);

      total += producto.precio * producto.cantidad;
    });

    totalSpan.textContent = total.toLocaleString();
  }

  finalizarBtn.addEventListener('click', () => {
    if (carrito.length === 0) {
      alert('Tu carrito está vacío.');
      return;
    }

    const metodoPago = document.querySelector('input[name="pago"]:checked').value;

    alert(`Gracias por tu compra.\nMétodo de pago: ${metodoPago.toUpperCase()}.\nTotal: $${totalSpan.textContent}`);
    carrito = [];
    actualizarCarrito();
  });
  </script>

</body>
</html