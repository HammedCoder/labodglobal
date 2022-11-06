<?php include 'includes/header.php';
if (isset($_GET['id'])) {
  echo "Successful";
} ?>
<div class="container">
  <form action="" method="post">

    <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
      <option selected>What would you like to get done?</option>
      <option value="1">Mast Installation</option>
      <option value="2">Business Development</option>
      <option value="3">Internet Services</option>
    </select>

    <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
      <option selected>Where do you want it to be done?</option>
      <option value="1">Lagos</option>
      <option value="2">Oyo</option>
      <option value="3">Abuja</option>
    </select>
    <div class="mb-3 input-group-md">
      <label for="floatingInput">Which area in the city?</label>
      <input name="email" type="text" class="form-control rounded-4 " id="floatingInput" placeholder="E.g Ikeja" required>
    </div>
    <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
      <option selected>How would you like to be contacted?</option>
      <option value="1">Phone call</option>
      <option value="2">Whatsapp</option>
      <option value="3">E-mail</option>
    </select>
    <div class="mb-3 input-group-md">
      <label for="floatingInput">Provide your Contact details</label>
      <input name="email" type="text" class="form-control rounded-4 " id="floatingInput" placeholder="+234 90..." required>
    </div>
    <div class="mb-3 input-group-md">
      <label for="floatingInput">When do you like the job to start?</label>
      <input name="date" type="date" class="form-control rounded-4 " id="floatingInput" required>
    </div>
    <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit" name="btnSubmit">Submit</button>
  </form>
</div>