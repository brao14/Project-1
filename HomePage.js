$(document).ready(function() {
   $('h1.HH').mouseenter(function() {
       $(this).animate({
           height: '+=10px'
       });
   });
   $('h1.HH').mouseleave(function() {
       $(this).animate({
           height: '-=10px'
       });
   });
 });

 $(document).ready(function() {
   $('a').mouseenter(function() {
       $(this).css({
           "color":"pink"
       });
    });
   $('li').mouseenter(function(){
       $(this).animate({
           height: '+=10px'
       });
    });
   $('a').mouseleave(function() {
       $(this).css({
           "color":"black"
       });
    });
   $('li').mouseleave(function() {
       $(this).animate({
            height: '-=10px'
       });
   });
 });
 $(document).ready(function(){
     // to fade in on page load
     $("body").css("display", "none");
     $("body").fadeIn(400);
     // to fade out before redirect
     $('a').click(function(e){
         redirect = $(this).attr('href');
         e.preventDefault();
         $('body').fadeOut(400, function(){
             document.location.href = redirect
         });
     });
 })
 $(document).ready(function(){
   $('.clubdropdown').click(function(){
     $('.clubscontent').slideToggle("slow")
   });
 });
 $(document).ready(function(){
   $('.sportsdropdown').click(function(){
     $('.sportscontent').slideToggle("slow")
   });
 });
 $(document).ready(function(){
   $('.workdropdown').click(function(){
     $('.workcontent').slideToggle("slow")
   });
 });
 $(document).ready(function(){
   $('.instrumentsdropdown').click(function(){
     $('.instrumentscontent').slideToggle("slow")
   });
 });
 $(document).ready(function(){
   $('.lessonsdropdown').click(function(){
     $('.lessonscontent').slideToggle("slow")
   });
 });

var audio = new Audio('LaloCelloConcerto.mp3');
var audio1 = new Audio('UnitedStatesOfEurasia.mp3');
var audio2 = new Audio('Clocks.mp3');

function playCello()
{
  audio.play();
}
function stopCello()
{
  audio.pause();
}
function playPiano()
{
  audio1.play();
}
function stopPiano()
{
  audio1.pause();
}
function playVocal()
{
  audio2.play();
}
function stopVocal()
{
  audio2.pause();
}
$(document).ready(function()
{
  $('.playbutton').click(function()
  {
    playCello();
  });
});

$(document).ready(function()
{
  $('.stopbutton').click(function()
  {
    stopCello();
  });
});
$(document).ready(function()
{
  $('.playbutton2').click(function()
  {
    playPiano();
  });
});

$(document).ready(function()
{
  $('.stopbutton2').click(function()
  {
    stopPiano();
  });
});
$(document).ready(function()
{
  $('.playbutton3').click(function()
  {
    playVocal();
  });
});

$(document).ready(function()
{
  $('.stopbutton3').click(function()
  {
    stopVocal();
  });
});
