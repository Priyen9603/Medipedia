<?php include 'index2.php' ?>

<?php



$error = array(
    1 => "Username is required",
    2 => "Password is required",
    3 => "Invalid username or password");



if (empty($_POST["username"])) {
   redirectToIndex(1);
}
if (empty($_POST["password"])) {
    redirectToIndex(2);
}
?>

<?php include 'connect.php'; ?>
<?php

if (!empty($_POST["username"]) && !empty($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Assuming your table is named 'users' with columns 'username' and 'password'
    $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
           
            $_SESSION["username"] = $username;
            header("Location:home.php");
            //header("Location:index2.php?error=".$errorNumber);
           
        } else {
            redirectToIndex(3);
        }
    } else {
        echo "Query error: " . mysqli_error($conn);
    }
}
function redirectToIndex($errorNumber)
{
    header("Location:index.php?error=".$errorNumber);
    exit();
}
?>
