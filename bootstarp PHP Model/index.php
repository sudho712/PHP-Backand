<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php bootstrap model CURD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>


    <!-- Modal -->
    <div class="modal fade" id="completeModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Add Form detail  -->
                    <div class="mb-3">
                        <label for="completeName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="completeName" placeholder="Enter your Name">
                    </div>

                    <div class="mb-3">
                        <label for="completeEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="completeName" placeholder="Enter your Email">
                    </div>

                    <div class="mb-3">
                        <label for="completeMobile" class="form-label">Mobile</label>
                        <input type="number" class="form-control" id="completeMobile" placeholder="Enter your Mobile">
                    </div>
                    <div class="mb-3">
                        <label for="completeName" class="form-label">Place</label>
                        <input type="text" class="form-control" id="completeName" placeholder="Enter your Place">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-3">
        <h1 class="text-center">PHP CRUD Operation using bootstrap Model</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#completeModel">
            Add New User
        </button>
    </div>
</body>

</html>