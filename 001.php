<html>
   <body bgcolor='black'>
      <style>
         body {
         display: flex;
         justify-content: center;
         align-items: center;
         height: 100vh;
         background-color: black;
         margin: 0;
         }
         #logo {
         position: absolute;
         top: 60%;
         left: 52%;
         transform: translate(-50%, -50%);
         z-index: 10;
         opacity: 0.1;
         }
      </style>
      <div id="jwplayerDiv"></div>
      <img id="logo" src="https://cyberyakku.com/wp-content/uploads/2022/07/r-logo31.png" alt="Logo">
   </body>
   <script src="https://content.jwplatform.com/libraries/Z79JsmAO.js"></script>
   <script>	
      jwplayer("jwplayerDiv").setup({
      	width: '100%', height: '100%',
          //playlist: [{
              file: "https://bpcdn.dialog.lk/bpk-tv/Ch001/out/index.mpd",
      		//type: "dash",
      	    drm: {
      	        clearkey: {
                   keyId: '1f2e731573655ae3a63855555b328050',
      	          key: 'e43c179b76eaa7981b61a760130059e4'
      	          
      	        }
      	      }
         // }]
      });
   </script>
</html>
