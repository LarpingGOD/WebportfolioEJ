<?php
$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = htmlspecialchars(trim($_POST["name"]));
    $email   = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    if ($name === "" || $email === "" || $message === "") {
        $error = "Please fill in all fields before sending.";
    } else {
        $success = "Thanks, $name! Your message has been received.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact — The Weeknd</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>

<nav id="nav">
  <span class="logo">THE WEEKND</span>
  <ul class="nav-links">
    <li><a href="home.html">Home</a></li>
    <li><a href="music.html">Music</a></li>
    <li><a href="merch.html">Merch</a></li>
    <li><a href="contact.html" class="active">Contact</a></li>
  </ul>
</nav>

<header class="page-hero">
  <span class="eyebrow">Get In Touch</span>
  <h1>Contact</h1>
  <p>Questions, feedback, or fan mail — send a message below.</p>
</header>

<section class="wrap" style="padding:80px 32px 0;">

  <!-- PHP prints whichever message was set above, if any -->
  <?php if ($success !== "") { ?>
    <div class="form-msg success" style="max-width:520px; margin:0 auto 24px;"><?php echo $success; ?></div>
  <?php } ?>

  <?php if ($error !== "") { ?>
    <div class="form-msg error" style="max-width:520px; margin:0 auto 24px;"><?php echo $error; ?></div>
  <?php } ?>

  <form class="contact-wrap" action="contact.php" method="POST">

    <div class="field">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" required>
    </div>

    <div class="field">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>
    </div>

    <div class="field">
      <label for="message">Message</label>
      <textarea id="message" name="message" rows="5" required></textarea>
    </div>

    <button type="submit" class="btn-red" style="width:100%; border:none; cursor:pointer;">Send Message</button>

  </form>
</section>

<footer>
  <span class="logo">XO</span>
  <div class="links">
    <a href="home.html">Home</a>
    <a href="music.html">Music</a>
    <a href="merch.html">Merch</a>
    <a href="contact.html">Contact</a>
  </div>
  <p class="disclaimer">Unofficial fan tribute page. Not affiliated with Abel Tesfaye, XO, or Republic Records.</p>
</footer>

<script src="main.js"></script>
</body>
</html>