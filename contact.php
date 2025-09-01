<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - MERCH</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <?php include 'header.php'; ?>
  
  <section class="contact">
    <h1>Contact Us</h1>
    <form method="post" action="send_message.php">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <textarea name="message" placeholder="Your Message"></textarea>
      <button type="submit" class="btn">Send</button>
    </form>
    <p>📍 Ongata Rongai, Kenya</p>
    <p>📞 +254 7xx xxx xxx</p>
    <p>📧 hello@merch.co.ke</p>
  </section>
  <?php include 'footer.php'; ?>
</body>
</html>
