function Consultar() 
{
  id = $("#id").val();
  var parametros = 
  {
    "boton" :  "Consultar",
    "id" : id 
  };
  $.ajax(
  {
    data:  parametros,
    dataType: 'json',
    url: '../controller/controladorC.php',
    type: 'post',
    beforeSend: function() 
    {alert("enviando");}, 
    error: function()
    {alert("Error");},
    complete: function() 
    {alert("¡Listo!");},
    success:  function (valores) 
    {
      alert(valores.nombre);
      $("#nombre").val(valores.nombre);
    }
  }) 
}

function Registrar() 
{
  nombre = $("#nombre").val();
  var parametros = 
  {
    "boton" : "Registrar",
    "nombre" : nombre,
  };
  $.ajax(
  {
    data:  parametros,
    url:   '../controller/controladorC.php',
    type:  'post',
    beforeSend: function() 
    {alert("enviando");}, 
    error: function()
    {alert("Error");},
    complete: function() 
    {alert("¡Listo!");},
    success:  function () {
      alet("se mandó correctamente");
    } 
  }) 
}

function Eliminar() 
{
  id = $("#id").val();

  var parametros = 
  {
    "boton" : "Eliminar",
    "id": id,    
  };
  $.ajax(
  {
    data:  parametros,
    url:   '../controller/controladorC.php',
    type:  'post',
    beforeSend: function() 
    {alert("enviando");}, 
    error: function()
    {alert("Error");},
    complete: function() 
    {alert("¡Listo!");},
    success:  function () {
      alet("se mandó correctamente");
    } 
  }) 
}

function Modificar() 
{
  id = $("#id").val();
  nombre = $("#nombre").val();
  var parametros = 
  {
    "boton" : "Modificar",
    "id": id,
    "nombre" : nombre,
    
    
  };
  $.ajax(
  {
    data:  parametros,
    url:   '../controller/controladorC.php',
    type:  'post',
    beforeSend: function() 
    {alert("enviando");}, 
    error: function()
    {alert("Error");},
    complete: function() 
    {alert("¡Listo!");},
    success:  function () {
      alet("se mandó correctamente");
    } 
  }) 
}