<?php
include 'connect.php'; // Ensure 'connect.php' establishes a valid connection to the database

if (isset($_POST['displaySend'])) {
    $table = '<table class="table">
  <thead class="table-dark">
    <tr>
        <th scope="col">Sl no.</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Mobile</th>
        <th scope="col">Place</th>
        <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>'; // Open tbody for table rows

    $sql = "SELECT * FROM curd"; // Query to fetch data from the `curd` table
    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $mobile = $row['mobile'];
            $place = $row['place'];
            
            $table .= '<tr>
                <td scope="row">' . $id . '</td>
                <td>' . $name . '</td>
                <td>' . $email . '</td>
                <td>' . $mobile . '</td>
                <td>' . $place . '</td>
                <td>
                    <button class="btn btn-primary" onclick="editUser(' . $id . ')">Edit</button>
                    <button class="btn btn-danger" onclick="deleteUser(' . $id . ')">Delete</button>
                </td>
            </tr>';
        }
    } else {
        $table .= '<tr><td colspan="6">No records found</td></tr>';
    }

    $table .= '</tbody></table>'; // Close tbody and table
    echo $table;
}
?>
