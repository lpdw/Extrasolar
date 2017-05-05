
$(document).ready(function() {

  // hide defaults items
  $("#generate-infos").hide();
  $("#html-generated").hide();

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

    $("#generate-infos").hide();

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
            $("#generate-infos").show();

            if($(this).val() != '') {
              var spinner = new Spinner(opts).spin(target);

              var planete_id = $(this).val();

              $.get("api/api_planete", {id: planete_id, get_props: "true"})
              .done(function(resp) {
                spinner.stop();
                console.log("props ==> ", resp);

                // clear planete list
                resetPlaneteList();

                // show generate view
                showGeneratePlanete(resp);
              }).fail(function() {
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

     var planete_name = JSON.parse(planete.name)[0].name;
     var props = JSON.parse(planete.props);

     $("#generate-infos").show();
     $("#generate-infos .planete-name").text(planete_name);

     // remove all input and button
     $("#generate-infos form .input-group").each(function() {
       $(this).remove();
     });
    $("#generate-infos form").find("button").remove();

     // for each categories generate input type checkbox
     for (var i = 0; i < props.length; i++) {
       if(props[i] == "id" || props[i] == "type_id" || props[i] == "update_at") continue;
      //  if(props[i] == "satellites") console.log(props[i].satellites);
       $("#generate-infos form").append("<div class='input-group'><label><input type='checkbox' value='"+props[i]+"'>&nbsp;"+props[i]+"</label></div>");
     }

     $("#generate-infos form").append("<div class='col-lg-8'><button type='button' class='btn btn-primary' id='btn-generate'>GENERER</button></div>");

     $("#btn-generate").click(function() {
       var props_checked = getAllPropertiesChecked();

       console.log(props_checked);

       // for each properties get values => send request to get information
       var datas = { "name": planete_name, "type": "json", "props": props_checked };

       $.post("api/api_planete", JSON.stringify(datas))
       .done(function(resp) {
         console.log(resp);

         constructApiHtml(resp);
       }).fail(function(err) {
          console.log(err);
       });

     });

   }

   function constructApiHtml(resp) {
     $("#html-generated").show();
     $("#generated-html").find("code").remove();
     $("#visualisation-html-generated").find("table").remove();

     var html_to_copy = "&lt;table class='table'&gt; &lt;tbody&gt;";
     var html_visu = "<table class='table'> <tbody>";

     for (var prop in resp[0]) {
       if (resp[0].hasOwnProperty(prop)) {
         html_to_copy += "&lt;tr&gt; &lt;td&gt; &lt;b&gt;"+prop+"&lt;/b&gt; &lt;/td&gt; &lt;td&gt;"+resp[0][prop]+"&lt;/td&gt; &lt;/tr&gt;";
         html_visu += "<tr><td><b>"+prop+"</b></td><td>"+resp[0][prop]+"</td> </tr>";
       }
     }

     html_to_copy += "&lt;/tbody&gt; &lt;/table&gt;";
     html_visu += "</tbody></table>";

     $("#generated-html").append("<div class='row'><code>"+html_to_copy+"</code></div>");
     $("#visualisation-html-generated").append("<div class='row col-lg-10'>"+html_visu+"</div>");
   }

   function getAllPropertiesChecked() {
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
      url: "/api/api_planete",
      data: {name: planete_name, id: planete_id, get_planete_list: 'true'}
    });
  }

});
