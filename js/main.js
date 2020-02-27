

function deleteDates(id) {
  alert
  var url='Logica/delete.php';
  $.ajax({
    type: 'POST',
    url: url,
    data: 'idIdEmpresa=' + id,
    success: function (repsonse) {
      alert(response); 
     
    } 
  });
}

function elegir(id) {
  var respuesta = confirm("Confirmar acción.")
         
if(respuesta){
  alert("Usted aceptó.");
   deleteDates(id);
   location.reload(2);
}
  
else
  alert("Usted no aceptó."); return;
 
  }
  

function editDates(id) {
  var url='Logica/select.php';
  document.getElementById('formi').style.display='block';
  document.getElementById('form').style.display='none';
  $.ajax({
    type:"POST",
    data:"idIdEmpresa=" + id,
    url: url,
    dataType: "json",
    success:function(r){
      console.log(r);
      datos=r;
      $('#idIdEmpresa2').val(datos['idIdEmpresa2']);
      $('#idRazonSocial2').val(datos['idRazonSocial2']);
      $('#idIdDocumento2').val(datos['idIdDocumento2']);
      $('#idNDocumento2').val(datos['idNDocumento2']);
      $('#idTelefono2').val(datos['idTelefono2']);
      $('#idCelular2').val(datos['idCelular2']);
      $('#idCorreo2').val(datos['idCorreo2']);
      $('#idTPersona2').val(datos['idTPersona2']);
      $('#idActivo2').val(datos['idActivo2']);
    }
  });
}