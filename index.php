<?php
    $name   = $email   = $phone   = $address   = "";
    $errors = [];

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        // Name validation
        if (empty($_POST["name"])) {
            $errors['name'] = "Name is required";
        } else {
            $name = htmlspecialchars(trim($_POST["name"]));
        }

        // Email validation
        if (empty($_POST["email"])) {
            $errors['email'] = "Email is required";
        } elseif (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Invalid email format";
        } else {
            $email = htmlspecialchars(trim($_POST["email"]));
        }

        // Phone validation
        if (empty($_POST["phone"])) {
            $errors['phone'] = "Phone number is required";
        } elseif (strlen($_POST["phone"]) < 10) {
            $errors['phone'] = "Phone must be at least 10 digits";
        } else {
            $phone = htmlspecialchars(trim($_POST["phone"]));
        }

        // Address validation
        if (empty($_POST["address"])) {
            $errors['address'] = "Address is required";
        } else {
            $address = htmlspecialchars(trim($_POST["address"]));
        }

        // If no error → redirect to success page
        if (empty($errors)) {
            include "process.php";
            exit;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css">
</head>

<body style="background: #f4f6f9;">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h3 class="mb-0">Student Information Form</h3>
                </div>

                <div class="card-body p-4">
                    <form action="" method="POST">

                        <!-- Name -->
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control <?= isset($errors['name']) ? 'is-invalid' : ''; ?>" value="<?= $name; ?>">
                            <div class="invalid-feedback"><?= $errors['name'] ?? ""; ?></div>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="text" name="email" class="form-control <?= isset($errors['email']) ? 'is-invalid' : ''; ?>" value="<?= $email; ?>">
                            <div class="invalid-feedback"><?= $errors['email'] ?? ""; ?></div>
                        </div>

                        <!-- Phone -->
                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="text" name="phone" class="form-control                                                                                                                                                               <?= isset($errors['phone']) ? 'is-invalid' : ''; ?>" value="<?= $phone; ?>">
                            <div class="invalid-feedback"><?= $errors['phone'] ?? ""; ?></div>
                        </div>

                        <!-- Address -->
                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <textarea name="address" rows="3" class="form-control                                                                                                                                                                   <?= isset($errors['address']) ? 'is-invalid' : ''; ?>"><?= $address; ?></textarea>
                            <div class="invalid-feedback"><?= $errors['address'] ?? ""; ?></div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 btn-lg">Submit</button>

                    </form>
                </div>

            </div>

        </div>
    </div>
</div>

</body>
</html>
