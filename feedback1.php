<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Support & Feedback</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
<h1><b style="border-color:black;border-style:inset;background-color:rgb(31, 30, 30);">
<font color=red>A</font><font color=white>SSIST</font><font color=red> M</font><font color=white>E</font></b></h1>
<img src="./img/yo.jpeg" height=410 width=700 align=right>
    <div class="wrapper">
        <h2>Feedback</h2>
        <p>Please Give Your Valuable Feedback.</p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<div class="form-group">
<label>Comment Here</label>
<input type="text" name="per" class="form-control"><br>
<input type="submit" class="btn btn-primary" value="Submit" name="btn">
<a href="index.php" type="button" style="text-decoration: none;">&nbsp&nbspGo Back</a><div>
<div class="wrapper">
<h2>Support-Us</h2>
<p>We are working hard in developing and bringing bests of our Vitual Assistant's "Kanni" to you.
If you are impressed and believe in us some support by donating on following QR codes.
We accept UPI and Cryptocurrencies @ BTC Address <font color=green>1DysQhJxpz3RkGNU7Spy7xotRJzt8zxWR3<br></font> or <font color=green>7007208124@sbi</font>
 or @ETH Address.<br><font color=green>0xDd66554eAAF8E65e207E1Feb86985F6dD1762B4A</font</p>
</div> 
</body>
<?php
if(isset($_POST["btn"]))
{
$fp=fopen("abc.txt","a");
$r=$_POST["per"];
fwrite($fp,$r."\r\n");
echo "Thanks Your feedback '".$r,"' is noted.";
fclose($fp);
}
?>
</html>
 





