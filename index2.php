<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title> 
    <link rel="stylesheet" href="medipedia.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <style>
      .popup {
        position: absolute;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        visibility: hidden;
        opacity: 0;
        transition: visibility 0s, opacity 0.3s;
        left: 600px;
        bottom: -35px;
      }

      .popup:before {
        content: "";
        position: absolute;
        top: -10px;
        left: 50%;
        transform: translateX(-50%);
        border-width: 0 10px 10px;
        border-style: solid;
        border-color: transparent transparent #ddd;
      }
      
      li:hover .popup {
        visibility: visible;
        opacity: 1;
      }
    </style>
  </head>
  <body>
    <nav>
      <div class="menu">
        <div class="logo">
          <a href="home.php">Medipedia</a>
        </div>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="facts.html">Medicine Facts</a>
          <div class="popup">Here are some fascinating facts about medicine...</div>
        </li>
          <li>
            <select onchange="handlePrescriptionDropdown(this)">
              <option value="Prescription" disabled selected>Prescription</option>
              <option value="add-prescription">Add Prescription</option>
              <option value="view-prescription">View Prescription</option>
              <option value="delete-prescription">Delete Prescription</option>
            </select>
          </li>
          <li><a href="contact.html" target="_blank">Contact Us</a></li>
          <li><a href="About.html">About Us</a></li>
        </ul>
      </div>
    </nav>
    <!-- <div class="img"></div>
     <div class="center">
      <div class="title">Promoting Wellness and </div>
      <div class="sub_title">Healing Every Step of the Way</div>
      <div class="btns">
        <a href="login.php" target="_blank"><button>Login</button></a>
        <a href="main_signup.php" target="_blank"><button>Sign Up</button></a> -->
      </div>
    </div> 
    
    <script>
      function handlePrescriptionDropdown(selectElement) {
        var selectedValue = selectElement.value;
        if (selectedValue === 'add-prescription') {
          window.open('add-prescription.php', '_blank');
          location.reload();
          // window.location.href = 'add-prescription.php';
        } else if (selectedValue === 'view-prescription') {
          window.open('view-prescription.php', '_blank');
          location.reload();
            // window.location.href = 'view-prescription.php';
        } else if (selectedValue === 'delete-prescription') {
          window.open('delete-prescription.php', '_blank');
          location.reload();
            // window.location.href = 'delete-prescription.php';
          
        }
      }
    </script>
  </body>
</html>
