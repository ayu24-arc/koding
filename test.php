<?php
//echo "#hello from php^";
//die();

echo "#";
$con = mysqli_connect("localhost","root","","testtest");
if(!$con){
 die("Koneksi error bosque");
}

$query = mysqli_query($con,"select * from testtest order by id desc limit 1");
if(mysqli_num_rows($query) > 0){
  while($data = mysqli_fetch_array($query)){
  if($data["helm"] == "OK" && $data["coverall"] == "OK"){
     echo "0";
  }else{
     echo "1";
  }
  }

}
echo "^";

