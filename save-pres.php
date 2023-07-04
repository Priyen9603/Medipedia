<?php include 'connect.php' ?>
<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pname = $_POST['pname'] ?? '';
    $pres = $_POST['pres'] ?? '';
    $filetxt = $_POST['filetxt'] ?? '';
    $createdate = $_POST['createdate'] ?? '';
   

    if (isset($_POST["hiddenid"]) && $_POST["hiddenid"] != 0) {
        $id = $_POST["hiddenid"];

        $query = "UPDATE addpres 
                  SET pname = '$pname', 
                  pres = '$pres', 
                  filetxt = '$filetxt', 
                  createdate = '$createdate', 
                      
                  WHERE id = $id";

        if ($conn->query($query) === TRUE) {
            echo '<script>alert("Student Record updated Successfully")</script>';
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        $query = "INSERT INTO addpres (pname, pres, filetxt, createdate)
                  VALUES ('$pname', '$pres', '$filetxt', '$createdate')";

if ($conn->query($query) === TRUE) {
    echo '<script>alert("Patient Precription Added Successfully")</script>';
    header("Location:view-prescription.php");
    
} else {
    echo "Error executing INSERT query: " . $conn->error;
}
       
    }
}



?>