$(document).ready(function() {
  //variable declaration
  var $hostinput = $('#appbundle_body_rotation_id'),
  $typeinput = $('#appbundle_body_type_id'),
  $axisinput = $('#appbundle_body_axis'),
  $seffinput = $('#appbundle_body_seff');



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
        var host = $hostinput.val();
        var type = $typeinput.val();
        var axis = $axisinput.val();
        if (host == null || host == "" || type == null || type == "" || axis == null || axis == ""){
          window.alert("Il manque des infos pour calculer le Seff");
        }
        else{
          setSeff(host,type,axis);
        }
      });

      function setSeff(host,type,axis){
        $.getJSON( "/catalogue/body.json/seff/"+host+"/"+type+"/"+axis, function (data) {
          console.log(data);
          $seffinput.val(data);
        })
      }

});
