// JavaScript Document

function validar(valor){
	document.form.accion.value=valor;



		if(document.form.fecha.value=="")
	{
		alert("Debe seleccionar una fecha");
		document.form.fecha.focus();
		return false;
	} 

		if(document.form.barbero.value==0)
	{
		alert("Debe seleccionar un barbero");
		document.form.barbero.focus();
		return false;
	} 
	if(document.form.hora.value==0)
	{
		alert("Debe seleccionar la hora");
		document.form.hora.focus();
		return false;
	}
	if(document.form.servicio.value==0)
	{
		alert("Debe seleccionar el servicio");
		document.form.servicio.focus();
		
		return false;
	}

document.form.submit();


	
	}


	
	
		
		

	
