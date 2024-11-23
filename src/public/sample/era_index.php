<?php
session_start();
$errorMessage = $_SESSION['errorMessage'] ?? '';
unset($_SESSION['errorMessage']);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>和暦変換</title>
</head>
<body>
    <h1>令和から西暦に変換</h1>
    <?php if ($errorMessage): ?>
        <p style="color: red;"><?php echo htmlspecialchars(
            $errorMessage
        ); ?></p>
    <?php endif; ?>
    
    <form action="./era_answer.php" method="post">
        <p>
            令和 <input type="number" name="year" min="1" placeholder="年"> 年
        </p>
        <input type="submit" value="西暦に変換">
    </form>
    
    <a href="../index.php">戻る</a>
</body>
</html> 