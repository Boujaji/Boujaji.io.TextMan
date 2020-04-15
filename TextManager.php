<html>
<head>
<title>Text manager</title>
<link rel="stylesheet" href="https://unpkg.com/mustard-ui@latest/dist/css/mustard-ui.min.css">

</head>
<body>

<header style="height: 200px;">
<h1>Text manager</h1>
</header>
<br>
<div class="row">
    <div class="col col-sm-5">
        <div class="panel">
            <div class="panel-body">

              <?php

              $NewLink="";
              if (isset($_POST['link'])) {
                  $NewLink = $_POST['link'];
              }
              $text = file_get_contents($NewLink);

              $filename='texte.txt';
              $file = fopen($filename, "a+");
              fwrite($file,"$text" );
              fclose($file);
              ?>

                <h2>1. Get text </h2>

                <form action="TextManager.php" method="post">
                    <input type="text" name="link" value="<?=$NewLink?>">
                    <br><input type="submit" value="Fetch Text"></br>
                </form>

                <h2>2. Find keywords</h2>

                <form action="TextManager.php" method="post">
                    <input type="text" name="name">
                    <br><input type="submit" value="Search text"></br>
                </form>




            </div>
        </div>
    </div>

    <div class="col col-sm-7" style="padding-left: 25px;">
        <pre><code>

          <?php
          echo "$text";
          ?>


        </code></pre>
    </div>
</div>

</body>
</html>
