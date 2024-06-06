<?php

function getEndpointByToken($_endpoint, $_token)
{
    // Configuración de la solicitud por cURL
    $ch = curl_init($_endpoint);
    // Indico que tiene método de autorización para acceder al contenido
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer ' . $_token
    ));
    // Indico que tiene contenido el endpoint (respuesta)
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // Ejecución de la solicitud
    $respuesta = curl_exec($ch);
    // Verificación si existen errores
    if ($respuesta === false) {
        return 'Error 1: No se pudo realizar la solicitud: ' . curl_error($ch);
    } else {
        return $respuesta;
    }
}


// llamada desde el back-end con el metodo get para obtener informacion

$url='http://localhost/back-eva3/v3/';
// llamada desde el back-end con el metodo get para obtener informacion
$respuestaEndpointServicios = getEndpointByToken($url.'categoria_servicio/', 'get');


$respuestaEndpointPregunta = getEndpointByToken($url.'pregunta_frecuente/', 'get');


$respuestaEndpointEquipo = getEndpointByToken($url.'equipo/', 'get');


$respuestaEndpointHistoria = getEndpointByToken($url.'historia/', 'get');


$respuestaEndpointContacto = getEndpointByToken($url.'info_contacto/', 'get');


$respuestaEndpointMantenimiento = getEndpointByToken($url.'mantenimiento_info/', 'get');

/* 


$respuestaEndpointServicios = getEndpointByToken('http://localhost/Eval_U2A_ciisa_forever/v1/categoria_servicio/', 'get');


$respuestaEndpointPregunta = getEndpointByToken('http://localhost/Eval_U2A_ciisa_forever/v1/pregunta_frecuente/', 'get');


$respuestaEndpointEquipo = getEndpointByToken('http://localhost/Eval_U2A_ciisa_forever/v1/equipo/', 'get');


$respuestaEndpointHistoria = getEndpointByToken('http://localhost/Eval_U2A_ciisa_forever/v1/historia/', 'get');


$respuestaEndpointContacto = getEndpointByToken('http://localhost/Eval_U2A_ciisa_forever/v1/info_contacto/', 'get');


$respuestaEndpointMantenimiento = getEndpointByToken('http://localhost/Eval_U2A_ciisa_forever/v1/mantenimiento_info/', 'get'); */

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Energy and Water</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <nav class="navbar navbar-light sticky-top navbar-expand-lg " data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="./image/logo_energy-removebg-preview.png" class="img-01" height="70px" width="75px" alt="">
        Energy and Water
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav me-auto">
          
          <a class="nav-link" href="#seccionEquipo">Equipo</a>
          <a class="nav-link" href="#nosotros">Nosotros</a>
          <a class="nav-link" href="#servicios">Servicios</a>
         
          <a class="nav-link" href="#historia">Historia</a>
          <a class="nav-link" href="#seccionPreguntasFrecuentes">Preguntas frecuentes</a>
          <a class="nav-link" href="#contacto">Contáctenos</a>
        </div>
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <button class="btn btn-link nav-link dropdown-toggle" id="bd-theme" type="button" aria-expanded="false"
              data-bs-toggle="dropdown" data-bs-display="static">
              <i class="fas fa-adjust theme-icon-active"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bd-theme">
              <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">
                  <i class="fas fa-sun me-2"></i>
                  Light
                </button>
              </li>
              <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
                  <i class="fas fa-moon me-2"></i>
                  Dark
                </button>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section id="inicio">
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active "
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="image-container">
            <img src="./image/OFICINA.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-caption d-none d-md-block text-white ">
            <h5>OFICINA</h5>
            <p>Ayuda a prolongar la vida útil de tus activos y aumenta la productividad, a través de una revisión.</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="image-container">
            <img src="./image/edificio.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-caption d-none d-md-block text-white ">
            <h5>EDIFICIO</h5>
            <p>Corrige problemas o daños en las instalaciones o equipos.</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="image-container">
            <img src="https://agaarquitectura.com.ar/mantenimiento/images/sliders/mantenimiento-integral-de-edificios2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-caption d-none d-md-block text-white ">
            <h5>SERVICIO</h5>
            <p>Conjunto de operaciones y cuidados necesarios para que tus instalaciones continúen funcionando
              correctamente.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleDark"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <section id="seccionMantenimiento">
   
   <div class="container">
     <div id="rowMantenimiento" class="" >
       
     </div>
   </div>
 </section>

