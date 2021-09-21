// Execute a JavaScript immediately after a page has been loaded
window.onload=function() {

  //video
  var video = document.getElementById("video");

  //Buttons
  var playButton = document.getElementById("play-pause");
  var fast_forward = document.getElementById("ff");
  var skip = 2;
  var fast = document.getElementById("fast");
  var muteButton = document.getElementById("mute");
  var fullScreenButton = document.getElementById("full-screen");
  var intervalRewind;

  //Sliders
  var seekBar = document.getElementById("video-bar");
  var volumeBar = document.getElementById("volume-bar");

  // Event Listeners
  playButton.addEventListener("click", function() {
    if (video.paused == true) {
      video.play();
      video.playbackRate = 1.0;
      clearInterval(intervalRewind)

      // When clicked. Button goes to pause Unicode
      playButton.innerHTML = "⏸";
    }
    else {
      video.pause();
      playButton.innerHTML = "▶";
    }
  });

  fast_forward.addEventListener("click", function(){
    video.currentTime += skip;
  });

  fast.addEventListener("click", function(){
  document.querySelector('video').playbackRate = 2.0;
  });

  reverse.addEventListener("click", function(){
   playback(1.0);
  });

  function playback(rewindSpeed) {
  clearInterval(intervalRewind);
 var startSystemTime = new Date().getTime();
 var startVideoTime = video.currentTime;

 intervalRewind = setInterval(function(){
     video.playbackRate = 1.0;
     if(video.currentTime == 0){
         clearInterval(intervalRewind);
         video.pause();
     }
     else {
         var elapsed = new Date().getTime()-startSystemTime;
         video.currentTime = Math.max(startVideoTime - elapsed*rewindSpeed/1000.0, 0);
     }
 }, 30);
}

muteButton.addEventListener("click",function() {
  if (video.muted == false)
  { // volume on
           video.muted = true;
           muteButton.innerHTML ="🔊";
  }
  else{
    video.muted=false;
    muteButton.innerHTML ="🔇";
   }
});

fullScreenButton.addEventListener("click", function() {
      if(video.requestFullscreen){
         video.requestFullscreen();
      }
      else if(video.mozRequestFullScreen){
        video.mozRequestFullScreen();// Firefox
      }
      else if(video.webkitRequestFullscreen){
        video.webkitRequestFullscreen();//Chrome & Safari
      }
});

volumeBar.addEventListener("change", function(){
   video.volume=volumeBar.value;
});

seekBar.addEventListener("change", function(){
  var time = video.duration * (seekBar.value / 100);
  video.currentTime = time;
});

video.addEventListener("timeupdate", function() {
  var value = (100 / video.duration) * video.currentTime;
  seekBar.value = value;
});

seekBar.addEventListener("mousedown", function() {
  video.pause();
});

seekBar.addEventListener("mouseup", function() {
  video.play();
});
}
