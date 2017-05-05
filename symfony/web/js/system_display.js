
oCanvas.domReady(function () {
  var HTMLcanvas = document.getElementById("system");

  var star = {
    name: "Kepler-65",
    radius: 14.11,
    // radius: 16291.82,
    satellites:[
    {name: "Kepler-65 b",axis:3,radius:20,eccentricity:0,period:11},
    {name: "Kepler-65 c",axis:5,radius:50,eccentricity:0,period:25},
    {name: "Kepler-65 d",axis:7,radius:50,eccentricity:0,period:10},
    {name: "Kepler-65 e",axis:9,radius:25,eccentricity:0,period:30},
    {name: "Kepler-65 f",axis:11,radius:40,eccentricity:0.7,period:10},
    {name: "Kepler-65 g",axis:13,radius:30,eccentricity:0.9,period:11},
    // {name: "HSV-4",axis:160,radius:2,eccentricity:0.1,period:10},
    // {name: "HSV-5",axis:180,radius:8,eccentricity:0.3,period:50},
    // {name: "HSV-6",axis:200,radius:7,eccentricity:0,period:40}
    ]
  }
  var canvasStar, isSmallScene = false;
  var canvas = oCanvas.create({
  	canvas: "#system",
  	background: "#222"
  });

  var satelliteProto = canvas.display.ellipse({ fill: "#56a085" }),
  pathProto = canvas.display.ellipse({ stroke: "1px #fff" }),
  infosProto = canvas.display.rectangle({ stroke: "2px #999", fill: '#fff' }),
  textProto = canvas.display.text({ size: 12, fill: "1px #000"}),
  selectedPlanetProto = canvas.display.ellipse({ fill: 'radial-gradient(center, center, 50% width, rgba(229,229,229,0) 70%, rgba(100,180,180,0.4))' });
  var selectedPlanet = selectedPlanetProto, currentPlanet = satelliteProto, isPlanetSelected = false;
  // Set up data
  var smallSceneSatellites = [], fullSceneSatellites = [];
  //var satelliteColors = ["#a0aB99", "#BF92C0", "#c7509f","#E2DcFs","#BBBEEE"];
  var satelliteColor = "#3D5229"
  var pathColors = ["#666", "#107B99", "#5F92C0"];


  // Definition for a satellite and its corresponding path

  InitSmallScene();

  document.getElementsByName('fullScreen')[0].addEventListener("click", function(){
    isSmallScene = !isSmallScene;
    //HTMLcanvas.scrollIntoView();
    location.hash = "#system";
    loadCanvas();
  })
  window.onresize = function(event) {
    console.log("hello");
    loadCanvas();
  };
  HTMLcanvas.addEventListener ("mousewheel", function(e){
    if(canvasStar != null && e.isTrusted){
      Zoom(e.deltaY/300);
      return false;
    }
  });
  function loadCanvas(){
    canvas.timeline.stop();
    canvas.destroy();

    if(isSmallScene)
      InitSmallScene();
    else
      InitFullScene();
  }

  // canvas.bind("click tap", function () {
  //   runLoop();
  // });
  function Zoom(value){
    if (canvasStar.scalingX + value > 0.05){
      canvasStar.scalingX += value;
      canvasStar.scalingY += value;
    }
    else{
      canvasStar.scalingX = 0.05;
      canvasStar.scalingY = 0.05;
    }
  }

  function InitSmallScene(){
    HTMLcanvas.width = document.body.clientWidth > 600 ? document.body.clientWidth : 600;
    HTMLcanvas.height = 200;
    isSmallScene = true;
    canvas = oCanvas.create({
      canvas: "#system",
      background: "#222"
    });
    smallSceneSatellites = [];
    canvasStar = canvas.display.ellipse({
      x: 0, y: canvas.height/2,
      //radius: Math.log(star.radius) / 19 * canvas.height,
      radius: star.radius,
      fill: "#fB4"
    }).add();

    //Init objects for the small scene without animation
      star.satellites.sort(function(a,b){
        return b.axis - a.axis;
      })
      var ratio = 0.8 * (canvas.width - canvasStar.radius * 2) / star.satellites[0].axis;
      // console.log(ratio * star.satellites[0].axis +", width: " + canvas.width);
      // console.log(canvas.width - smallSceneStar.radius);
      // console.log(smallSceneStar.radius);
      // Create seven satellites and paths. Definition is further down.
      star.satellites.forEach(function(satellite, index, array){
        var scaledAxis = canvasStar.radius * 2 + satellite.axis * ratio;
        createSatellite({
          parent: canvasStar,
          name: satellite.name,
          axis: scaledAxis,
          radius: satellite.radius,
          period: satellite.period,
          eccentricity: 0
        }, smallSceneSatellites);


        var text = canvas.display.text({
          x: scaledAxis - satellite.radius / 2,
          y: canvas.height - 20,
          size: 20,
          text: satellite.name,
          strokeWidth:0,
          fill: "#fff",
          satelliteObj: smallSceneSatellites[smallSceneSatellites.length - 1],
          satelliteData: satellite
        });
        text.bind("click tap", PlanetSelected);
        text.add();
      })
      canvas.setLoop(selectedPlanetLoop);
      canvasStar.dragAndDrop();
  }

  // Init objetcs for the FullScreen scene with animation
  function InitFullScene(){
    HTMLcanvas.height = 0.99*window.innerHeight;
    HTMLcanvas.width =  0.99*window.innerWidth;

    canvas = oCanvas.create({
      canvas: "#system",
      background: "#222"
    });

    star.satellites.sort(function(a,b){
      return b.axis - a.axis;
    })
    fullSceneSatellites = [];
    canvasStar = canvas.display.ellipse({
      x: canvas.width / 2, y: canvas.height / 2,
      radius: star.radius,
      fill: "#fB4"
    }).add();
      var limit = canvas.width > canvas.height ? canvas.height : canvas.width;
      var ratio = (limit / 2 - canvasStar.radius ) / star.satellites[0].axis;
      star.satellites.forEach(function(satellite, index, array){
        var scaledAxis = canvasStar.radius * 2 + satellite.axis * ratio;
        createSatellite({
          parent: canvasStar,
          name: satellite.name,
          axis: scaledAxis,
          radius: satellite.radius,
          period: satellite.period,
          eccentricity: satellite.eccentricity
        }, fullSceneSatellites);

        var text = canvas.display.text({
          x: 10,
          y: 20 + index * 20,
          text: satellite.name,
          strokeWidth:0,
          fill: "#fff",
          satelliteObj: fullSceneSatellites[fullSceneSatellites.length - 1],
          satelliteData: satellite,
          zIndex: "front"
        });
        text.bind("click tap", PlanetSelected);
        text.add();
      })
      // fullSceneStar.scalingX = 0.5;
      // fullSceneStar.scalingY = 0.5;
      canvas.setLoop(function () {
        for (var i = 0, l = fullSceneSatellites.length; i < l; i++) {
          fullSceneSatellites[i].x = fullSceneSatellites[i].path.radius_x * Math.cos(fullSceneSatellites[i].angle) + fullSceneSatellites[i].path.x;
          fullSceneSatellites[i].y = fullSceneSatellites[i].path.radius_y * Math.sin(fullSceneSatellites[i].angle);
          fullSceneSatellites[i].angle += fullSceneSatellites[i].period / 2000;
        }
        if (isPlanetSelected)
          selectedPlanetLoop();
      });
      canvas.timeline.start();
      canvasStar.dragAndDrop();
  }


  //smallScene.load();



  function createSatellite (options, objectsArray) {
    //var color = satelliteColors[Math.floor(Math.random() * 4)];
    // Create the path that the satellite will follow
    var path = pathProto.clone({
      radius_x: options.axis,
      radius_y: calculSemiMinorAxis(options.eccentricity, options.axis),
      x: EccentricityCenter( options.eccentricity, options.axis) /*, y: center.y*/
    });
    options.parent.addChild(path);
    // Create a new satellite
    var satellite = satelliteProto.clone({
      origin: {
        x: 0,
        y: 0
      },
      radius: options.radius,
      x: path.x + path.radius_x, y: path.y,
      axis: options.axis,
      angle:0,
      period:options.period,
      path: path,
      name: options.name
      /*infoPanel = infos*/
    });
    console;log(satellite);
    satellite.dragAndDrop();
    options.parent.addChild(satellite);
    objectsArray.push(satellite);
    //satellite.bind("click tap",PlanetSelected);
    //path.bind("click tap", PathSelected);
  }

  function PlanetSelected(e){
    currentPlanet.removeChild(selectedPlanet);
    if(currentPlanet.path)
      currentPlanet.path.stroke = "1px #fff";
    if (this.satelliteObj == currentPlanet){
      currentPlanet = satelliteProto;
      if(isSmallScene)
        canvas.timeline.stop();
      return;
    }
    currentPlanet = this.satelliteObj;
    HighlightPlanet();
  }


  // function PlanetSelected(e){
  //   currentPlanet.removeChild(selectedPlanet);
  //   currentPlanet.path.stroke = "1px #fff";
  //   if(this == currentPlanet){
  //     currentPlanet = satelliteProto;
  //     if(isSmallScene)
  //       canvas.timeline.stop();
  //     return;
  //   }
  //   currentPlanet = this;
  //   HighlightPlanet();
  // }

  function HighlightPlanet(){

    selectedPlanet = selectedPlanetProto.clone({
      radius: currentPlanet.radius,
      size:3.1
    });
    currentPlanet.addChild(selectedPlanet);
    currentPlanet.path.stroke = "2px #eD2";
    currentPlanet.zIndex = "front";
    isPlanetSelected = true;
    if(!canvas.timeline.running)
      canvas.timeline.start();
  }

  function selectedPlanetLoop(){
    selectedPlanet.size = selectedPlanet.size + 0.1;
    selectedPlanet.radius = currentPlanet.radius * (1.25 + (Math.cos(selectedPlanet.size)/4) );
    // selectedPlanet.radius = currentPlanet.radius * selectedPlanet.size ;
  }

  function calculSemiMinorAxis(e, a){
    //Eccentricity2 = 1 - SemiMinorAxis2 / SemiMajorAxis2.
    var b = Math.sqrt((1 - Math.pow(e,2)) * Math.pow(a, 2))
    //console.log(b)
    return b;
  }


  function EccentricityCenter(e, axis){
    return axis - ( ( 1 - e ) * axis );
  }
});
