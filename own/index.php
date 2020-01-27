
<?php
  require_once('lib/print.php');
  require_once('lib/top.php');
  ?>
  <link rel="stylesheet" href="lib/indexStyle.css">
  <h2>(
    <input type="button" name="Create" value="Create!" onclick="location.href='create.php'" id="button1">
    )(
    <input type="button" name="Modify" value="Modify!"
    onclick="location.href='modify.php?id=<?= $_GET['id']?>'" id="button1"> )
    <br>
    <form action="delete_process.php" method="post">
      <input type="hidden" name="title" value="<?= $_GET['id'] ?>">
      <input type="submit" value="삭제!" id="Dbutton">
    </form></h2>
    <h3></h3>
    <h4>
      <div id=showD>
        <div id="showT">
    <?php
        printTitle();
    ?></div><br><br>
    <?php
      printDescription();
    ?></div></h4>

  </body>
  </html>
