<?php include 'connect.php'; ?>

<html>
<head>
  <title>Delete Prescription</title>
  <style>
    body {
      background-color: powderblue;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }

    h2 {
      text-align: center;
      margin-top: 20px;
      margin-bottom: 20px;
    }

    h4 {
      text-align: center;
      margin-top: 20px;
      margin-bottom: 20px;
    }

      /* Apply basic styling to the table */ 
  table {
  margin-left: auto;
  margin-right: auto;
  margin-bottom: auto;
  max-width: 70%;
  /* border-collapse: collapse; */
  box-shadow: 0 10px 10px rgba(0, 0, 0.3, 0.3);
}

table thead th {
  background-color: lightgray;
  border: 1px solid #ddd;
  padding: 10px;
  text-align: center;
  font-weight: bold;
}

table tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}
/* table tbody tr:nth-child(odd) {
  background-color: cyan;
} */

table td {
  width: 100px;
  height: 50px;
  border: 1px solid #ddd;
  padding: 10px;
  text-align: center;
}

table td:first-child {
  border-left: none;
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}

table td:last-child {
  border-right: none;
  border-top-right-radius: 4px;
  border-bottom-right-radius: 4px;
}

table tr:hover {
  background-color: #f5f5f5;
}

table caption {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
}

    /* Center the text in the "member_id" and "gender" cells */
    table td:first-child,
    table td:nth-child(10) {
      text-align: center;
    }

    /* CSS for the gray button */
    .gray-button {
      display: inline-block;
      padding: 10px;
      background-color: black;
      color: #fff;
      border-radius: 4px;
    }

    .gray-button:hover {
      background-color: #888;
      display: inline-block;
      padding: 10px;
    }

    .button-center {
    display: flex;
    justify-content: center;
    align-items: center;
    
  }

  .button-center button {
    padding: 10px 20px;
    background-color: lightgoldenrodyellow;
    color: black;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    height: 50px;
    width: 100px;
  }

  .button-center button:hover {
    background-color: white;
  }

    /* CSS for responsiveness */
    /* @media screen and (max-width: 768px) {
      .gray-button {
        font-size: 16px;
        padding: 8px 16px;
      }
    }

    @media screen and (max-width: 480px) {
      .gray-button {
        display: block;
        width: 100%;
        margin-bottom: 10px;
      }
    } */
  </style>
</head>

<body>

  <div class="container-fulid">
    <div class="section-title text-center mb-75">
      <h2>Delete Prescriptions</h2>
      <!-- <h4>To delete prescription double click Delete button.</h4> -->
      <a href="home.php"  class="button-center"><button><b>Home</b></button></a>
      <br>
      <br>
      <?php

      /*********************VIEW MEMBER DATA FROM DATABASE**************************** */

      $querysql = "SELECT * FROM addpres WHERE 1=1";
      $result = $conn->query($querysql);

      if ($result) {
        $outmember = mysqli_query($conn, $querysql);
      } else {
        echo "Error executing the query: " . $conn->error;
      }

      if (isset($_GET['id'])) {
        $deleteId = $_GET['id'];
        $deleteQuery = "DELETE FROM addpres WHERE id = '$deleteId'";
        $deleteResult = $conn->query($deleteQuery);

        if ($deleteResult) {
          //echo "Record deleted successfully.";
        } else {
          //echo "Error deleting the record: " . $conn->error;
        }
      }

      ?>

      <table>
        <thead>
          <tr>
          <th></th>
            <th>ID</th>
            <th>Name</th>
            <th>Prescription</th>
            <th>File</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if (mysqli_num_rows($outmember) > 0) {
            while ($row = mysqli_fetch_assoc($outmember)) {
          ?>
              <tr>
                <td><a href="delete-prescription.php?id=<?php echo $row["id"]; ?>" class="gray-button">DELETE</a></td>
                <td><?php echo $row["id"] ?></td>
                <td><?php echo $row["pname"] ?></td>
                <td><?php echo $row["pres"] ?></td>
                <td><?php echo $row["filetxt"] ?></td>
                <td><?php echo $row["createdate"] ?></td>
              </tr>
          <?php
            }
          } else {
            echo "No results found.";
          }
          ?>
        </tbody>
      </table>

    </div>
  </div>
</body>
</html>
