<!DOCTYPE html>
<html lang="en">
<head>

<style>
  
    body {
      margin: 0;
      box-sizing: border-box;
    }

    .container {
      line-height: 150%;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px;
      background-color: #e9e9e9;
    }

    .header h1 {
      color: #222222;
      font-size: 30px;
      font-family: "Pacifico", cursive;
    }

    
    .left {
      float: left;
      width: 180px;
      margin: 0;
      padding: 1em;
    }

    .content {
      margin-left: 190px;
      border-left: 1px solid #d4d4d4;
      padding: 1em;
      overflow: hidden;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      font-family: sans-serif;
    }

    li a {
      display: block;
      color: #000;
      padding: 8px 16px;
      text-decoration: none;
    }

    li a.active {
      background-color: #84e4e2;
      color: white;
    }

    li a:hover:not(.active) {
      background-color: #29292a;
      color: white;
    }

    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
      margin: 30px 0;
    }

    td,
    th {
      border: 1px solid #dddddd;
      padding: 8px;
    }

    tr:nth-child(1) {
      background-color: #84e4e2;
      color: white;
    }

    tr td i.fas {
      display: block;
      font-size: 35px;
      text-align: center;
    }

    .footer {
      padding: 55px 20px;
      background-color: #2e3550;
      color: white;
      text-align: center;
    }
  </style>
</head>
<body>
<div class="container">
<header class="header">
<h1>PMS</h1>
</header>
<aside class="left">
<ul>
<li><a class="active" href="#about">Home</a></li>
<li><a href="pmsparts.php">Parts</a></li>
<li><a href="pmstruck.php">Truck</a></li>
<li><a href="pmstrucktype.php">Truck Types</a></li>
</ul>
<br><br>
</aside>
<main class="content">
<h2>PMS</h2>
<table>
<tr>
<th>Transaction</th>
</tr>
<tr>
<td>No Record</td>
</tr>
<tr>
</table>
</main>
<footer class="footer"> </footer>
</div>
</body>
</html>