(function($){
  $(function(){
  $('.sidenav').sidenav();
  $('.dropdown-trigger').dropdown();
  })
})(jQuery);
$(document).ready(function(){
  $('.collapsible').collapsible();
  $('select').formSelect();
  $('.datepicker').datepicker({format: 'yyyy-mm-dd'});
  $('.timepicker').timepicker();
});