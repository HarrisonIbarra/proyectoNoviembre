document.getElementById('formulario').addEventListener('submit', function(e){
    e.preventDefault();

    let formulario = new FormData(document.getElementById('formulario'));
    fetch('registrar.php',{
        method: 'POST',
        body : formulario
    })
    .then(res => res.json())
    .then(data => {
        if (data =='true'){
            document.getElementById('Nombre').value = '';   
            document.getElementById('Apellidos').value = '';
            document.getElementById('Edad').value = '';
            document.getElementById('Direccion').value = '';  
            document.getElementById('Tipo_Documento').value = ''; 
            document.getElementById('Numero_Documento').value = '';
            document.getElementById('Telefono').value = ''; 
            document.getElementById('Tipo_Contrato').value = ''; 
            document.getElementById('Sueldo').value = '';
            document.getElementById('Cargo').value = '';  
            alert('Empleado registrado correctamente');
            }else{
                console.log(data);
            }
    })
});