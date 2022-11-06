<?php include 'includes/header.php';
include 'includes/nav.php'; ?>
<?php
$msg = "";
if (isset($_POST['btnSubmit'])) {
  $user = $_POST['fname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $date = date("Y-m-d");

  // $qry = mysqli_query($conn, "SELECT * FROM customer WHERE email = '$email'");
  // // $count = ($qry->num_rows);
  // if ($qry->num_rows > 0) {
  //   $msg = "E-mail Account already in use";
  // } else {
  $insert = mysqli_query($conn, "INSERT INTO message(fullname, email, phone, subject, message, date) VALUES('$user', '$email','$phone', '$subject', '$message', $date )");
  if ($insert) {
    $msg = "<div class='alert alert-info'>Your message has been delivered, We will contact you as soon as possible.</div> ";
  } else {
    $msg = "<div class='alert alert-info'>Connection error!</div> ";
    echo mysqli_error($conn);
  }
}
// }
?>

<div class="modal-signin position-static py-5" tabindex="-1" role="dialog" id="request-a-service">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-5 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <!-- <h5 class="modal-title">Modal title</h5> -->

        <h2 class="fw-bold mb-0">Contact Customer Support</h2>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>

      <div class="modal-body p-5 pt-0">
        <?php echo $msg; ?>
        <form method="POST" enctype="multipart/form-data">
          <div class="form-floating mb-3">
            <input name="fname" type="text" class="form-control rounded-4" id="floatingName" placeholder="Name" required>
            <label for="floatingName">Full Name</label>
          </div>
          <div class="form-floating mb-3">
            <input name="email" type="email" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input name="phone" type="phone" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput">Phone</label>
          </div>
          <div class="form-floating mb-3">
            <input name="subject" type="text" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput">Subject</label>
          </div>
          <div class="form-floating mb-3">

            <textarea name="message" cols=50 rows="10" name="message" class="form-control rounded-4" id="floatingInput" placeholder="Enter your message" required></textarea>
            <label for="floatingInput">Enter your Message</label>
          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit" name="btnSubmit">Submit</button>
          <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
          <hr class="my-4">

      </div>
    </div>
  </div>
</div>
<div class="row py-3 mx-2 justify-content-center">
  <div class="col-lg-8">
    <div class="card card-header">Address</div>
    <div class="card card-body">
      <h3>LABOD GLOBAL LINK SERVICES</h3>
      <p>35, Omotosho Street, Idi-Ape, Eleyele, Ibadan, Oyo State, Nigeria</p>
      <p>08054825127 or 08107111768</p>
    </div>
  </div>
</div>
<a class="m-2 bg-info p-2 text-dark rounded-4" href="https://wa.me/message/6BXSMBUHSSFOF1" style="display: inline-block;">Reach us via Whatsapp</a>
<?php include 'includes/footer.php'; ?>