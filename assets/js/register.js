$(document).ready(function(){
	
	$("#hideLogin").click(function()
	{
		console.log("login is ready");
		$("#loginForm").hide();
		$("#registerForm").show();
	});
	
	$("#hideRegister").click(function()
	{
		console.log("register is ready");
		$("#loginForm").show();
		$("#registerForm").hide();
	});	
});