<section id="seccionEquipo">
<div class="container">

<div  id="rowEquipo" class="row">

</div>

</div>


</section>

  <section id="nosotros">
    <br><br>
    <div class="container">
      <div class="row">
        <h3>Nosotros</h3>
        <div class="col-md-6">
          <img src="./image/punitos.webp" class="img-fluid">
        </div>
        <div class="col-md-6">
          <br><br>
          <h3>Mision</h3>
          <p>Nuestra misión es ofrecer soluciones digitales innovadoras y de alta calidad que impulsen el éxito de
            nuestros clientes, ayudándolos a alcanzar sus objetivos empresariales a través de la tecnología y la
            creatividad.</p>
          <br><br>
          <h3>Vision</h3>
          <p class="text-justify">Nos visualizamos como líderes en el campo de la consultoría y desarrollo de software, reconocidos por
            nuestra excelencia en el servicio al cliente, nuestra capacidad para adaptarnos a las necesidades cambiantes
            del mercado y nuestra contribución al crecimiento y la transformación digital de las empresas.</p>
        </div>
      </div>
    </div>
  </section>
  <br><br>

  <section id="servicios">
    <br><br>
    <div class="container">
      
      <div id="rowServicios" class="row ">
        
    </div>
   </div>
  </section>
  <br><br>

 <section id="historia">
  <div class="container">
    
    <div class="row" id="rowHistoria">

  </div>
  </div>
 
 </section>

  <section id="seccionPreguntasFrecuentes">
   
    <div class="container">
    <h3>Preguntas frecuentes</h3>
      <div class="row" id="rowPregunta">
        
      </div>
    </div>
  </section>
  <br><br>

  <section id="contacto">
    <div class="container">
      <h3>Contáctanos</h3><br>
      <div class="row">
      <form id="contactForm" action="?" method="POST" class="col-md-6 ml-5 form-group mb-3 p-4 rounded bg-form">
    <div>
        <h4 class="text-center">Formulario de contacto.</h4>
        <div class="form-floating mb-3 pb-4">
            <input type="text" class="form-control" id="fi_nombre" placeholder="Ingrese su nombre" required>
            <label for="fi_nombre">Nombre</label>
        </div>
        <div class="form-floating mb-3 pb-4">
            <select class="form-select" id="fs_servicios" aria-label="Servicios" required>
                <option value="0" selected>Seleccione un servicio</option>
                <option value="1">Aire Acondicionado</option>
                <option value="2">Grupo electrógeno</option>
                <option value="3">Sala de Calderas</option>
                <option value="4">Sala de Bombas</option>
            </select>
            <label for="fs_servicios">Seleccione un servicio</label>
        </div>
        <div class="form-floating mb-3 pb-4">
            <textarea class="form-control" placeholder="Deje un mensaje aquí" id="fta_mensaje" required></textarea>
            <label for="fta_mensaje">Mensaje</label>
        </div>
        
        <div class="g-recaptcha mb-3" data-sitekey="6Ldg1_EpAAAAAB7epWwKjVacxu22UStEJWijBmqv"></div>
        <button type="submit" value="Submit" class="btn btn-primary form-control">Enviar</button>
    </div>
