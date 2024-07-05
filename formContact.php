<?php
if (isset($_GET['submit'])) {
  $name = $_GET['name'];
  $phone = $_GET['phone'];
  $message = $_GET['message'];
  $whatsappNumber = '6285694630235';

  $whatsappURL = "https://wa.me/$whatsappNumber?text=Name:%20$name%0APhone:%20$phone%0AMessage:%20$message";

  header("Location: $whatsappURL");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="form-contact">
    <h1>Contact Us</h1>
    <form action="" method="get">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" required>

      <label for="phone">Phone</label>
      <input type="text" id="phone" name="phone" required>

      <label for="message">Message</label>
      <textarea id="message" name="message" rows="4" required></textarea>

      <button type="submit" name="submit">Send to WhatsApp</button>
    </form>
  </div>
</body>

</html>