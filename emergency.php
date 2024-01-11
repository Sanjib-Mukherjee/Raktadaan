<?php
    include('bank/conn.php');
    $obj=new conn();
    $res=$obj->get_record();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
    .c1 {
        background-color: #fe3e3e;
        font-size: 30px;
    }
    ul li {
        font-size: 25px;
        line-height: 50px;
    }
    a {
        text-decoration: none;
    }
    a:hover {
        background-color: #c95555;
        width: 400px;
        height: 40px;
    }
    .c2 {
        height: 10px;
        background-color: #fe3e3e;
    }
    pre {
        font-size: 20px;
    }
    .l {
        background-color: #fe3e3e;
        width: 20%;
        opacity: 1;
    }
    .l::after {
    content: 'Happy to help you!';
    display: block;
    padding: 15px;
    color: black;
    font-weight: bold;
    font-size: 35px; /* Adjust the font size as needed */
    /*font-family: 'Arial', sans-serif; /* Change the font family if desired */
    text-transform: uppercase; /* Convert text to uppercase */
    text-align: center; /* Align the text to the center */
    background-color: #fe3e3e; /* Background color with opacity */
}

    td:nth-child(2) {
        background-image: url('blood.webp');
        background-size: cover;
        
    }
</style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <table border="1" bordercolor="black" width="90%" align="center" cellspacing="0" cellpadding="10">
    <tr>
    <th colspan="2" class="c1">Blood Bank</th>
    </tr>
    <tr>
    <td valign="top" width="20%" height="640" class="l">

    </td>
    <td valign="top">
    <h2 align="center">Details</h2>
<table border="1" bordercolor="black" width="90%" align="center" cellspacing="0" cellpadding="10">
<tr>
  <th>Venue</th>
  <th>Blood Group</th>
  <th>Amount</th>
  <th>Price</th>
  </tr>
  <?php
    while($arr=mysqli_fetch_array($res))
    {
  ?>
    <tr>
      <td><?php echo $arr['venue'];?></td>
      <td><?php echo $arr['bloodtype'];?></td>
      <td><?php echo $arr['amount'];?></td>
      <td><?php echo $arr['price'];?></td>
    </tr>
  <?php
    }
    ?>
  </table> 
    </td>
</tr>

    </table>
</body>
</html> 