
$(document).ready(function() {

  // hide defaults items
  $("#generate-infos").hide();

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
    // console.log($("#custom-search-input input").val());
    var spinner = new Spinner(opts).spin(target);

    //get all results from input search
    var planete_name = $("#custom-search-input input").val();

    if(planete_name != '') {
      ajaxGetListPlanete(planete_name, null).then(resp => {
        spinner.stop(); //stop the spinner
        $("#custom-search-input input").val('') // reset value

        var data = JSON.parse(resp);
        console.log(data);

        for (var i = 0; i < data.length; i++) {
          console.log(data[i].name);
          $("#list_planete").append("<li value="+data[i].id+" style='cursor:pointer'>"+data[i].name+"</li>");
        }


        //settings on click each planete
        $("#list_planete li").each(function() {
          $(this).on('click', function() {

            console.log($(this).val());

            if($(this).val() != '') {
              var spinner = new Spinner(opts).spin(target);

              var planete_id = $(this).val();
              ajaxGetListPlanete(null, planete_id).then(resp => {
                  spinner.stop();
                  console.log(resp);
                  var data = JSON.parse(resp);

                  // clear planete list
                  $("#list_planete li").each(function() {
                    $(this).remove();
                  });

                  // show generate view
                  $("#generate-infos").show();
                  $("#generate-infos .planete-name").text(data[0].name);

                  // for each categories generate input type checkbox
                  for (var properties in data[0]) {
                    if (data[0].hasOwnProperty(properties)) {
                      console.log(properties);
                      if(properties == "id" || properties == "type_id" || properties == "update_at") continue;
                      if(properties == "satellites")
                        console.log(properties);
                      $("#generate-infos form").append("<label><input type='checkbox' value='"+properties+"'>"+properties+"</label> ");
                    }
                  }


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

  function ajaxGetListPlanete(planete_name, planete_id) {
    return $.ajax({
      method: "GET",
      url: "/api/api_get_list_planete",
      data: {name: planete_name, id: planete_id}
    });
  }


});
