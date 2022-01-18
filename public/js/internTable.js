document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.datepicker');
  var options = {
    defaultDate: new Date(2022, 1, 11),
    setDefaultDate: true,
    //container: 'body'
  };
  var instances = M.Datepicker.init(elems, options);

  // var instance = M.Datepicker.getInstance(elem);

  var elems = document.querySelectorAll('.modal');
  var instances = M.Modal.init(elems, options);
  console.log("hello");
  window.addEventListener('openPagamentoLongModal', event => {
    console.log("modal showing");
    $("#validate-modal").modal('show');

})

window.addEventListener('closePagamentoLongModal', event => {
    $("#PagamentoLongModal").modal('hide');
})
});

function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).html()).select();
  document.execCommand("copy");
  $temp.remove();
 }