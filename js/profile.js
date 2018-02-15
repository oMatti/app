

var idleTime = 0;
$(document).ready(function () {
    //Increment the idle time counter every minute.
    var idleInterval = setInterval(timerIncrement, 30000); // 1 minute

    //Zero the idle timer on mouse movement.
    $(this).mousemove(function (e) {
        idleTime = 0;
    });
    $(this).keypress(function (e) {
        idleTime = 0;
    });
    function timerIncrement() {
      idleTime = idleTime + 1;
      if (idleTime > 1) { //  minutes
        console.log("AFK");
        $('figure').addClass('away');
      }
      else {
        console.log("Online");
        $('figure').removeClass('away');
      }
    }
});