</form>
        
    <div class="col-md-6 ml-5">
          <h4 class="text-center">Estamos ubicados en:</h4>
          <br>
          <iframe class="d-none d-md-block image-mapa-container" 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.4586627391636!2d-70.56860482528343!3d-33.4112845955058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cee76f877c59%3A0x12a13b6465081368!2sAv.%20Manquehue%20Sur%20520%2C%20205%2C%20Las%20Condes%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses-419!2scl!4v1715842958282!5m2!1ses-419!2scl"
            width="400" height="650" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
        </div>

      </div>
      
  </section>
  <br><br>

  <!-- Footer -->
  <footer class="text-center text-lg-start bg-footer">
    <section class="d-flex justify-content-between p-4 bg-titfooter">
      <div class="me-5">
        <h3>Conéctate con nosotros:</h3>
      </div>
      <div>
        <a href="" class="me-4" style="color: #ffffff">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4" style="color: #ffffff">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4" style="color: #ffffff">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4" style="color: #ffffff">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4" style="color: #ffffff">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4" style="color: #ffffff">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <section class="bg-footer">
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold">Energy and Water</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; height: 2px" />
            <p>
              Ofrecemos soluciones a medida para cada cliente, garantizando la calidad y
              la seguridad de nuestros servicios. Contacta con nosotros y solicita tu presupuesto sin compromiso.
            </p>
          </div>
          
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">  
          <h6 class="text-uppercase fw-bold">Contactos</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; height: 2px" />
          <div  id="rowContacto">
            <!-- Links --> 
            <p><i class="fas fa-home mr-3"></i> Manquehue Sur 520, oficina 205, Las Condes</p>
            <p><i class="fas fa-envelope mr-3"></i> contacto@energyandwater.cl </p>
            <p><i class="fas fa-phone mr-3"></i> +56 2 3256 9798 </p>
            <p><i class="fas fa-print mr-3"></i> +56 9 3083 5203</p>
          </div>
          </div>
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold">Productos</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; height: 2px" />
            <p>
              <a href="#!" class="text-white">Aire acondicionado</a>
            </p>
            <p>
              <a href="#!" class="text-white">Sala de Calderas</a>
            </p>
            <p>
              <a href="#!" class="text-white">Grupo electrógeno</a>
            </p>
            <p>
              <a href="#!" class="text-white">Sala de bombas</a>
            </p>
          </div>
        </div>
      </div>
    </section>
    <div class="text-center p-3">
    <img src="./image/logo_energy-removebg-preview.png" class="img-01" height="70px" width="75px" alt=""> 
      © 2020 Copyright:
      <a class="" href="www.energyandwater.cl">www.energyandwater.cl</a>
    </div>

  </footer>
  <!-- Scripts locales -->
<script src="./js/consumoendpoint.js"></script>
<script src="./js/modooscuro.js"></script>
<script src="./js/validarForm.js"></script>

<!-- Bibliotecas externas -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>


  <script>
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// generar dinamicamente end-point servicios
//creacion de cards que contengan en nombre el texto yla imagen,ademas un boton en las cards
//de contactanos que nos lleva a la secccion "contactanos" 
 try {
    // Aquí directamente usamos la respuesta de PHP
    const datosEndpoint = JSON.parse('<?php echo $respuestaEndpointServicios; ?>');
    imprimeServicios(datosEndpoint);
} catch (error) {
    console.error('Error al parsear el JSON: ', error);
}

