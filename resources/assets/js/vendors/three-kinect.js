// <!DOCTYPE html>
// <html lang="en">
//   <head>
//     <title>three.js - kinect</title>
//     <meta charset="utf-8">
//     <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
//     <style>
//       body {
//         font-family: Monospace;
//         background-color: #000000;
//         margin: 0px;
//         overflow: hidden;
//       }

//       #info {
//         color: #ffffff;

//         font-family: Monospace;
//         font-size: 13px;
//         text-align: center;
//         font-weight: bold;

//         position: absolute;
//         top: 5px; width: 100%;
//       }

//       a {

//         color: #0040ff;

//       }
//     </style>
//   </head>
//   <body>

//     <script src="../build/three.js"></script>

//     <script src='js/libs/dat.gui.min.js'></script>

//     <script src="js/Detector.js"></script>
//     <script src="js/libs/stats.min.js"></script>

// <script id="vs" type="x-shader/x-vertex">

      uniform sampler2D map;

      uniform float width;
      uniform float height;
      uniform float nearClipping, farClipping;

      uniform float pointSize;
      uniform float zOffset;

      varying vec2 vUv;

      const float XtoZ = 1.11146; // tan( 1.0144686 / 2.0 ) * 2.0;
      const float YtoZ = 0.83359; // tan( 0.7898090 / 2.0 ) * 2.0;

      void main() {

        vUv = vec2( position.x / width, position.y / height );

        vec4 color = texture2D( map, vUv );
        float depth = ( color.r + color.g + color.b ) / 3.0;

        // Projection code by @kcmic

        float z = ( 1.0 - depth ) * (farClipping - nearClipping) + nearClipping;

        vec4 pos = vec4(
          ( position.x / width - 0.5 ) * z * XtoZ,
          ( position.y / height - 0.5 ) * z * YtoZ,
          - z + zOffset,
          1.0);

        gl_PointSize = pointSize;
        gl_Position = projectionMatrix * modelViewMatrix * pos;

      }

    </script>

    <script id="fs" type="x-shader/x-fragment">

      uniform sampler2D map;

      varying vec2 vUv;

      void main() {

        vec4 color = texture2D( map, vUv );
        gl_FragColor = vec4( color.r, color.g, color.b, 0.2 );

      }

    </script>

    <script>

      var container;

      var scene, camera, light, renderer;
      var geometry, cube, mesh, material;
      var mouse, center;
      var stats;

      var video, texture;

      if ( Detector.webgl ) {

        init();
        animate();

      } else {

        document.body.appendChild( Detector.getWebGLErrorMessage() );

      }

      function init() {

        container = document.createElement( 'div' );
        document.body.appendChild( container );

        var info = document.createElement( 'div' );
        info.id = 'info';
        info.innerHTML = '<a href="http://threejs.org" target="_blank">three.js</a> - kinect';
        document.body.appendChild( info );

        stats = new Stats();
        // container.appendChild( stats.dom );

        camera = new THREE.PerspectiveCamera( 50, window.innerWidth / window.innerHeight, 1, 10000 );
        camera.position.set( 0, 0, 500 );

        scene = new THREE.Scene();
        center = new THREE.Vector3();
        center.z = - 1000;

        video = document.createElement( 'video' );
        video.addEventListener( 'loadedmetadata', function ( event ) {

          texture = new THREE.VideoTexture( video );
          texture.minFilter = THREE.NearestFilter;

          var width = 640, height = 480;
          var nearClipping = 850, farClipping = 4000;

          geometry = new THREE.BufferGeometry();

          var vertices = new Float32Array( width * height * 3 );

          for ( var i = 0, j = 0, l = vertices.length; i < l; i += 3, j ++ ) {

            vertices[ i ] = j % width;
            vertices[ i + 1 ] = Math.floor( j / width );

          }

          geometry.addAttribute( 'position', new THREE.BufferAttribute( vertices, 3 ) );

          material = new THREE.ShaderMaterial( {

            uniforms: {

              "map":          { value: texture },
              "width":        { value: width },
              "height":       { value: height },
              "nearClipping": { value: nearClipping },
              "farClipping":  { value: farClipping },

              "pointSize":    { value: 2 },
              "zOffset":      { value: 1000 }

            },
            vertexShader: document.getElementById( 'vs' ).textContent,
            fragmentShader: document.getElementById( 'fs' ).textContent,
            blending: THREE.AdditiveBlending,
            depthTest: false, depthWrite: false,
            transparent: true

          } );

          mesh = new THREE.Points( geometry, material );
          scene.add( mesh );

          var gui = new dat.GUI();
          gui.add( material.uniforms.nearClipping, 'value', 1, 10000, 1.0 ).name( 'nearClipping' );
          gui.add( material.uniforms.farClipping, 'value', 1, 10000, 1.0 ).name( 'farClipping' );
          gui.add( material.uniforms.pointSize, 'value', 1, 10, 1.0 ).name( 'pointSize' );
          gui.add( material.uniforms.zOffset, 'value', 0, 4000, 1.0 ).name( 'zOffset' );
          gui.close();


        }, false );
        video.loop = true;
        video.muted = true;
        video.src = 'textures/kinect.webm';
        video.setAttribute( 'webkit-playsinline', 'webkit-playsinline' );
        video.play();

        renderer = new THREE.WebGLRenderer();
        renderer.setPixelRatio( window.devicePixelRatio );
        renderer.setSize( window.innerWidth, window.innerHeight );
        container.appendChild( renderer.domElement );

        mouse = new THREE.Vector3( 0, 0, 1 );

        document.addEventListener( 'mousemove', onDocumentMouseMove, false );

        //

        window.addEventListener( 'resize', onWindowResize, false );

      }

      function onWindowResize() {

        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();

        renderer.setSize( window.innerWidth, window.innerHeight );

      }

      function onDocumentMouseMove( event ) {

        mouse.x = ( event.clientX - window.innerWidth / 2 ) * 8;
        mouse.y = ( event.clientY - window.innerHeight / 2 ) * 8;

      }

      function animate() {

        requestAnimationFrame( animate );

        render();
        stats.update();

      }

      function render() {

        camera.position.x += ( mouse.x - camera.position.x ) * 0.05;
        camera.position.y += ( - mouse.y - camera.position.y ) * 0.05;
        camera.lookAt( center );

        renderer.render( scene, camera );

      }

