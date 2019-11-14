

document.addEventListener('DOMContentLoaded', (event) => {
  function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
      var c = ca[i];
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
    let c = getCookie('notificationRead')
    if (c == '') {
      document.getElementById('notification-bar').style.display = 'flex'
    }
  }
  checkCookie()

  function closeNotification() {
    document.cookie = `notificationRead=false;path=/`
    document.getElementById('notification-bar').style.display = 'none'
  }

  document.getElementById('close-notification').addEventListener('click', (e) => {
    closeNotification()
  }, false)
})