<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Word Count</title>
</head>
<body>
  <form method="post">
    <textarea name="text" rows="4" cols="50"></textarea>
    <br>
    <input type="submit" value="Count Words">
  </form>
  
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (isset($_POST["text"])) {
        $text = $_POST["text"];
        $words = explode(" ", $text);
        $wordCount = count($words);
        echo "Number of words: " . $wordCount;
      }
    }
  ?>
</body>
</html>
