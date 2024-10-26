<?php
session_start();
$errorMessage = $_SESSION['errorMessage'] ?? '';
unset($_SESSION['errorMessage']);
?>

<body>

<h1>分を秒に変換しよう</h1>

<p><?php echo $errorMessage; ?></p>

  <form action="./answer.php" method="post">

    <table>

      <tr>
        <td><p>時間(分)</p></td>
        <td><p><input type="number" name="time" placeholder="分"></p></td>
      </tr>

    </table>

    <input type="submit" value="何秒か確認してみよう"> 

  </form>

  <a href="../index.php">Topへ</a>

</body>
