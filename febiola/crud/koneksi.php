<?php 
$conn = mysqli_connect("localhost","root","","latihan");
function query ($query ){
    global $conn ;
    //bikin query 
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