function imprimeServicios(_datosEndpoint) {
    // Verificar que los datos tengan la estructura correcta
    if (!_datosEndpoint || !_datosEndpoint.data || !Array.isArray(_datosEndpoint.data)) {
        console.error('La estructura de los datos no es la esperada:', _datosEndpoint);
        return;
    }

    console.log(_datosEndpoint.data);
    const rowServicios = document.getElementById('rowServicios');
    rowServicios.innerHTML = '';

    // Calcular el ancho de las columnas
    const anchoColumnasXL = 12 / _datosEndpoint.data.length;
    const anchoColumnasMD = Math.round((12 / _datosEndpoint.data.length) * 2);
    const anchoColumnasSM = Math.round((12 / _datosEndpoint.data.length) * 2 * 2);

    // Iterar sobre los elementos y crear las tarjetas
    _datosEndpoint.data.forEach(element => {
        const columna = document.createElement('div');
        columna.classList.add('col-xl-' + anchoColumnasXL);
        columna.classList.add('col-md-' + anchoColumnasMD);
        columna.classList.add('col-sm-' + anchoColumnasSM);
        columna.classList.add('my-2');
        
        const tarjeta = document.createElement('div');
        tarjeta.classList.add('card');
        
        const tarjetaHeader = document.createElement('div');
        tarjetaHeader.classList.add('card-header');
        
        const tarjetaBody = document.createElement('div');
        tarjetaBody.classList.add('text-justify','card-body');

        const img = document.createElement('img');
        img.src = element.imagen; 
        img.classList.add('card-img-top', 'img-fluid'); 
        img.alt = element.nombre;
        img.style.height = '28vw'; // Ajustar
        
        const tarjetaFooter = document.createElement('div');
        tarjetaFooter.classList.add('card-footer');
        
        // Trabajo con los datos
        tarjetaHeader.innerText = element.nombre; 
        tarjetaBody.innerText = element.texto;
        
        tarjetaFooter.innerHTML = '<a href="#fs_servicios"><button class="btn btn-primary form-control" onclick="cambiaServicio(`' + element.id + '`)">Contáctanos</button></a>';

        tarjeta.appendChild(tarjetaHeader);
        tarjeta.appendChild(img); 
        tarjeta.appendChild(tarjetaBody);
        tarjeta.appendChild(tarjetaFooter);
        
        columna.appendChild(tarjeta);
        rowServicios.appendChild(columna);
    });
}


//funcion que nos llevara a la seccion contacto colocando el item seleccionado por el usuario
function cambiaServicio(valorSelect) {
    const selectElement = document.getElementById('fs_servicios');
    if (selectElement) {
        selectElement.value = valorSelect; // Cambia a la opción deseada

        const event = new Event('change');
        selectElement.dispatchEvent(event);
    } else {
        console.error('No se encontró el elemento select con id fs_servicios');
    }
}

// funcion validar formulario 
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevenir el envío del formulario por defecto
    validarFormulario();
});

function validarFormulario() {
    let validos = true; // Cambiar a true inicialmente
    const input_nombre = document.getElementById('fi_nombre');
    const select_servicios = document.getElementById('fs_servicios');
    const textArea_mensaje = document.getElementById('fta_mensaje');
    const check_envio = document.getElementById('checkEnvio');
    const recaptchaResponse = grecaptcha.getResponse();

    // Validar campo nombre
    if (input_nombre.value.trim() === '') {
        input_nombre.classList.add('is-invalid');
        validos = false;
    } else {
        input_nombre.classList.remove('is-invalid');
        input_nombre.classList.add('is-valid');
    }

    // Validar campo servicios
    if (select_servicios.value === '0') {
        select_servicios.classList.add('is-invalid');
        validos = false;
    } else {
        select_servicios.classList.remove('is-invalid');
        select_servicios.classList.add('is-valid');
    }

    // Validar campo mensaje
    if (textArea_mensaje.value.trim() === '') {
        textArea_mensaje.classList.add('is-invalid');
        validos = false;
    } else {
        textArea_mensaje.classList.remove('is-invalid');
        textArea_mensaje.classList.add('is-valid');
    }

    // Validar campo checkbox
   

   // Validación del reCAPTCHA
   if (recaptchaResponse.length === 0) {
    Swal.fire({
        icon: 'error',
        title: 'Error en reCAPTCHA',
        text: 'Por favor, completa el reCAPTCHA.'
    });
    validos = false;
}

// Si todos los campos son válidos, mostrar mensaje de éxito
if (validos) {
    Swal.fire({
        icon: 'success',
        title: 'Formulario enviado',
        text: 'Su mensaje ha sido enviado exitosamente.'
    }).then(() => {
        document.getElementById('contactForm').submit(); // Enviar el formulario después de la validación
    });
} else {
    Swal.fire({
        icon: 'error',
        title: 'Error en el formulario',
        text: 'Por favor, complete todos los campos correctamente.'
    });
}



}



