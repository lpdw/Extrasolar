$(document).ready(function() {
  //Constante declaration
  var  al = 9.4607304725808E+015,
  pc = 3.09E+16,
  UA = 1.50E+11,
  Rt = 6371008,
  Rj = 69911000;
  Rs = 696342000,
  Mt = 5.97E+24,
  Mj = 1.90E+27,
  SeffT = 1.37E+03,
  Ms = 1.99E+30,
  SIGMA = 5.67E-08;
  //variable declaration
  var $hostinput = $('#appbundle_body_rotation_id'),
  $typeinput = $('#appbundle_body_type_id'),
  $axisinput = $('#appbundle_body_axis'),
  $seffinput = $('#appbundle_body_seff'),
  $radiusinput = $('#appbundle_body_radius'),
  $massinput = $('#appbundle_body_masse'),
  $densityinput = $('#appbundle_body_density'),
  $seffbutton = $('#calculSeff'),
  $densitybutton = $('#calculDensity');

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
      $seffbutton.on('click',function(e){
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

      $densitybutton.on('click',function(e){
        e.defaultPrevented;
        var mass = $massinput.val();
        var radius = $radiusinput.val();
        if (mass == null || mass == "" || radius == null || radius == ""){
          window.alert("Il manque des infos pour calculer la densité");
        }
        else{
        $densityinput.val(3*mass*Mt/(4000*Math.PI*Math.pow(radius,3)*Math.pow(Rt,3))) ;
        }
      })


});
