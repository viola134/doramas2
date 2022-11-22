function verify(f) {
    if (f.login.value == "") {
      //alert("Введите логин!");
      document.getElementById("massage").innerHTML = "Enter your login!";
      return false;
    }
    var pass = f.pass.value;
    if (pass == "") {
      //alert("Введите логин!");
      document.getElementById("massage").innerHTML = "Enter your login!";
      return false;
    }
    var reg = /^\w{3,8}$/;
    if (!reg.test(pass)) {
      document.getElementById("massage").innerHTML = "Enter right password!";
      return false;
    }
    return true;
  }