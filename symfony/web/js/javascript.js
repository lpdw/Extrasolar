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
  $distanceinput = $('#appbundle_body_distance'),
  $distanceUnit = $('#appbundle_body_parsecs'),
  $axisinput = $('#appbundle_body_axis'),
  $axisUnit = $('#appbundle_body_UA'),
  $seffinput = $('#appbundle_body_seff'),
  $radiusinput = $('#appbundle_body_radius'),
  $radiusUnit = $('#appbundle_body_Rt'),
  $massinput = $('#appbundle_body_masse'),
  $massUnit = $('#appbundle_body_Mt'),
  $densityinput = $('#appbundle_body_density'),
  $seffbutton = $('#calculSeff'),
  $densitybutton = $('#calculDensity');

  $('[data-toggle="dropdown"]').on('click', function(e) {
  $( this ).parent().addClass( "open" );
  });
  $('#appbundle_body_rotation_id').parent().hide();
  $('#host_name').autocomplete({
                source: function (request, response) {
                    console.log(request);
                    $.ajax({
                        url: "/admin/catalogue/body.json/" + request.term,
                        dataType: "json",
                        type: "POST",
                        success: function (data) {
                            response($.map(data, function (item) {
                                return {
                                    label: item.name,
                                    value: item.name,
                                    ra: item.ra,
                                    decl: item.decl,
                                    distance: item.distance,
                                    age: item.age,
                                    name: item.name,
                                    id: item.id
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
                  $('#host_name').val(ui.item.name);
                  $('#appbundle_body_rotation_id').val(ui.item.id).parent().show();

                },
                minLength: 1
            });
    $seffbutton.on('click',function(e){
      console.log('coucou');
      e.defaultPrevented;
      var host = $hostinput.val(),
      type = $typeinput.val(),
      axis = $axisinput.val(),
      axisUnit = $axisUnit.val();

      if (IsNullOrEmpty(host) || IsNullOrEmpty(type) || IsNullOrEmpty(axis)){
        window.alert("Il manque des infos pour calculer le Seff");
      }
      else{
        if (axisUnit == 1){
          var distance = $distanceinput.val();
          if (IsNullOrEmpty(distance)){
            window.alert("Il manque la distance, pour convertir l'axe");
          }
          else{
            if($distanceUnit.val() == 1){
              distance = (distance * al)/pc;
            }
            axis = axis * distance;
          }
        }
        setSeff(host,type,axis);
      }
    });

    function setSeff(host,type,axis){
      console.log("Seff");
      $.getJSON( "/admin/catalogue/body.json/seff/"+host+"/"+type+"/"+axis,
             function (data) {
              $seffinput.val(data);
            })
    }

    $densitybutton.on('click',function(e){
      e.defaultPrevented;
      var mass = $massinput.val(),
      radius = $radiusinput.val(),
      massUnit = $massUnit.val(),
      radiusUnit = $radiusUnit.val();
      if (IsNullOrEmpty(mass) || IsNullOrEmpty(radius)){
        window.alert("Il manque des infos pour calculer la densité");
      }
      else{
        if(radiusUnit == 1){
          radius = radius*(Rj/Rt);
        }else if (radiusUnit == 2) {
          radius = radius*(Rs/Rt);
        }
        if(massUnit == 1){
          mass = mass*(Mj/Mt);
        }else if (radiusUnit == 2) {
          mass = mass*(Ms/Mt);
        }
      $densityinput.val(3*mass*Mt/(4000*Math.PI*Math.pow(radius,3)*Math.pow(Rt,3))) ;
      }
    })


    function IsNullOrEmpty(value){
      return (value == null || value == "");
    }

});
