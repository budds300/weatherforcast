<?php
require 'database.php';
if (isset($_GET['delete'])){
    
    $uid=$_GET['delete'];
    $sql = " DELETE from register where id=?";
    $stmt= $conn->prepare($sql);
    $stmt->bind_param('s',$uid);
    $stmt->execute();
    $stmt->close();
    echo '<script>alert("Successfully Deleted")</script>'  ;
    echo '<script>window.location="admindashboard.php"</script>';

}

?>