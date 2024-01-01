
function atualizaOdomVtr(str) {
  if (str == "") {
    document.getElementById("odomentr").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("odomentr").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","buscas.php?idvtr="+str,true);
    xmlhttp.send();
  }
};

  function mudarFotoMotorista(str) {
  if (str == "") {
    document.getElementById("img").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("img").innerHTML = this.responseText;
  }
  xhttp.open("GET", "buscas.php?codmil="+str);
  xhttp.send();
};

 function mostrarFotoVtr(str) {
  if (str == "") {
    document.getElementById("vtr").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("vtr").innerHTML = this.responseText;
  }
  xhttp.open("GET", "buscas.php?id="+str);
  xhttp.send();
}



