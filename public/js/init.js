(function($){
  $(function(){
  $('.sidenav').sidenav();
  $('.dropdown-trigger').dropdown();
  
  })
})(jQuery);

$(document).ready(function(){
  $('.collapsible').collapsible();
  $('select').select();
  $('.datepicker').datepicker({format: 'yyyy-mm-dd'});
  $('.tooltipped').tooltip();
});
    