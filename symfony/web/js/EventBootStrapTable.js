$(document).ready(function(){

  function actionFormatter(value, row, index) {
      return [
          '<a class="like" href="#" title="Like">',
          '<i class="glyphicon glyphicon-heart"></i>',
          '</a>',
          '<a class="edit ml10" href="#" title="Edit">',
          '<i class="glyphicon glyphicon-edit"></i>',
          '</a>',
          '<a class="remove ml10" href="#" title="Remove">',
          '<i class="glyphicon glyphicon-remove"></i>',
          '</a>'
      ].join('');
  }

  window.actionEvents = {
    'click .like': function (e, value, row, index) {
        alert('You click like icon, row: ' + JSON.stringify(row));
        console.log(value, row, index);
    },
    'click .edit': function (e, value, row, index) {
        alert('You click edit icon, row: ' + JSON.stringify(row));
        console.log(value, row, index);
    },
    'click .remove': function (e, value, row, index) {
        alert('You click remove icon, row: ' + JSON.stringify(row));
        console.log(value, row, index);
    }
};

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
var hostinput = $('#appbundle_body_rotation_id'),
typeinput = $('#appbundle_body_type_id'),
distanceinput = $('#appbundle_body_distance'),
distanceUnit = $('#appbundle_body_parsecs'),
axisinput = $('#appbundle_body_axis'),
axisUnit = $('#appbundle_body_UA'),
seffinput = $('#appbundle_body_seff'),
radiusinput = $('#appbundle_body_radius'),
radiusUnit = $('#appbundle_body_Rt'),
massinput = $('#appbundle_body_masse'),
massUnit = $('#appbundle_body_Mt'),
densityinput = $('#appbundle_body_density'),
seffbutton = $('#calculSeff'),
densitybutton = $('#calculDensity');

$(document).on('click','[data-toggle="dropdown"]', function(e) {
$( this ).parent().addClass( "open" );
});

hostinput.autocomplete({
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
                distanceinput.val(ui.item.distance);
                $('#appbundle_body_ra').val(ui.item.ra);
                $('#appbundle_body_decl').val(ui.item.decl);
                $('#appbundle_body_age').val(ui.item.age);
                hostinput.val(ui.item.id).parent();
              },
              minLength: 1
          });
  seffbutton.on('click',function(e){
    e.defaultPrevented;
    var host = hostinput.val(),
    type = typeinput.val(),
    axis = axisinput.val(),
    axisUnit = axisUnit.val();

    if (IsNullOrEmpty(host) || IsNullOrEmpty(type) || IsNullOrEmpty(axis)){
      window.alert("Il manque des infos pour calculer le Seff");
    }
    else{
      if (axisUnit == 1){
        var distance = distanceinput.val();
        if (IsNullOrEmpty(distance)){
          window.alert("Il manque la distance, pour convertir l'axe");
        }
        else{
          if(distanceUnit.val() == 1){
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
            seffinput.val(data);
          })
  }

  densitybutton.on('click',function(e){
    e.defaultPrevented;
    var mass = massinput.val(),
    radius = radiusinput.val(),
    massUnit = massUnit.val(),
    radiusUnit = radiusUnit.val();
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
    densityinput.val(3*mass*Mt/(4000*Math.PI*Math.pow(radius,3)*Math.pow(Rt,3))) ;
    }
  })


  function IsNullOrEmpty(value){
    return (value == null || value == "");
  }

});