/////////////////////////////////////////////////////////////////////////////////////////////////////////////
// creacion de seccion preguntas frecuentes, de manera dinamica con javascript creamos el 
//contenido de tipo cards de acordeon para cuando se presiona una pregunta aparesca la respuesta
//de manera dinamica.
//generar dinamicamente end-point pregunta_frecuente

try {
    // Aquí directamente usamos la respuesta de PHP
    const datosEndpointP = JSON.parse('<?php echo $respuestaEndpointPregunta; ?>');
    imprimePreguntas(datosEndpointP);
} catch (error) {
    console.error('Error al parsear el JSON: ', error);
}

 

function imprimePreguntas(_datosEndpoint) {
    // Verificar que los datos tengan la estructura correcta
    if (!_datosEndpoint || !_datosEndpoint.data || !Array.isArray(_datosEndpoint.data)) {
        console.error('La estructura de los datos no es la esperada:', _datosEndpoint);
        return;
    }

    console.log(_datosEndpoint.data);
    const rowPregunta = document.getElementById('rowPregunta');
    rowPregunta.innerHTML = '';

    // Añade clases de Bootstrap al contenedor rowPregunta
    rowPregunta.classList.add('p-3', 'rounded');

    // Crear el contenedor del acordeón
    const acordeon = document.createElement('div');
    acordeon.id = 'accordionExample';
    acordeon.classList.add('accordion');

    // Iterar sobre los elementos y crear las tarjetas de acordeón
    _datosEndpoint.data.forEach((element, index) => {
        const item = document.createElement('div');
        item.classList.add('accordion-item');

        const header = document.createElement('h2');
        header.classList.add('accordion-header');
        header.id = 'flush-heading' + index;

        const button = document.createElement('button');
        button.classList.add('accordion-button', 'collapsed');
        button.type = 'button';
        button.setAttribute('data-bs-toggle', 'collapse');
        button.setAttribute('data-bs-target', '#flush-collapse' + index);
        button.setAttribute('aria-expanded', 'false');
        button.setAttribute('aria-controls', 'flush-collapse' + index);
        button.innerText = element.pregunta;

        header.appendChild(button);
        item.appendChild(header);

        const collapse = document.createElement('div');
        collapse.id = 'flush-collapse' + index;
        collapse.classList.add('accordion-collapse', 'collapse');
        collapse.setAttribute('aria-labelledby', 'flush-heading' + index);
        collapse.setAttribute('data-bs-parent', '#accordionFlushExample');

        const body = document.createElement('div');
        body.classList.add('accordion-body');
        body.innerText = element.respuesta;

        collapse.appendChild(body);
        item.appendChild(collapse);

        acordeon.appendChild(item);
    });

    rowPregunta.appendChild(acordeon);
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////// 
//creacion de seccion equipo en la cual de manera dinamica con javascrit generamos su contenido
// en el cual se incluye un titulo, subtitulo, parrafo y imagen de este endpoint.
// Generar dinámicamente el end-point equipo
try {
    // Aquí directamente usamos la respuesta de PHP
    const datosEndpointE = JSON.parse('<?php echo $respuestaEndpointEquipo; ?>');
    imprimeContenidoEquipo(datosEndpointE);
} catch (error) {
    console.error('Error al parsear el JSON: ', error);
}

function imprimeContenidoEquipo(_datosEndpoint) {
    // Verificar que los datos tengan la estructura correcta
    if (!_datosEndpoint || !_datosEndpoint.data || !Array.isArray(_datosEndpoint.data)) {
        console.error('La estructura de los datos no es la esperada:', _datosEndpoint);
        return;
    }

    console.log(_datosEndpoint.data);
    const rowEquipo = document.getElementById('rowEquipo');
    if (!rowEquipo) {
        console.error('No se encontró el contenedor rowEquipo en el DOM');
        return;
    }
    rowEquipo.innerHTML = '';

   
    rowEquipo.classList.add( 'p-3', 'rounded', 'd-flex', 'flex-wrap');

    // Iterar sobre los elementos y crear los elementos adecuados
    _datosEndpoint.data.forEach((element) => {
        const generarEquipo = document.createElement('div');
        generarEquipo.classList.add('equipo-item', 'mb-3', 'flex-grow-1', 'd-flex', 'align-items-center'); // Clase personalizada para cada elemento 

        switch (element.tipo) {
            case 'titulo':
                const titulo = document.createElement('h3');
                titulo.innerText = element.texto;
                titulo.classList.add('flex-grow-1', 'mb-0'); 
                generarEquipo.appendChild(titulo);
                break;

            case 'subtitulo':
                const subtitulo = document.createElement('h4');
                subtitulo.innerText = element.texto;
                subtitulo.classList.add('flex-grow-1', 'mb-0'); 
                generarEquipo.appendChild(subtitulo);
                break;

            case 'parrafo':
                const parrafo = document.createElement('p');
                parrafo.innerText = element.texto;
                parrafo.classList.add('flex-grow-1', 'mb-0','text-justify'); 
                generarEquipo.appendChild(parrafo);
                break;

            case 'imagen':
                const imagenWrapper = document.createElement('div');
                imagenWrapper.classList.add('flex-grow-1', 'mb-0', 'd-flex', 'justify-content-center'); // Para alinear la imagen a la derecha
                const imagen = document.createElement('img');
                imagen.src = element.texto; // La URL está en el campo texto
                imagen.classList.add('img-fluid', 'mb-2', 'w-50', 'align-self-end');
                imagenWrapper.appendChild(imagen);
                generarEquipo.appendChild(imagenWrapper);
                break;

            default:
                console.warn('Tipo de elemento desconocido:', element.tipo);
        }

        rowEquipo.appendChild(generarEquipo);
    });
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//creacion de seccion equipo en la cual de manera dinamica con javascrit generamos su contenido en el cual se incluye
//un titulo, subtitulo, parrafo y imagen de este endpoint.cabe mencionar que en la BD se incluia en una mismas
//columna dos imagenes asique se crea la funcion necesatria opara consumir las 2
// generar dinamicamente end-point historia
try {
    // Aquí directamente usamos la respuesta de PHP
    const datosEndpointH = JSON.parse('<?php echo $respuestaEndpointHistoria; ?>');
    imprimeContenidoHistoria(datosEndpointH);
} catch (error) {
    console.error('Error al parsear el JSON: ', error);
}




function imprimeContenidoHistoria(_datosEndpoint) {
    // Verificar que los datos tengan la estructura correcta
    if (!_datosEndpoint || !_datosEndpoint.data || !Array.isArray(_datosEndpoint.data)) {
        console.error('La estructura de los datos no es la esperada:', _datosEndpoint);
        return;
    }

    console.log(_datosEndpoint.data);
    const rowHistoria = document.getElementById('rowHistoria');
    if (!rowHistoria) {
        console.error('No se encontró el contenedor rowHistoria en el DOM');
        return;
    }
    rowHistoria.innerHTML = '';

    
    rowHistoria.classList.add('p-3', 'rounded');

// Iterar sobre los elementos y crear los elementos 
_datosEndpoint.data.forEach((element) => {
    const generarHistoria = document.createElement('div');
    generarHistoria.classList.add('equipo-item', 'mb-3', 'd-flex', 'flex-wrap'); 

    switch (element.tipo) {
        case 'titulo':
            const titulo = document.createElement('h3');
            titulo.innerText = element.texto;
            generarHistoria.appendChild(titulo);
            break;

        case 'subtitulo':
            const subtitulo = document.createElement('h4');
            subtitulo.innerText = element.texto;
            generarHistoria.appendChild(subtitulo);
            break;

        case 'parrafo':
            const parrafo = document.createElement('p');
            parrafo.innerText = element.texto;
            generarHistoria.appendChild(parrafo);
            break;

        case 'imagen':
            const imagenes = element.texto.split(','); // Separar las imágenes utilizando coma como delimitador
            imagenes.forEach(url => {
                const imagen = document.createElement('img');
                imagen.src = url.trim(); // Eliminar espacios en blanco alrededor de la URL
                imagen.classList.add('img-fluid','w-50');
                generarHistoria.appendChild(imagen);
            });
            break;

        default:
            console.warn('Tipo de elemento desconocido:', element.tipo);
    }

    rowHistoria.appendChild(generarHistoria);
    });
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// creacion de la seccion info_contacto la cual crea de manera dinamica el contenido con javascript, este mismo esta
// generado en el footer contiene nombre y texto.
// generar dinamicamente end-point info_contacto

try {
 
    const datosEndpointC = JSON.parse('<?php echo $respuestaEndpointContacto; ?>');
    imprimeNombreYtexto(datosEndpointC);
} catch (error) {
    console.error('Error al parsear el JSON: ', error);
}

function imprimeNombreYtexto(_datosEndpoint) {
    
    if (!_datosEndpoint || !_datosEndpoint.data || !Array.isArray(_datosEndpoint.data)) {
        console.error('La estructura de los datos no es la esperada:', _datosEndpoint);
        return;
    }

    console.log(_datosEndpoint.data);
    const rowContacto = document.getElementById('rowContacto');
    if (!rowContacto) {
        console.error('No se encontró el contenedor rowContacto en el DOM');
        return;
    }
    rowContacto.innerHTML = '';

    
    _datosEndpoint.data.forEach((element) => {
        const generarContacto = document.createElement('div');
       

        if (element.nombre) {
            const nombre = document.createElement('p');
            nombre.classList.add(); 
            nombre.innerText = element.nombre;
            
            generarContacto.appendChild(nombre);
        }

        if (element.texto) {
            const texto = document.createElement('p');
            texto.classList.add('small'); 
            texto.innerText = element.texto;
            generarContacto.appendChild(texto);
        }

        rowContacto.appendChild(generarContacto);
    });
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// creacion de la seccion mantenimiento_info en la cual se genera de manera dinamica con javascript un titulo 
// un parrafo y un icono para la seccion 
// generar dinamicamente end-point mantenimiento_info
try {
           
            const datosEndpointM = JSON.parse('<?php echo $respuestaEndpointMantenimiento; ?>');
            imprimeMantenimiento(datosEndpointM);
        } catch (error) {
            console.error('Error al parsear el JSON: ', error);
        }

        function imprimeMantenimiento(_datosEndpoint) {
          
            if (!_datosEndpoint || !_datosEndpoint.data || !Array.isArray(_datosEndpoint.data)) {
                console.error('La estructura de los datos no es la esperada:', _datosEndpoint);
                return;
            }

            console.log('Datos recibidos:', _datosEndpoint.data);
            const rowMantenimiento = document.getElementById('rowMantenimiento');
            if (!rowMantenimiento) {
                console.error('No se encontró el contenedor rowMantenimiento en el DOM');
                return;
            }
            rowMantenimiento.innerHTML = '';

           
            rowMantenimiento.classList.add( 'p-3', 'rounded','row');

           
            _datosEndpoint.data.forEach((element) => {
                console.log('Procesando elemento:', element);
                const generarMantenimiento = document.createElement('div');
                generarMantenimiento.classList.add('equipo-item', 'mb-3','col-4'); 

                if (element.nombre) {
                    const nombre = document.createElement('h3');
                    nombre.innerText = element.nombre;
                   // nombre.classList.add('h3-primary ');
                    generarMantenimiento.appendChild(nombre);
                }
                if (element.texto) {
                    const texto = document.createElement('p');
                    texto.innerText = element.texto;
                    generarMantenimiento.appendChild(texto);
                }

                rowMantenimiento.appendChild(generarMantenimiento);
            });

   
    // Crear un contenedor para el icono y aplicar estilos 
    const iconoContainer = document.createElement('div');
    iconoContainer.classList.add('col-12', 'text-center'); 

    // Agregar el icono al contenedor
    const icono = document.createElement('i');
    icono.classList.add('fa-regular', 'fa-building','fa-3x');
    iconoContainer.appendChild(icono);

   
    rowMantenimiento.appendChild(iconoContainer);
        }
</script>




</body>

</html>