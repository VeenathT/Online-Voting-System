function auth()
{
	var email = document.getElementById("Email").value;
	var password = document.getElementById("Password").value;
	
	if(email == "abc@gmail.com" && password == "123")
	{
		window.location.assign("Home02.html");
		alert("Login successful");
	}
	else
	{
		alert("No user account found");
		return;
	}
	
}