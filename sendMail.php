<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>نموذج الاتصال</title>
</head>

<body>
  <h2>اتصل بنا</h2>
  <form action="?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="name">الاسم:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="email">البريد الإلكتروني:</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="subject">الموضوع:</label><br>
    <input type="text" id="subject" name="subject"><br>
    <label for="message">الرسالة:</label><br>
    <textarea id="message" name="message"></textarea><br>
    <input type="submit" value="إرسال">
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    $to = "abdallhelzayat194@gmail0com"; // استبدل هنا بعنوان بريدك الإلكتروني
    $headers = "From: $name <$email>";
    
    if (mail($to, $subject, $message, $headers)) {
      echo "تم إرسال الرسالة بنجاح!";
    } else {
      echo "عذرًا، حدث خطأ ما.";
    }
  }
  ?>
</body>

</html>