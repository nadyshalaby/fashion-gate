$(document).ready(function(){
  $(".close").click(function(){
    $(".alert").has(this).hide("easeOutCubic");
  });
});
