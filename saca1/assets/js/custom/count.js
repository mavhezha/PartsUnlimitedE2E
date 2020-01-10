$(function() {
   

    function countUp(count) {
   var div_by = 2,
     speed = Math.round(count / div_by),
     $display = $('.countdown_first'),
     run_count = 1,
     int_speed = 200;
   var int = setInterval(function () {
     if (run_count < div_by) {
       $display.text(speed * run_count);
       run_count++;
     } else if (parseInt($display.text()) < count) {
       var curr_count = parseInt($display.text()) + 1;
       $display.text(curr_count);
     } else {
       clearInterval(int);
     }
   }, int_speed);
 }
 countUp(10);

function countUp2(count) {
   var div_by = 2,
       speed = Math.round(count / div_by),
       $display = $('.countdown_second'),
       run_count = 1,
       int_speed = 200;
   var int = setInterval(function () {
       if (run_count < div_by) {
           $display.text(speed * run_count);
           run_count++;
       } else if (parseInt($display.text()) < count) {
           var curr_count = parseInt($display.text()) + 1;
           $display.text(curr_count);
       } else {
           clearInterval(int);
       }
   }, int_speed);
}
countUp2(20);

function countUp3(count) {
   var div_by = 2,
       speed = Math.round(count / div_by),
       $display = $('.countdown_fourth'),
       run_count = 1,
       int_speed = 200;
   var int = setInterval(function () {
       if (run_count < div_by) {
           $display.text(speed * run_count);
           run_count++;
       } else if (parseInt($display.text()) < count) {
           var curr_count = parseInt($display.text()) + 1;
           $display.text(curr_count);
       } else {
           clearInterval(int);
       }
   }, int_speed);
}
countUp3(30);
      
      });