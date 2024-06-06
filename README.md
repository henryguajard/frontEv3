# :house: :purple_square: energy and Water :purple_square: 
##  :purple_square:  Proyecto evaluacion3 instituto profesional san sebastian. :purple_square:
##  :purple_square:  Grupo ciisa_forever, integrantes: Henry Guajardo, Oscar Bossans, Claudia Concha, Claudio Pimentel. :purple_square:
![](https://github.com/henryguajard/frontEv3/blob/main/image/imageReadme/energy1.png)
![](https://github.com/henryguajard/frontEv3/blob/main/image/imageReadme/energy2.png)
![](https://github.com/henryguajard/frontEv3/blob/main/image/imageReadme/energy3.png)
![](https://github.com/henryguajard/frontEv3/blob/main/image/imageReadme/energy4.png)

<p align="center">
  <img src="https://github.com/henryguajard/frontEv3/blob/main/image/imageReadme/energy5.png" alt="Energy 5" width="200"/>
  <img src="https://github.com/henryguajard/frontEv3/blob/main/image/imageReadme/energy6.png" alt="Energy 6" width="200"/>
  <img src="https://github.com/henryguajard/frontEv3/blob/main/image/imageReadme/energy7.png" alt="Energy 7" width="200"/>
</p>

 Este proyecto correguimos un sitio web llamado Energy and water, el cual necesitaba ser reestructurado y mejorado en su totalidad. Ahora es dinamico y amigable con el usuario.
Lo que realizamos a lo largo del proyecto fue lo siguiente: :open_book:

- Diseñar y crear un componente de tarjeta de servicio reutilizable con el framework. Este componente debe incluir una imagen, título, descripción y un botón de "contáctanos" lo lleva al formulario de contacto, rellenando el campo “servicio” por el seleccionado.
- Implementar un componente de carrusel de testimonios con el framewoek que se adapte tanto a dispositivos móviles como a escritorio, considerando la accesibilidad y la usabilidad.
- Integrar un sistema de gestión de contenido (CMS) con la landing page creada con el framework, asegurando que los componentes diseñados sean fáciles de administrar por el equipo de contenido. Puede trabajar con la herramienta Postman para administrar el contenido.
- Redactar una guía de buenas prácticas para el desarrollo con el framework, que incluya convenciones de nomenclatura, estructura de archivos y uso de variables, y recomendaciones para garantizar la accesibilidad y la usabilidad.
-Utilizar Git y GitHub para gestionar el desarrollo colaborativo de la landing page, creando ramas para cada funcionalidad, realizando revisiones de código (pull requests) y documentando los cambios en cada commit. Incluya en el archivo readme.
- Diseñar e implementar una navegación interactiva y un formulario de contacto en la landing page utilizando componentes del framework, asegurando que sean intuitivos y centrados en el usuario.
-Optimizar el rendimiento de la landing page asegurando que las imágenes estén comprimidas y se carguen de manera eficiente.
-Incorporar JavaScript para gestionar la interactividad avanzada en la landing page, utilizando componentes externos del framework para el diseño visual.
- Implementar las secciones “nosotros”, “servicios” y “preguntas frecuentes” en la landing page que consuma datos de una API (interna o externa) y los muestre dinámicamente utilizando el framework para el diseño.
-Asegurar que todos los formularios de la landing page (contacto) incluyan medidas de seguridad como validación del lado del cliente y del servidor, y protección contra ataques de robots
- Organizar y liderar una sesión de retrospectiva con el equipo de desarrollo para identificar áreas de mejora en el uso del framework y la gestión del proyecto, y proponer un plan de acción para la próxima iteración del desarrollo.
### :closed_book: tecnologias utilizadas:
- HTML5
- CSS
- PHP
- GIT
- GITHUB
- JAVASCRIPT

### :closed_book: Framework o librerias:
 - BOOTSTRAP 5
 - SWEETALERT
 ### :closed_book: Consumo de APIS:
 - google reCaptcha
### :closed_book: Para crear el formulario lo isimos de la siguente manera:
### :closed_book: y lo validamos de la siguente manera:
```html
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
 

