// fetch('assets/json/servicio.json')
/*
fetch('http://localhost/back-eva3/v1/categoria_servicio/', {
    method: 'GET',
    headers: {
        'Authorization': 'Bearer get',
        'Content-Type': 'application/json'
    }
})
.then(respuesta => {
    //.ok es una forma de simular la forma del API, por eso lo tenemos como variable
    if (!respuesta.ok) {
        throw new Error('Error al recuperar');
    }
    return respuesta.json();
})
.then(salida => {
    console.log(salida.data);
    const anchoColumnas = 12 / salida.data.length;
    const rowServicios = document.getElementById('rowServicios');
    rowServicios.innerHTML = '';
    salida.data.forEach(element => {
        const columna = document.createElement('div');
        columna.classList.add('col-md-' + anchoColumnas);
        const tarjeta = document.createElement('div');
        tarjeta.classList.add('card');
        const tarjetaHeader = document.createElement('div');
        tarjetaHeader.classList.add('card-header');
        const tarjetaBody = document.createElement('div');
        tarjetaBody.classList.add('card-body');
        const tarjetaImagen = document.createElement('div');
        tarjetaImagen.classList.add('card-imagen');
        tarjetaImagen.classList.add('mx-auto');
        const tarjetaFooter = document.createElement('div');
        tarjetaFooter.classList.add('card-footer');
        console.log (element.id);
        //trabajo con los datos
        tarjetaHeader.innerText = element.nombre;
        tarjetaBody.innerText = element.texto;
        tarjetaImagen.innerHTML = '<img src="'+element.imagen+'" class="image-serv"/>'
        // console.log(element.texto.esp);
        tarjetaFooter.innerHTML = '<a href="#contacto"><button onclick="cambiarValor(`'+element.id+'`)">Contáctanos</button></a>';
        tarjeta.appendChild(tarjetaHeader);
        tarjeta.appendChild(tarjetaImagen);
        tarjeta.appendChild(tarjetaBody);
        tarjeta.appendChild(tarjetaFooter);
        columna.appendChild(tarjeta);
        rowServicios.appendChild(columna);

       });

   console.log(rowServicios);
})
.catch(error => {
    console.error('Error al obtener: ', error);
});

function cambiarValor(valorSelect) {
    const selectElement = document.getElementById('fs_servicios');
    selectElement.value = valorSelect; // Cambia a la opción deseada
};*/ 

function cambiarValor(valorSelect) {
    const selectElement = document.getElementById('fs_servicios');
    selectElement.value = valorSelect; // Cambia a la opción deseada
};
