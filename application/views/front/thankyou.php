<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <link rel="shortcut icon" href="images/favi.png" />
  <title>Heroic</title>
  <!-- Bootstrap core CSS -->
  <style type="text/css">

@font-face {
    font-family: 'Edo';
    src: url('./fonts/Edo.woff2') format('woff2'),
        url('./fonts/Edo.woff') format('woff');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}

body {
    font-family: 'Edo';
    position: relative;
}
    .thanksbox_row{}
    h2 { color:#282828;font-size:50px;
    }
    img {
     margin: 0 auto;
     display: block;
   }
   .thanksbox_row {
    display: flex;
    justify-content: center;
    padding: 180px 0;
}
.thanksbox_row a:nth-of-type(2) {
    font-size: 29px;
    text-decoration: none;
    color: #282828;
    margin: 0 auto;
    text-align: center;
    display: block;
    border-bottom: 2px solid;
    max-width: 30%;
}
</style>
</head>
<body style="background:#ffff00;">
  <div class="thanksbox_row">
    <div class="thanksbox_colum">
     <a href="<?= base_url();?>"><img src="images/logo.png"></a>
     <h2>Thank You</h2>
     <a class="" href="<?= base_url();?>">Shop</a>
   </div>
 </div>
</body>
</html>