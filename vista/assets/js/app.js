$(document).ready(function(){
	$("#loginForm").bind("submit", function(){
		$.ajax({
			type: $(this).attr("method"),
			url: $(this).attr("action"),
			data: $(this).serialize(),
			beforeSend:function(){
				$("#loginForm button[type=submit]").html("enviando.....");
				$("#loginForm button[type=submit]").attr("disabled","disabled");
			},
			success: function(response){
				//console.log(response);
				if (response.estado == "true") {
					// success notification
					$("body").overhang({
  					type: "success",
  					message: "Bienvenido.",
  					callback:function(){
  						self.location = "admin.php";
  					 }
					});
				}else{
					// error notification
					$("body").overhang({
  					type: "error",
  					message: "Usuario o contraseña no validos."
					});
				}

				$("#loginForm button[type=submit]").html("Ingresar");
				$("#loginForm button[type=submit]").removeAttr("disabled");
			},
			error: function(){
				// error notification
					$("body").overhang({
  					type: "error",
  					message: "Usuario o contraseña no validos."
					});

				$("#loginForm button[type=submit]").html("Ingresar");
				$("#loginForm button[type=submit]").removeAttr("disabled");
			}
		});
		return false;
	});
});
