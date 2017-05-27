<template>
  <div class="container-fluid">
    <div class="video-player">
      <video
          :id="playerId"
          class="video-js vjs-default-skin"
          width="640" height="360"
          data-setup='{ 
            "techOrder": ["youtube"],
              "sources": [{ 
                "type": "video/youtube", 
                "src": "https://www.youtube.com/watch?v=u2WMtua24SY"
            }] 
          }'
        >
      </video>
    </div>
    
    <!--width="640" height="360"
          techOrder= "youtube"
          :src="videoUrl"
          data-setup='{ 
            "techOrder": ["youtube"],
              "sources": [{ 
                "type": "video/youtube", 
                "src": "https://www.youtube.com/watch?v=u2WMtua24SY"
            }] 
          }'-->
  </div>
</template>

<script>
import videojs from 'video.js'
// const 

// myPlayer.src("https://www.youtube.com/watch?v=u2WMtua24SY");
// myPlayer.ready(function() {
   // function call throws an error if we
    // dont add {IWillNotUseThisInPlugins: true}
  //  var tech = myPlayer.tech({IWillNotUseThisInPlugins: true});
// });
  export default {
    name: 'VideoPlayerJS',
    props: ['playerId','videoUrl'],
    data: () => {
      return {
        hworld: "hi planet",
        myPlayer: { 
            techOrder: ["youtube"],
              sources: [{ 
                type: "video/youtube", 
                src: this.videoUrl
            }] 
          },
      }
    },
    methods: {

    },
    mounted: () => {
      this.hworld = "no";
      console.log(this.videoUrl);
      // const vpid = this.playerId;
      // const vpurl = this.videoUrl;
      // videojs( {{this.playerId}}, {
      //   controls: true,
      //   autoplay: true,
      //   preload: 'auto',
      //   techOrder: ["youtube"],
      //         sources: [{ 
      //           type: "video/youtube", 
      //           src: vpurl
      //       }] 
          
      // });
    }
}
    
  
</script>

<style lang="stylus">
</style>
