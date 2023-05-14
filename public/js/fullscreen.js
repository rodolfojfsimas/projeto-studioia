// Using JavaScript to open the page in fullscreen mode
var elem = document.getElementById("fullcodigo");
function openFullscreen() { 
  if (elem.requestFullscreen) {
    elem.requestFullscreen();    
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();    
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
    
  }  
}


var elem2 = document.getElementById("preview");
function openFullscreen2() { 
 /* $("div.fullscreenslideshow").css(height: (parseInt($(window).height()) - 90));*/
  if (elem2.requestFullscreen) {
    elem2.requestFullscreen();    
  } else if (elem2.webkitRequestFullscreen) { /* Safari */
    elem2.webkitRequestFullscreen();    
  } else if (elem2.msRequestFullscreen) { /* IE11 */
    elem2.msRequestFullscreen();
    
  }
}

var elem3 = document.getElementById("full");
function openFullscreen3() { 
  if (elem3.requestFullscreen) {
    elem3.requestFullscreen();    
  } else if (elem3.webkitRequestFullscreen) { /* Safari */
    elem3.webkitRequestFullscreen();    
  } else if (elem3.msRequestFullscreen) { /* IE11 */
    elem3.msRequestFullscreen();
    
  }  
}


function closeFullscreen() {
  if (document.exitFullscreen) {
    document.exitFullscreen();
  } else if (document.webkitExitFullscreen) { /* Safari */
    document.webkitExitFullscreen();
  } else if (document.msExitFullscreen) { /* IE11 */
    document.msExitFullscreen();
  }
}


