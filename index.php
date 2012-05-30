<?php
/**
 *
 *
 */

header('Content-Type: text/html; charset=UTF-8');

$img_tag = '';
if (isset($_POST['url'])) {
    $url = urlencode($_POST['url']);
    $img_tag = '<img src="http://chart.apis.google.com/chart?chs=150x150&cht=qr&chl=' . $url . '" />';
}
?>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
  <title>QRコード作成ツール</title>
  <style type="text/css"> 
  body {
    margin: 0px;
    background-color: black;
    color: white;
  }
 
  h1 {
    padding: 1em;
    background-color: #feff3d;
    color: black;
  }
 
  div.textBody {
    margin: 0.5em;
    padding: 0.5em;
    background-color: #666666;
  }
 
  a {
    color: white;
  }
 
  a:hover {
    text-decoration: none;
  }

  input {
    font-size: 24px;
  }
  </style> 
</head>
<body>
<h1>QRコード作成ツール</h1>
<div class="textBody"> 
<p>
フォームにURLを入れて「変換」でURLをqrコードに変換できます。
</p>

<form method="POST">
<input type="text" name="url" size="30"/>
<input type="submit" value="変換">
</form>

<?php
if ($img_tag) {
    echo $img_tag;
}
?>
</div>

<div class="textBody">
  <a href="http://gomiten.project-p.jp">ゴミ天</a><br />
  <address>project-p.jp</address>
</div>

</body>
</html>
