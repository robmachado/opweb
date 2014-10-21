<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#buscaprod").click(function() {
    var codprod = op.elements["prod_cod"].value;
    var dataToBeSent = {cod: codprod};
    var url = "demoajax.php";
    $.post(url, dataToBeSent, function(data, textStatus) {
        //data contains the JSON object
        //textStatus contains the status: success, error, etc
        alert(data);
    });
    //$.post("demoajax.php",{ cod: codprod },
    //function(data,status){
    //   alert("Data: " + data + "\nStatus: " + status);
    //   if (status == 'success') {
    //       alert('Sucesso');
    //   } else {
    //       alert('fracasso');
    //   }
      
    //}
    //);
  });
});
</script>
</head>
<body>
    <form name="op" id="op">
    <label for="prod_cod">Código do Produto</label><br>
    <input type="text" id="prod_cod" name="prod_cod" value="" size="15" placeholder="Código do Produto">
    <input type="button" id="buscaprod" name="buscaprod" value="Busca" /><br>
    </form>
</body>
</html>
