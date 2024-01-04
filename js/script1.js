// Set the date we're counting down to
var countDownDate = new Date("Nov 19, 2023 18:22:00").getTime();
// Update the count down every 1 second
var x = setInterval(function() {
    var counter = document.querySelector("#countdown");
  // Get today's date and time
  var now = new Date().getTime();
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  // Display the result in the element with id="demo"
  counter.innerHTML = days + "  يوم  " + hours + "  ساعة  "
  + minutes + "  دقيقة  " + seconds + "  ثانية  ";
  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    counter.innerHTML = "لقد وصلت متأخراً";
  }
}, 1000);

//  برمجية اختيار الرابح
const wineer =document.querySelector("#winner");
const loader =document.querySelector(".loader-con");

// التحميل
var ctx = document.getElementById('circularLoader').getContext('2d');
var al = 0;
var start = 4.72;
var cw = ctx.canvas.width;
var ch = ctx.canvas.height; 
var diff;
var sim;
function progressSim(){
	diff = ((al / 100) * Math.PI*2*10).toFixed(2);
	ctx.clearRect(0, 0, cw, ch);
	ctx.lineWidth = 17;
	ctx.fillStyle = 'rgb(83, 133, 183)';
	ctx.strokeStyle = "rgb(83, 133, 183)" ;
	ctx.textAlign = "center";
	ctx.font="28px monospace";
	ctx.fillText(al+'%', cw*.52, ch*.5+5, cw+12);
	ctx.beginPath();
	ctx.arc(100, 100, 75, start, diff/10+start, false);
	ctx.stroke();
	if(al >= 100){
		clearTimeout(sim);
	    myModal.show();
      // عشان يختفي
      loader.style.display = "none";
	}
	al++;
}

var myModal = new bootstrap.Modal(document.getElementById('modal'), {
  Keyboard: false
});
wineer.addEventListener("click",function(){
   loader.style.display = "block";
   // استعداء دالة التحميل
  sim = setInterval(progressSim, 100);

});



 