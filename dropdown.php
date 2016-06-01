<?php
mysql_connect("localhost","root","joys");
mysql_select_db("students");

//query
//$sql=mysql_query("SELECT id,name FROM table");
if(mysql_num_rows($sql)){
$select= '<select name="country">';
while($rs=mysql_fetch_array($sql)){
      $select.='<option value="'.$rs['cid'].'">'.$rs['cname'].'</option>';
  }
}
$select.='</select>';
echo $select;
?>