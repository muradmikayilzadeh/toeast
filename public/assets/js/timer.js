// Set the date we're counting down to
var countDownDate = new Date("December 19, 2017 17:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  
  //Write

  var timer = document.getElementById('timer');

  timer.getElementsByClassName('days')[0].innerHTML = days + '<span>day(s)<span>';
  timer.getElementsByClassName('hours')[0].innerHTML = hours + '<span>hour(s)<span>';
  timer.getElementsByClassName('minutes')[0].innerHTML = minutes + '<span>minute(s)<span>';
  timer.getElementsByClassName('seconds')[0].innerHTML = seconds + '<span>second(s)<span>';


  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);