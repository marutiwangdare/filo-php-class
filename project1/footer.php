

<style>

.footer {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.footer a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.footer a:hover {
  background-color: #ddd;
  color: black;
}

.footer a.active {
  background-color: dodgerblue;
  color: white;
}

.footer-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .footer a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .footer-right {
    float: none;
  }
}
</style>
</head>
<body>

<div class="footer">
  <a href="index.php" class="logo"><img src="logo.jpg" width="50" height="50"></a>
  <div class="footer-right">
    <a  href="index.php">Home</a>
  </div>
</div>