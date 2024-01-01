
<?php 
include_once "../templates/header.php";
include "model.php" 
;?>


<div class='btn btn-light shadow-sm' data-bs-toggle="modal" data-bs-target="#insert">
    <i class="fas fa-plus-circle"></i>
</div>
<ul class="navbar-nav">
<li class="nav-item me-2">
    <a href="/pessoas" class="btn btn-light"><i class="fas fa-users"></i> Pessoas</a>
</li>
<li class="nav-item me-2">
    <input class="form-control" type="text" placeholder="Pesquisar pessoas"  name="search_text" id="search_text">
</li>
<li class="nav-item me-2">
    <span class="btn btn-light">Número de militares ativos: <b><?=mysqli_num_rows($result_pessoas)?></b></span>
</li>

</ul>
</nav>
</div> 

<div class="col-sm">
<?php 
echo "<div id='result'></div>";
include 'insert.php';
include '../templates/footer.php';

?>

<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"card.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>