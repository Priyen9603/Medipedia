<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
        <style>
*{
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'Poppins', sans-serif;
}

body{
    display: flex;
    justify-content: center;
    align-items: center;
    background: url('./94aW\ \(1\).gif')no-repeat;
    width: 100%;
    height: 100vh;
    background-size: cover;
    background-position: center;
    position: relative;
}
.wrapper {
    position: relative;
    width: 300px;
    height: 300px;
    background: transparent ;
    border: 2px solid rgba(255, 255, 255, .5);
    border-radius: 20px; 
    backdrop-filter: blur(20px);
    box-shadow: 0 0 30px Orgba(0, 0, 0, .5); 
    display: flex;
    justify-content: center;
    align-items: center;
}
.input-box {
    position: relative;
    width: 100%;
    height: 50px;
    margin: 30px 0;
}
.btn {
    width: 100%;
    height: 40px;
    background: rgb(47, 134, 163);
    border: none;
    outline: none;
    border-radius: 6px; 
    cursor: pointer;
    font-size: 1em;
    color:#fff;
    font-weight: 500;
}
a{
    color: #fff;
    text-decoration: none;
}
.form-box h2 {
    font-size: 2em;
    color: white;
    text-align: center;
}

 </style>
</head>
<body>
    
<div class="wrapper">
        
    <div class="form-box">
            
         <h2><u>Register as:</u></h2>
        <form><br>
        <div class="input-box">
            <button class="btn"><b><a href="doctor-signup.php" target="_blank">Doctor</a></b></button><br>
        </div>
        <div class="input-box">
            <button class="btn"><b><a href="signup-p.html" target="_blank">Patient</a></b></button>
        </div>

        </form>
    </div>
</div>

    <script src="./script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>