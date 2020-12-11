<?php

include('koneksi.php');


$sql = "SELECT * FROM pajak";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $link_delete = "<a class='hapusData' href='delete.php?id=".$row['id']."'>Delete</a>";
        $link_update = "<a class='updateData' href='update.php?id=".$row['id']."' id='".$row['id']."' nama='".$row['nama']."' swdkllj='".$row['swdkllj']."'
        administrasi='".$row['administrasi']."' denda='".$row['denda']."' pajak='".$row['pajak']."' >Update</a>";
        
        echo"<tr><td>".$row['id'].
        "</td><td>".$row['nama'].
        "</td><td>"."Rp.".$row['swdkllj'].
        "</td><td>"."Rp.".$row['administrasi'].
        "</td><td>"."Rp.".$row['denda'].
        "</td><td>".$row['pajak']."%".
        "</td><td>"
        .$link_update." | ".$link_delete."</td></tr>";

    }
}

?>