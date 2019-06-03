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
  $('.timepicker').timepicker(
    {
      //default: 'now',
      twelvehour: true, // change to 12 hour AM/PM clock from 24 hour
      donetext: 'OK',
      format:"HH:ii:SS",
      autoclose: false,
      vibrate: true 
    }
  );
});