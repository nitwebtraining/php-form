<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information View</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css">
</head>

<body style="background: #f4f6f9;">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header text-white text-center py-3" style="background:#0d6efd;">
                        <h3 class="mb-0">Student Information</h3>
                    </div>

                    <div class="card-body p-4">

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Name:</strong> <?php echo htmlspecialchars($_POST['name']); ?></li>
                            <li class="list-group-item"><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></li>
                            <li class="list-group-item"><strong>Phone:</strong> <?php echo htmlspecialchars($_POST['phone']); ?></li>
                            <li class="list-group-item"><strong>Address:</strong> <?php echo htmlspecialchars($_POST['address']); ?></li>
                        </ul>

                        <div class="text-center mt-4">
                            <a href="./index.php" class="btn btn-primary btn-lg w-100">Back to Form</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
