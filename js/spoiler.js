$(document).ready(function(){
 $('.spoiler_links').click(function(){
   $('div.spoiler_body').slideToggle('normal');
  return false;
 });
$('.user_links').click(function(){
  $(this).parent().children('div.user_spoiler_body').toggle('normal');
  return false;
 });
});