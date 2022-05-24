
function setCookie_mseconds(cname, cvalue, mseconds) {
  const d = new Date();
  d.setTime(d.getTime() + (mseconds));
  let expires = "expires="+d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}


function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
  let expires = "expires="+d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  let name = cname + "=";
  let ca = document.cookie.split(';');
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
    alert("Welcome again " + user);
  } else {
    user = prompt("Please enter your name:", "");
    if (user != "" && user != null) {
      setCookie("username", user, 365);
    }
  }
}


function verificar_aceite_cookies_e_privacidade()
{
    let cookie = getCookie('aceite_cookies_e_privacidade')
    if(!cookie){
        $(".cookies-mensage").fadeIn('slow')
    }
    else{
        $(".cookies-mensage").fadeOut('fast')
    }
}

function aceite_cookies_e_privacidade()
{
    dias = 365*10//10 anos
    setCookie('aceite_cookies_e_privacidade', true, dias);
    verificar_aceite_cookies_e_privacidade()
}