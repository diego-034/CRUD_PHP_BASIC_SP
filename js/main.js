function obtenDatos(id){
    $.ajax({
      type:"POST",
      data:"idIdEmpresa=" + id,
      url:"Logica/obtenerRegistro.php",
      success:function(r){
        datos=jQuery.parseJSON(r);

        $('#idRazonSocial').val(datos['idRazonSocial']);
        $('#idIdDocumento').val(datos['idIdDocumento']);
        $('#idNDocumento').val(datos['idNDocumento']);
        $('#idTelefono').val(datos['idTelefono']);
        $('#idCelular').val(datos['idCelular']);
        $('#idCorreo').val(datos['idCorreo']);
        $('#idTPersona').val(datos['idNDocumento']);
        $('#idActivo').val(datos['idActivo']);
      }
    });
  }