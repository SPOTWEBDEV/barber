<?php
    include '../server/connection.php';
    include '../server/client/auth.php';

    // Check if 'barbering' is in the URL
    $amount = 0;
    if (isset($_GET['babering'])) {
        $babering = $_GET['babering'];

       

        // Fetch amount from pricing_plans table
        $query = mysqli_query($connection,"SELECT price,title FROM pricing_plans WHERE id = '$babering'");
        

        if (mysqli_num_rows($query)) {
            $row = mysqli_fetch_assoc($query);
            $amount = $row['price'];
            $title = $row['title'];
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $sitename ?> - Expert Barbering, Haircuts & Beard Styling</title>
    <meta name="description" content="Discover premium grooming at <?php echo $sitename ?>. Specializing in modern haircuts, precision beard trims, and classic shaves. Book your appointment today!">
    <meta name="keywords" content="barber shop, men's grooming, modern haircuts, beard trimming, hot towel shave, Enugu Town barbers, men's haircuts Enugu State">
    <meta property="og:title" content="<?php echo $sitename ?> - Professional Barbering Services">
    <meta property="og:description" content="Premium haircuts, beard trims, and shaves. Book your grooming experience today!">
    <meta property="og:url" content="https://gofinecutz.com.ng/about/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body{
            background:rgb(0,29,76);
        }
        .container { max-width: 900px; margin: 30px auto; background-color: rgb(0,29,76); padding: 35px; }
        .box-right, .box-left { padding: 20px; background-color: white; border-radius: 15px; }
        .bg-blue { background-color: #dfe9fc9c; border-radius: 5px; padding: 10px; }
        .form-control { box-shadow: none !important; }
        .btn-primary { box-shadow: none; height: 40px; padding: 11px; }
        .copy-icon { cursor: pointer; color: rgb(0,29,76); }
        .switch-icon { cursor: pointer; color: rgb(0,29,76); }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<?php

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $state       = $_POST['state'];
        $address     = $_POST['address'];
        $close_place = $_POST['close_place'];
        $date = $_POST['date'];

    

        // Insert into booking table
        $stmt = mysqli_query($connection,"INSERT INTO booking (user, state, address,close_place, pricing_id, status, created_at, appointment_date,amount,title) VALUES ('$user_login','$state', '$address', '$close_place', '$babering','pending',NOW(), '$date','$amount','$title')");

        if ($stmt) {
            echo "<script>
            Swal.fire('Success!', 'Booking successfully submitted!', 'success').then(() => { window.location.href = 'index.php'; });
        </script>";
        } else {
            echo "<script>Swal.fire('Error!', 'Something went wrong!', 'error');</script>";
        }
    }

?>

<a href="../" style="border-radius: 50%; height: 50px; width:50px; background-color: white; display: flex; align-items: center; justify-content: center; top: 20px; left:30px; position: fixed;" class="fixed ">

    <i style="color: black; font-size: 20px;" class="bi bi-arrow-left"></i>
</a>

<div class="container">
    <div class="row m-0">
        <div class="col-12">
            <div class="row">
                <div class="col-12 px-0 mb-4">
                    <div class="box-right">
                        <div class="d-flex pb-2">
                            <p class="fw-bold h7">Account Details </p>
                            <p class="ms-auto">
                                <span class="switch-icon d-none fas fa-sync-alt me-3" onclick="switchAccount()"></span>
                                <button class="btn btn-sm btn-success" onclick="switchAccount()">Switch Account</button>
                                <span class="copy-icon far fa-clone" onclick="copyToClipboard()"></span>
                            </p>
                        </div>
                        <div class="bg-blue p-2">
                            <p class="h8 text-muted accountName"></p>
                            <p style="font-size:30px" class="p-blue  text-primary  accountNumber"></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 px-0">
                    <div class="box-right">
                        <div class="d-flex mb-2">
                            <p class="fw-bold">Contact Form</p>
                        </div>

                        <form class="row" method="POST">
                                    <input type="hidden" name="bank_id" id="bank_id"> <!-- Hidden input for bank ID -->

                                    <div class="col-12 mb-2">
                                        <p class="text-muted h8">State</p>
                                        <input class="form-control" value="Enugu State" readonly type="text" name="state" placeholder="Enter Full Name" required>
                                    </div>
                                    <div class="col-6">
                                        <p class="text-muted h8">Complete Address</p>
                                        <input class="form-control" type="text"  name="address" placeholder="Enter Address" required>
                                    </div>
                                    <div class="col-6">
                                        <p class="text-muted h8">Closest Popular Place</p>
                                        <input class="form-control" type="text" name="close_place" placeholder="Enter Closest Popular Place" required>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <p class="text-muted h8">Amount for Donation</p>
                                        <input class="form-control" type="text" value="<?php echo $amount ?>" name="amount"  placeholder="Enter Amount" required>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <p class="text-muted h8">Appointment Date</p>
                                        <input class="form-control" type="date" name="date"   required>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <button style="background:rgb(0,29,76)" class="btn text-white btn-sm w-25 mt-4" type="submit">Submit</button>
                                    </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let index = 0;

    let bank_details = [
         {
                  id: 1,
                  name: 'Paul Ugochukwu Nweke',
                  number: '2292324448',
                  bank_name: 'United Bank for Africa (UBA)',


         },
         {
                  id: 2,
                  name: 'Paul Ugochukwu Nweke',
                  number: '6173953975',
                  bank_name: 'Fidelity Bank',

         },

]

    function displayAccount() {
    let accountName = document.querySelector('.accountName');
    let accountNumber = document.querySelector('.accountNumber');
    let bankIdInput = document.getElementById('bank_id'); // Get hidden input field

    accountName.innerHTML = `${bank_details[index].name} - ${bank_details[index].bank_name} Account`;
    accountNumber.innerHTML = `${bank_details[index].number}`;
    bankIdInput.value = bank_details[index].id; // Set bank_id input value
}


    function switchAccount() {
        index = (index + 1) % bank_details.length;
        displayAccount();
    }

    function copyToClipboard() {
        let copyText = document.querySelector('.accountNumber').innerText;
        navigator.clipboard.writeText(copyText).then(() => {
            alert('Account number copied to clipboard!');
        });
    }

    displayAccount();
</script>

</body>
</html>
