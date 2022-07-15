<!DOCTYPE html>
<html>
<head>
	<title>SchoolSimpified</title>
	<meta charset="UTF-8">

  <script src="./script.js"></script>
  <style>

      .header{
      width:  100%;
      height: 80px;
      display: block;
      background-color: #4d636f;
      box-shadow: 5px 5px 3px 5px #12101010;
      margin: 0;
      padding: 0;
      list-style: none;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .inner_header{
      width: 99%;
      height: 100%;
      display: block;
      margin: 0 auto;
    }

    .logo_container{
      height: 80%;
      display: table;
      float: left;
    }

    .logo_container h1{
      color: #ffffff;
      height: 80%;
      display: table-cell;
      vertical-align: middle;
      font-family: 'Quicksand', sans-serif;
      font-size: 40px;
      font-weight: 200;
      transform: translate(0%, 15%);
    }

    .logo_container h1 span{
      font-weight: 1000;
    }

    .navigation{
      float: right;
      height: 100%;
    }

    .navigation a{
      height: 100%;
      display: table;
      float: left;
      padding: 0px 25px;
      transition: all 0.3s ease;

    }

    .navigation a li{
      display: table-cell;
      vertical-align: middle;
      height: 100%;
      color: #ffffff;
      font-family: 'Quicksand', sans-serif;
      font-size: 20px;
    }

    .navigation a:hover{
      background-color: #3a4b53;
    }

    .navigation a li:hover{
      color: #ffffff;
    }

    footer{
    background:  #111;
    height:auto;
    width:  100vw;
    font-family: Helvetica;
    padding-top: 40px;
    color: #fff;
  }
  .footer-content{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
  }
  .footer-content h3{
    font-size: 1.8rem;
    font-weight: 400;
    text-transform: capitalize;
    line-height: 3rem;
  }

  .footer-content p{
    max-width: 500px;
    margin:  10px auto;
    line-height: 28px;
    font-size: 14px;
  }
  .socials{
    list-style: none;
    display:  flex;
    align-items: center;
    justify-content: center;
    margin:  1rem 0 3rem 0;
  }

  .socials li{
    margin:  0 10px;
  }
  .socials a{
    text-decoration: none;
    color:  #fff;
  }
  .socials a i{
    font-size: 1.1rem;
    transition: color .4s ease;
  }
  .socials a:hover i{
    background:  aqua;
  }
  .footer_bottom{
    background:  #000;
    width:  100vw;
    padding:  20px 0;
    text-align: center;
  }
  .footer_bottom p{
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;
  }
  .footer_bottom span{
    text-transform: uppercase;
    opacity: .4;
    font-weight: 200;
  }

    body{
      background-color: #f5f7f8;
      margin: 0;
    }

    *{
      margin: 0;
      padding: 0;
      list-style: none;
      text-decoration: none;
    }

    .container{
      width: 100%;
      height: 90vh;

      font-family: 'Quicksand', sans-serif;
      font-size: 20px;
      transform: translate(0%, 4%);

      display: grid;

      grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
      grid-template-rows: 1fr 1fr 1fr 1fr 1fr 1fr;

      gap: 20px;
      padding-left: 220px;
      padding-right: 220px;
      padding-top: 10px;
      padding-bottom: 10px;
      box-sizing:  border-box;
    }

    .container div{
      padding: 10px;
    }

    .content-large-left1{
      grid-row-start: 1;
      grid-row-end: span 3;
      box-shadow: 0px 0px 3px 1px lightgrey;
      background-color: #ffffff;
      border-radius: 10px;
    }

    .content-large-left2{
      grid-row-start: 4;
      grid-row-end: span 1;
      box-shadow: 0px 0px 3px 1px lightgrey;
      background-color: #ffffff;
      border-radius: 10px;
      grid-column-start: 1;
    }

    .content-large-left3{
      grid-row-start: 5;
      grid-row-end: span 2;
      box-shadow: 0px 0px 3px 1px lightgrey;
      background-color: #ffffff;
      border-radius: 10px;
      grid-column-start: 1;
    }

    .content-large-right1{
      grid-row-start: 1;
      grid-row-end: span 2;
      box-shadow: 0px 0px 3px 1px lightgrey;
      background-color: #ffffff;
      border-radius: 10px;
    }

    .content-large-right2{
      grid-row-start: 3;
      grid-row-end: span 2;
      box-shadow: 0px 0px 3px 1px lightgrey;
      background-color: #ffffff;
      border-radius: 10px;
      grid-column-start: 5;
    }

    .content-large-right3{
      grid-row-start: 5;
      grid-row-end: span 2;
      box-shadow: 0px 0px 3px 1px lightgrey;
      background-color: #ffffff;
      border-radius: 10px;
      grid-column-start: 5;
    }

    .content-large1{
      grid-row-start: 1;
      grid-row-end: span 1;
      grid-column-start: 2;
      grid-column-end: span 3;
      box-shadow: 0px 0px 3px 1px lightgrey;
      background-color: #ffffff;
      border-radius: 10px;
      transform: translate(0%, 8%);
    }

    .content-large2{
      grid-row-start: 2;
      grid-row-end: span 3;
      grid-column-start: 2;
      grid-column-end: span 2;
      box-shadow: 0px 0px 3px 1px lightgrey;
      background-color: #ffffff;
      border-radius: 10px;
      transform: translate(0%, 2%);
    }

    .content-large3{
      grid-row-start: 2;
      grid-row-end: span 3;
      grid-column-start: 4;
      grid-column-end: span 1;
      box-shadow: 0px 0px 3px 1px lightgrey;
      background-color: #ffffff;
      border-radius: 10px;
      transform: translate(0%, 2%);
    }

    .content-large4{
      grid-row-start: 5;
      grid-row-end: span 3;
      grid-column-start: 2;
      grid-column-end: span 3;
      box-shadow: 0px 0px 3px 1px lightgrey;
      background-color: #ffffff;
      border-radius: 10px;
      transform: translate(0%, 2%);
    }

  </style>
</head>

<body>

  <div class="header">
    <div class="inner_header">
      <div class="logo_container">
        <a href="./index.php"><h1>SCHOOL<span>SIMPLIFIED</span></h1></a>
      </div>

      <ul class="navigation">
        <a href="./index.php"><li>Home</li></a>
        <a href="google.com"><li>Revise</li></a>
        <a href="google.com"><li>Explanations</li></a>
        <a href="./login.php"><li>Portfolio</li></a>
        <a href="./logout.inc.php"><li>LogOut</li></a>
      </ul>
    </div>
  </div>

  <div class="container">
    <div class="content-large-left1">Left</div>
    <div class="content-large-left2">Left</div>
    <div class="content-large-left3">Left</div>
    <div class="content-large1">Center</div>
    <div class="content-large2">Center</div>
    <div class="content-large3">Center</div>
    <div class="content-large4">Center</div>
    <div class="content-large-right1">Right</div>
    <div class="content-large-right2">Right</div>
    <div class="content-large-right3">Right</div>
  </div>

  <div class="spaces_final">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>
  <div>
    <audio src="Minecraft-Sweden.mp3" autoplay="autoplay" loop="loop"></audio>
  </div>
  
  <footer>
      <div class="footer_container">
        <h3><center>Simplified School</center></h3>
        <p><center>When you boil it down, it really can be simple</center></p>
        <ul class="socials">
          <li><a href="https://www.facebook.com/hbvhsajhfsa/"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://twitter.com/404/"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="https://www.youtube.com/404/"><i class="fa fa-youtube"></i></a></li>
          <li><a href="https://www.linkedin.com/404(/?_l=en_US"><i class="fa fa-linkedin-square"></i></a></li>
        </ul>
      </div>
      <div class="footer_bottom">
        <p>Copyright &copy;2022 OutputtingCode. Designed by <span>Daniel Sánchez & David González</span></p>
      </div>
  </footer>

</body>
</html>
