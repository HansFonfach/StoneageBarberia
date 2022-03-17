function validar(valor){
  document.form.accion.value=valor;
  if(document.form.barbero.value=="")
	{
		alert("Debe seleccionar un barbero");
		document.form.barbero.focus();
		return false;
	}
  if(document.form.hora.value=="")
	{
		alert("Debe seleccionar la hora");
		document.form.hora.focus();
		return false;
	}
  if(document.form.servicio.value=="")
	{
		alert("Debe seleccionar el servicio");
		document.form.servicio.focus();
		return false;
	}
	
  document.form.submit();
}

