var login = document.getElementById("container");

var btn = document.getElementById("mylogin");
  btn.onclick = function a() 
  {
      login.style.display = "block";
  }
  var span = document.getElementsByClassName("close")[0];
	span.onclick = function() {
    login.style.display = "none";
	}