function fechaActual(){
    var hoy = new Date();
    var dd = hoy.getDate();
    var mm = hoy.getMonth() + 1; //January is 0!
    var aaaa = hoy.getFullYear();

    if (dd < 10) {
    dd = '0' + dd;
    }

    if (mm < 10) {
    mm = '0' + mm;
    } 
        
    today = aaaa + '-' + mm + '-' + dd;
    $('#fecha-medicion').prop("max", today);
}


$('#btn-agregar').click(function(){
    $.ajax({
        type: 'POST',
        url: 'pozos.php',
        success: function(response){
            console.log(response);
            alert('Pozo agregado satisfactoriamente con el id: ' + response);
            recuperarPozos();
            recuperarIdsPozos();
        }
    })
})

function recuperarPozos(){
    $.ajax({
        url: 'recuperarPozos.php',
        type: 'POST',
        success: function(response){
            $('#cant-pozos').text('Actualmente hay ' + response + ' pozos registrados.');
        }
    })
}

function recuperarIdsPozos(){
    $.ajax({
        url: 'recuperarLosPozos.php',
        type: 'POST',
        success: function(response){
            if(!response === false){
                console.log(response);
                let pozos = JSON.parse(response);
                let template = '';
                pozos.forEach(pozo => {
                    $('#pozos').append(`<option value="${pozo.id}">Pozo ${pozo.id}</option>`)
                })
                
            }
            
        }
    })
}

