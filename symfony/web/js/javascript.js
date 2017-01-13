$(function() {
  $('[data-toggle="dropdown"]').live('click', function(e) {
  $( this ).parent().addClass( "open" );
  });

  $('#appbundle_body_rotation_id').autocomplete({
                source: function (request, response) {
                    console.log(request);
                    $.ajax({
                        url: "/catalogue/body.json/" + request.term,
                        dataType: "json",
                        type: "POST",
                        success: function (data) {
                            response($.map(data, function (item) {
                                return {
                                    label: item.name,
                                    value: item.id,
                                    ra: item.ra,
                                    decl: item.decl,
                                    distance: item.distance,
                                    age: item.age,
                                    name: item.name
                                }
                            }))
                        }
                    });
                },
                select : function(event, ui){
                  $('#appbundle_body_distance').val(ui.item.distance);
                  $('#appbundle_body_ra').val(ui.item.ra);
                  $('#appbundle_body_decl').val(ui.item.decl);
                  $('#appbundle_body_age').val(ui.item.age);
                  $('#host_name').val(ui.item.name).parent().show();

                },
                minLength: 1
            });
      $('#calculSeff').on('click',function(e){
        e.defaultPrevented;
        $.ajax({
          url: "/catalogue/body.json/seff/"+$('#appbundle_body_rotation_id').val()+"/"+$('#appbundle_body_type_id').val()+"/"+$('#appbundle_body_axis').val(),
          dataType: "json",
          type: "POST",
          success: function (data) {
            $('#appbundle_body_seff').val(data);
              }
        })
      });
});
