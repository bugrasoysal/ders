<?php
/* @var $this yii\web\View */
$this->title = 'WYP Ders Application';
?>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<!-- CSS Code -->
<style type="text/css" scoped>
table.GeneratedTable {
width:50%;
background-color:#FFFFFF;
border-collapse:collapse;border-width:1px;
border-color:#000000;
border-style:solid;
color:#000000;
}
table.GeneratedTable td, table.GeneratedTable th {
border-width:1px;
border-color:#000000;
border-style:solid;
padding:6px;
}
table.GeneratedTable thead {
background-color:#6666FF;
}
</style>

<!-- HTML Code -->


<br>
<table class="GeneratedTable" id="myTable">
<thead>
<tr>
<th>Dersler</th>
</tr>
</thead>
<tbody>
<tr>
<td>Matematik 1</td>
</tr>
<tr>
<td>Fizik 1</td>
</tr>
<tr>
<td>Türkçe 1</td>
</tr>



</tr>
</tbody>
</table>
<br>
<div 
<p>Dersler: <input type="text" id="ders"></p>

</div>
<input type="button" value="Ekle" onClick="addRow()" border=0       style='cursor:hand'>
<input type="button" value="Sil" onClick='deleteRow()' border=0    style='cursor:hand'>



<SCRIPT language="javascript">


var ders=$scope.name;
function addRow(){
 var table = document.getElementById("myTable");
 var row = table.insertRow(-1);
 var cell1 = row.insertCell(-1);
 cell1.innerHTML =ders ;
}

function deleteRow() {
    document.getElementById("myTable").deleteRow(-1);

}

</script>