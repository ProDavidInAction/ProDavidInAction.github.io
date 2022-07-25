<!DOCTYPE html>
<html>
<head>
	<title>SchoolSimpified</title>
	<meta charset="UTF-8">
  <script type="text/javascript" src="./script.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'>

  <style>

    .alert {
      padding: 20px;
      background-color: #f44336;
      color: white;
      opacity: 1;
      transition: opacity 0.6s;
      margin-bottom: 15px;
    }

    .alert.success {background-color: #04AA6D;}

    .alert.info {
      border-radius: 10px;
      border-style: solid;
      border-width: 2px;
      border-color: #cccccc;
      background-color: #dfe5e8;
      font-size: 0.6vw;
    }

    .alert.warning {background-color: #ff9800;}

    .closebtn {
      margin-left: 15px;
      color: white;
      font-weight: bold;
      float: right;
      font-size: 22px;
      line-height: 20px;
      cursor: pointer;
      transition: 0.3s;
    }

    .header{
      width:  100%;
      height: 4vw;
      display: block;
      background-color: #ffff;
      box-shadow: 5px 5px 3px 5px #12101010;
      margin: 0;
      padding: 0;
      list-style: none;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .inner_header{
      width: 80%;
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
      color: #4d4d4d;
      height: 100%;
      display: table-cell;
      vertical-align: middle;
      font-family: 'Quicksand', sans-serif;
      font-size: 2.3vw;
      font-weight: 200;
    }

    .logo_container h1 span{
      font-weight: 800;
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
      color: #4d4d4d;
      font-family: 'Quicksand', sans-serif;
      font-size: 1.1vw;
    }

    .navigation a:hover{
      background-color: #ebebeb;
    }

    .navigation a li:hover{
      color: #2d4532;
    }

    footer{
    background: #ffff;
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
    color: black;
  }
  .socials a i{
    font-size: 1.1rem;
    transition: color .4s ease;
  }
  .socials a:hover i{
    background:  aqua;
  }
  .footer_bottom{
    background:  #f5f7f8;
    width:  100vw;
    padding:  20px 0;
    text-align: center;
    border-width: 20px;
    border
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
      background-image: url('./bg-1.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
  }

  *{
    margin: 0;
    padding: 0;
    list-style: none;
    text-decoration: none;
  }

  .container{
      width: 100%;

      font-family: Verdana, sans-serif;
      font-size: 25px;
      transform: translate(0%, 1.7%);

      display: grid;

      grid-template-columns: 15vw 15vw 15vw 15vw 15vw;
      grid-template-rows: 7vw 7vw 7vw 7vw 7vw 7vw;

      gap: 1vw;
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
      background-color: #ffffff;
      border-radius: 10px;
      grid-column-start: 1;
      transform: translate(-70%, 0%);
      color: white;
      background-color: rgba(30, 30, 30, 0.85);
    }

    .content-large-left2{
      grid-row-start: 4;
      grid-row-end: span 1;
      background-color: #ffffff;
      border-radius: 10px;
      grid-column-start: 1;
      transform: translate(-70%, 0%);
      color: white;
      background-color: rgba(30, 30, 30, 0.85);
    }

    .content-large-left3{
      grid-row-start: 5;
      grid-row-end: span 2;
      background-color: #ffffff;
      border-radius: 10px;
      grid-column-start: 1;
      transform: translate(-70%, 0%);
      color: white;
      background-color: rgba(30, 30, 30, 0.85);
    }

    .content-large-right1{
      grid-row-start: 1;
      grid-row-end: span 2;
      background-color: #ffffff;
      border-radius: 10px;
      grid-column-start: 5;
      transform: translate(50%, 0%);
      color: white;
      background-color: rgba(30, 30, 30, 0.85);
    }

    .content-large-right2{
      grid-row-start: 3;
      grid-row-end: span 2;
      background-color: #ffffff;
      border-radius: 10px;
      grid-column-start: 5;
      transform: translate(50%, 0%);
      color: white;
      background-color: rgba(30, 30, 30, 0.85);
    }

    .content-large-right3{
      grid-row-start: 5;
      grid-row-end: span 2;
      background-color: #ffffff;
      border-radius: 10px;
      grid-column-start: 5;
      transform: translate(50%, 0%);
      color: white;
      background-color: rgba(30, 30, 30, 0.85);
    }

    input[type=search] {
      background-color:
      width: 1vw;
      height: 2.2vw;
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 1vw;
      font-size: 1vw; 
      background-repeat: no-repeat;
    }

    button {
      background-color: #dfe5e8;
      border: none;
      color: white;
      padding: 12px 29px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }

    .audio-settings i{
      cursor:  pointer;
    }

    .content-large-center{
      grid-row-start: 1;
      grid-row-end: span 7;
      background-color: #ffffff;
      border-radius: 10px;
      grid-column-start: 4;
      grid-column-end: span 30;
      transform: translate(-67%, 0%);
      color: white;
      background-color: rgba(30, 30, 30, 0);
    }

    .content-large-center input[type=text]{
      border: none;
      border-bottom: 4px solid white;
      background-color: rgba(30, 30, 30, 0);
      color: white;
      text-align: center;
    }

    ::placeholder {
      color: white;
      opacity: 1;
      text-align: center;
    }

    input[type=text]:focus {
      outline: none;
    }

  </style>
</head>

<body onload="checkCookie(); setTipOfTheDay();">

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

        <div class="content-large-left1">
          <center>
            <p style="font-size: 1.2vw ;">My Profile</p>
            <img src="https://cdn-icons-png.flaticon.com/512/3003/3003035.png" style="width:6vw; height: 6vw; padding-top: 10%; padding-bottom: 10%">
            <hr>
          </center>
          <div class= "Profile">
            <p style="font-size: 0.9vw; padding: 0.5vw;">Student, BCS</p>
            <p style="font-size: 0.9vw; padding: 0.5vw;">Madrid, Spain</p>
            <p style="font-size: 0.9vw; padding: 0.5vw;">Something Else</p>
            <p style="font-size: 0.9vw; padding: 0.5vw;">Status: Studying</p>
          </div>
        </div>

        <div class="content-large-left2">
        </div>

        <div class="content-large-left3">

          <div class="js audio">
            <script>

              var playing = false;

              function act()
              {
                if(playing){
                  stop();
                }
                else{
                  play();
                }
              }

              function play() {
                document.getElementById("pause").className = "bi bi-pause";
                playing = true;
                var audio = document.getElementById("audio");
                audio.play();
              }

              function stop() {
                document.getElementById("pause").className = "bi bi-play";
                playing = false;
                var audio = document.getElementById("audio");
                audio.pause();
                audio.currentTime = 0
              }
            </script>
          </div>

          <div class="audio-settings">

            <center>
              <img src="https://d3bzyjrsc4233l.cloudfront.net/news/lofimain.jpg" height="154vw" width="235vw" style="border: 2px solid black">
              <p style="font-size: 0.8vw; padding: 0.35vw">Title of Song by Name of Band</p>
              <i class="bi bi-play" onclick="act()" type="button" id="pause"></i>
            </center>
            <audio id="audio" src="./lofi-1.mp3"></audio>

          </div>
        </div>

        <div class="content-large-center">
          <center>
            <h1 style="font-size: 12.5vw " id="Time">Time</h1>
            <h1 style="font-size: 3.2vw" id="Welcome">Good Morning</h1>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <form onsubmit="checkCookieGoal()">
              <input type="text" style="width: 80%; height: 3.2vw; font-size:2.5vw;" name="Goal-placeholder" id="goal_text">
            </form>
            <br>
            <br>
            <br>
            <br>
            <h1 style="font-size: 1.5vw" id="tip">Calvo el q lo lea</h1>
          </center>
        </div>

        <div class="content-large-right1">
          <center>
            <br>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Microsoft_Office_Teams_%282018%E2%80%93present%29.svg/1200px-Microsoft_Office_Teams_%282018%E2%80%93present%29.svg.png" height="35%" width="35%" style="padding: 1vw  color: black;">
            <br>
            <br>
            <form>
              <button align="center" onclick="teams_go()" style=" color: black; font-size: 1vw;">Go!</button>
            </form>
          </center>
        </div>

        <div class="content-large-right2">
          <center>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1e/Wikipedia-logo-v2-es.svg/1200px-Wikipedia-logo-v2-es.svg.png" height="35%" width="35%" style="padding: 0.2vw;">
            <form>

              <input align="center" type="search" id="search_wiki" placeholder="Search..." style="font-size: 1vw;">
              <br>
              <br>
              <button align="center" onclick="wikipedia_Search()" style="font-size: 1vw; color: black;">Search!</button>

            </form>
          </center>
        </div>

        <div class="content-large-right3">
          <center>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7f/Coat_of_Arms_of_the_Royal_Spanish_Academy.svg/1200px-Coat_of_Arms_of_the_Royal_Spanish_Academy.svg.png" height="30%" width="30%" style="padding: 0.2vw;">
            <form action="rae_Search()">

              <input align="center" type="search" id="search_rae" placeholder="Search..." style="font-size: 1vw;">
              <br>
              <br>
              <button align="center" onclick="rae_Search()" style="font-size: 1vw; color: black; vertical-align: bottom;">Search!</button>

            </form>
          </center>
        </div>
  </div>

  <div class="js">
    <script>
      var close = document.getElementsByClassName("closebtn");
      var i;

      for (i = 0; i < close.length; i++) {
        close[i].onclick = function(){
          var div = this.parentElement;
          div.style.opacity = "0";
          setTimeout(function(){ div.style.display = "none"; }, 600);
        }
      }

      function wikipedia_Search()
      {
        var to_Search = document.getElementById("search_wiki").value;
        window.open('https://es.wikipedia.org/wiki/'.concat("", to_Search));
      }

      function rae_Search()
      {
        var to_Search = document.getElementById("search_rae").value;
        window.open('https://dle.rae.es/'.concat(to_Search, '?m=form'));
      }

      function teams_go()
      {
        window.open('https://login.microsoftonline.com/common/oauth2/v2.0/authorize?response_type=id_token&scope=openid%20profile&client_id=5e3ce6c0-2b1f-4285-8d4b-75ee78787346&redirect_uri=https%3A%2F%2Fteams.microsoft.com%2Fgo&state=eyJpZCI6IjliZDg2MDU4LWMzYWItNGQ4NS04YWI1LTc5MTc3ZDEyNDUzZSIsInRzIjoxNjU4NjM5NTc0LCJtZXRob2QiOiJyZWRpcmVjdEludGVyYWN0aW9uIn0%3D&nonce=e0f302d1-dd12-4b01-a693-f88dfb28c784&client_info=1&x-client-SKU=MSAL.JS&x-client-Ver=1.3.4&prompt=select_account&client-request-id=4851964d-7056-457d-bfc3-b3b4734b0eba&response_mode=fragment');

      }

    </script>
  </div>

</body>
</html>