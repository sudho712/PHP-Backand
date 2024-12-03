<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bootstrap Modal CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="container my-3">
        <h1 class="text-center">PHP CRUD Operation using Bootstrap Modal</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-dark mb-3" data-bs-toggle="modal" data-bs-target="#completeModel">
            Add New User
        </button>

        <!-- Data Table -->
        <div id="displayDataTable"></div>

        <!-- Modal -->
        <div class="modal fade" id="completeModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="completeName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="completeName" placeholder="Enter your Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="completeEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="completeEmail" placeholder="Enter your Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="completeMobile" class="form-label">Mobile</label>
                            <input type="number" class="form-control" id="completeMobile" placeholder="Enter your Mobile" required>
                        </div>
                        <div class="mb-3">
                            <label for="completePlace" class="form-label">Place</label>
                            <input type="text" class="form-control" id="completePlace" placeholder="Enter your Place" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="addUser()">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Display Data Function
        function displayData() {
            $.ajax({
                url: "display.php",
                type: 'post',
                data: {
                    displaySend: true
                },
                success: function(data) {
                    $('#displayDataTable').html(data);
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching data: " + error);
                }
            });
        }

        // Add User Function
        function addUser() {
            var nameAdd = $('#completeName').val().trim();
            var emailAdd = $('#completeEmail').val().trim();
            var mobileAdd = $('#completeMobile').val().trim();
            var placeAdd = $('#completePlace').val().trim();

            if (!nameAdd || !emailAdd || !mobileAdd || !placeAdd) {
                alert("All fields are required!");
                return;
            }
            // Delete Record
            function deleteUser(deleteid) {
                $.ajax({
                    url: 'delete.php',
                    type: 'POST',
                    data: {
                        deleteSend: deleteid
                    },
                    success: function(data, status) {
                        displayData(); // Refresh the table after deletion
                    },
                    error: function(xhr, status, error) {
                        console.error("Error: " + error);
                        alert("Failed to delete the record.");
                    }
                });
            }


            $.ajax({
                url: "insert.php",
                type: "POST",
                data: {
                    nameSend: nameAdd,
                    emailSend: emailAdd,
                    mobileSend: mobileAdd,
                    placeSend: placeAdd,
                },
                success: function(response) {
                    alert("User added successfully!");
                    displayData();
                    $('#completeModel').modal('hide');
                    $('#completeName').val('');
                    $('#completeEmail').val('');
                    $('#completeMobile').val('');
                    $('#completePlace').val('');
                },
                error: function(xhr, status, error) {
                    console.error("Error: " + error);
                    alert("Something went wrong. Please try again.");
                }
            });
        }

        // Load data when the page is ready
        $(document).ready(function() {
            displayData();
        });
    </script>
</body>

</html>