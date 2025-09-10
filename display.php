<?php
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crud operation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <div class="container my-5">
    <button class="btn btn-primary"><a class="text-light" href="user.php">Add User</a> </button>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">SL No</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Mobile</th>
          <th scope="col">Password</th>
          <th scope="col">Operations</th>
        </tr>
      </thead>
      <tbody>

        <?php
        $sql = "SELECT * FROM crud";
        $result = mysqli_query($con, $sql);
        $i = 1;
        if ($result) {
          while ($row = mysqli_fetch_array($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $mobile = $row['mobile'];
            $password = $row['password'];

            echo '<tr>
          <th scope="row">' . $i . '</th>
          <td>' . $name . '</td>
          <td>' . $email . '</td>
          <td>' . $mobile . '</td>
          <td>' . $password . '</td>
          <td>
            <button class="btn btn-primary"><a class="text-light" href="update.php?updateid=' . $id . '">Update</a></button>
            <button class="btn btn-danger"><a class="text-light" href="delete.php?deleteid=' . $id . '">Delete</a></button>
          </td>
        </tr>';
            $i++;
          }
        }

        ?>
      </tbody>
    </table>

  </div>

</body>

</html>