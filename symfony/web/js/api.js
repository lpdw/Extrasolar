
$(document).ready(function() {

  // hide defaults items
  $("#generate-infos").hide();
  $("#generated-html").hide();

  /**
   * OPTIONS
   */
   var opts = {
      lines: 13 // The number of lines to draw
    , length: 28 // The length of each line
    , width: 14 // The line thickness
    , radius: 42 // The radius of the inner circle
    , scale: 1 // Scales overall size of the spinner
    , corners: 1 // Corner roundness (0..1)
    , color: '#fff' // #rgb or #rrggbb or array of colors
    , opacity: 0.25 // Opacity of the lines
    , rotate: 0 // The rotation offset
    , direction: 1 // 1: clockwise, -1: counterclockwise
    , speed: 1 // Rounds per second
    , trail: 60 // Afterglow percentage
    , fps: 20 // Frames per second when using setTimeout() as a fallback for CSS
    , zIndex: 2e9 // The z-index (defaults to 2000000000)
    , className: 'spinner' // The CSS class to assign to the spinner
    , top: '50%' // Top position relative to parent
    , left: '50%' // Left position relative to parent
    , shadow: false // Whether to render a shadow
    , hwaccel: false // Whether to use hardware acceleration
    , position: 'absolute' // Element positioning
    }
  var target = document.getElementById('spinner');

  /**
   * SELECTORS
   */
  $("#custom-search-input button").click(function() {
    // reset planete lit
    resetPlaneteList();

    var spinner = new Spinner(opts).spin(target); // start spinner

    //get all results from input search
    var planete_name = $("#custom-search-input input").val();

    if(planete_name != '') {
      ajaxGetListPlanete(planete_name, null).then(resp => {
        spinner.stop(); //stop the spinner
        $("#custom-search-input input").val('') // reset value

        var data = JSON.parse(resp);
        console.log(data);

        for (var i = 0; i < data.length; i++)
          $("#list_planete").append("<li value="+data[i].id+" style='cursor:pointer'>"+data[i].name+"</li>");


        //settings on click each planete
        $("#list_planete li").each(function() {
          $(this).on('click', function() {

            if($(this).val() != '') {
              var spinner = new Spinner(opts).spin(target);

              var planete_id = $(this).val();
              ajaxGetListPlanete(null, planete_id).then(resp => {
                  spinner.stop();
                  console.log(resp);
                  var data = JSON.parse(resp);

                  // clear planete list
                  resetPlaneteList();

                  // show generate view
                  showGeneratePlanete(data);

              }, function(err) {
                console.log(err);
                spinner.stop();
              });
            }

          });
        });


      }, function(err) {
        console.log(err);
        spinner.stop();
      });
    }

  });




  /**
   * FUNCTIONS
   */

   function resetPlaneteList() {
     $("#list_planete li").each(function() {
       $(this).remove();
     });
   }

   function showGeneratePlanete(planete) {
     $("#generate-infos").show();
     $("#generate-infos .planete-name").text(planete[0].name);

     // for each categories generate input type checkbox
     for (var properties in planete[0]) {

       if (planete[0].hasOwnProperty(properties)) {
         console.log(properties);
         if(properties == "id" || properties == "type_id" || properties == "update_at") continue;
         if(properties == "satellites") console.log(planete[0].satellites);

        $("#generate-infos form").append("<div class='input-group'><label><input type='checkbox' value='"+properties+"'>&nbsp;"+properties+"</label></div>");
       }
     }

     $("#generate-infos form").append("<div class='col-lg-8'><button type='button' class='btn btn-primary' id='btn-generate'>GENERER</button></div>");

     $("#btn-generate").click(function() {
       var props = getAllProperties();

       // for each properties get values
       

     });
   }


   function getAllProperties() {
     var props = new Array();

     $("#generate-infos form input").each(function() {
       if($(this).prop("checked")) {
         props.push($(this).val());
       }
     });

     return props;
   }

  function ajaxGetListPlanete(planete_name, planete_id) {
    return $.ajax({
      method: "GET",
      url: "/api/api_get_list_planete",
      data: {name: planete_name, id: planete_id}
    });
  }


});
