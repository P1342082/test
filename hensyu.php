<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta content= "text/javascript" />
</head>
<body>
<table>
 <tr>
  <td>a1</td>      
  <td>a2</td>      
 </tr>
 <tr>
  <td>a3</td>      
  <td>a4</td>      
  </tr> 
 <tr>
  <td>a5</td>      
  <td>a6</td>      
  </tr>    
</table>
<div id="result"></div>
<script>     
$('tr').click(function (event) {
  $("#result").html($(this).index() + 1 + "行目をクリックしました。");
var rowIndex = this.rowIndex + 1;
    console.log(rowIndex);         
});
</script>
</body>
</html>