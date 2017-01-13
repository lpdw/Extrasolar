$(function() {
  $('[data-toggle="dropdown"]').live('click', function(e) {
  $( this ).parent().addClass( "open" );
    //$('.btn-group.dropup').addClass( "open" );
  });
});
