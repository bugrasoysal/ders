
<?php
/* @var $this yii\web\View */
$this->title = 'WYP Ders Application';
use kouosl\ders\controllers\backend\DerssController;
use kouosl\ders\controllers\frontend\DefaultController;
use kouosl\ders\models\Derss;
use kouosl\ders\models\DerssSearch;

?>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>

<div class="site-index">


	
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

<?php
$sql=Yii::$app->db->createCommand("select ad from derss")->query();
?>

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


Ders:
<form action="" method="post">
<input id="numb" name='derss' type="text">
<input type="submit" name='submit' onclick="addRow()"></input>
<input type="button" value="Sil" onClick='deleteRow()' border=0    style='cursor:hand'>
</form>



 <?php
  
    if(isset($_POST['submit']))
	{
		 $val=$_POST['derss'];
	     Yii::$app->db->createCommand()->insert('derss', ['id'=>'3','ad'=>'c','icerik'=>'c'])->execute();
	}
  
 ?>






<SCRIPT language="javascript">

 function addRow(){

 var x;
 x = document.getElementById("numb").value;
 var table = document.getElementById("myTable");
 var row = table.insertRow(-1);
 var cell1 = row.insertCell(-1);
 cell1.innerHTML = x ;
}

function deleteRow() {
    document.getElementById("myTable").deleteRow(-1);

}

</script>

</div>

