//*********************************************************************************************************************************
// Funciones del LOGIN AL SISTEMA y RECUPERACION DE CLAVE DE ACCESO
//*********************************************************************************************************************************
function fncValidarLoginUsuario(frm){
	try{
		var username = trim(frm.username.value);
		var password = trim(frm.password.value);
		var msg = "OCURRIERON LOS SIGUIENTES ERRORES:\n\n";
		if(username==""){ alert(msg+"- No ingreso su USUARIO de ingreso."); frm.username.value=''; frm.username.focus(); return false; }
		if(password==""){ alert(msg+"- No ingreso su CLAVE de ingreso."); frm.password.value=''; frm.password.focus(); return false; }
		return true;
	}catch(ex){
		alert(ex.description); return false;
	}
}