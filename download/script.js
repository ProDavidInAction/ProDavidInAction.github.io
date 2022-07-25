var greeting = "Morning"
var tips = ['Go over to the games tab to play some games!', 'School starts the 7th September', 'David.G has created this website! Enjoy!']
var links_img = ['https://images.unsplash.com/photo-1590813215118-76f711e87aa4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fG1vcm5pbmclMjBzdW5yaXNlfGVufDB8fDB8fA%3D%3D&w=1000&q=80', 'https://images.unsplash.com/photo-1436657640247-282c9abfb832?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDE0fHx8ZW58MHx8fHw%3D&w=1000&q=80','https://i.insider.com/5ef375d0f34d05101732afe8?width=1000&format=jpeg&auto=webp', 'https://wallpaperaccess.com/full/7359643.jpg']

  function setCookie(cname,cvalue,exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }
  
  function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i < ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }
  
  function checkCookie() {
    let user = getCookie("username");
    if (user != "") {

      document.getElementById("Welcome").innerHTML = "Good".concat(" ", greeting).concat(", ",user).concat("",".")
    } 
    else {
       user = prompt("How would you like to be called? (Can be changed after 30 days)","");

       if (user != "" && user != null) {
         setCookie("username", user, 30);
       }
    }
  }

  function getTime(){
    const d = new Date();
    let hour = d.getUTCHours() + 2;
    const e = new Date();
    let minutes = e.getUTCMinutes();
    var minute = minutes.toString();
    var time = hour.toString();
    document.getElementById("Time").innerHTML = time.concat(":",minute);

    if(time > 6 && time < 11 || time == 11)
    {
      greeting = "Morning";
    }
    else if(time > 11 && time < 15 || time == 15)
    {
      greeting = "Day";
    }
    else if(time > 15 && time < 20 || time == 20)
    {
      greeting = "Afternoon";
    }
    else
    {
      greeting = "Night";
    }
  }

  function setTipOfTheDay(){
    var chosen_tip = Math.floor(Math.random() * tips.length);
    document.getElementById('tip').innerHTML = tips[chosen_tip].toString();
  }

  //setting the cookie goals

  function setCookieGoal(cname,cvalue,exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }
  
  function getCookieGoal(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i < ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }
  
  function checkCookieGoal() {
    let goal = getCookieGoal("goal");
    goal = document.getElementById('goal_text').value;
    if (goal != "" && goal != null) {
      setCookieGoal("goal", goal, 1);
    }
  }

  function DisplayGoal(){
    let goal = getCookieGoal("goal");
    let user = getCookie("username");
    if(goal != "  "){
      document.getElementsByName('Goal-placeholder')[0].placeholder = goal;
    }
    else{
      document.getElementsByName('Goal-placeholder')[0].placeholder = "What is your goal for today".concat(" ",user).concat("","?");
    }
  }

setInterval(getTime, 1000);
setInterval(checkCookie, 1000);
setInterval(DisplayGoal, 1000);