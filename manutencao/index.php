<?php

include "_head.php";

include 'model.php';

include 'list.php';

include '../templates/footer.php';




?>
<script>
	function atualizaOdomVtr(str) {
  if (str == "") {
    document.getElementById("odom").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("odom").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","getVtrKm.php?idvtr="+str,true);
    xmlhttp.send();
  }
}

</script>