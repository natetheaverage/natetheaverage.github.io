<template>
  <div class="col-xs-12 col-sm-6 col-lg-4">


      <div class="product-container" >
      <div class="listing-title">{{ item.title }}</div>
      </br>
        <div class="spotlight-image-container">
          <img
            class="spotlight-image"
            :src="currentImage"  
          />
        </div>
 
        <div class="thumb-container">
          <img 
            @click="currentImage=image.url_570xN"
            v-for="image in images" 
            :src="image.url_75x75"
            class="thumb-image" 
          />
        </div> <!--thumb container-->
        
        <p><div class="listing-price">${{ item.price }}</div>
        <p><div class="listing-description">${{ item.description }}</div>
        <a :href="item.url">More on Etsy!</a>
    </div> <!--product container-->
  </div><!--Vue container-->
</template>

<script>
export default {
    name: 'EtsyItem',
    props: ['item'],
    data: () => {
        return {
          images:{},
          currentImage:{},
        }
    },
    methods: {
      loadImages(){
        this.$http.get(`/api/images/${this.item.listing_id}`).then( (data) => {
          this.images = data.body.results
          this.currentImage = data.body.results[0].url_570xN
          
        })
      },
      
    },

    mounted(){
      this.loadImages();
      
      // if (this.images){
      //   console.log(this.images);
      //   this.currentImage = this.images[0].url_570xN
      // };
      
      console.log('New Item Mounted.')
       
    }
}
</script>

<style>
.product-container{
  /* border: 1px solid #aaa; */
  /* border-radius: 10px; */
  margin: 2px;
  padding: 0;
  display: flex;
  /* flex-direction: column; */
  overflow: hidden;
  
}
.listing-title{
  font-weight: 400;
  font-size: 16px;
  max-height: 20px;
  padding: 3px 3px;
  /* overflow: hidden; */
}
.listing-price{
  font-family: Courier New, Courier, monospace;
  font-weight: 600;
  font-size: 14px;
  padding: 3px 3px;
}
.spotlight-image-container{
  margin: auto;
}
.spotlight-image{
  max-height:250px;
  border-radius: 5px 5px 0 0;
}
.thumb-container{
  display: flex;
  max-height:250px;
  flex-direction: column;
  /* border-top: solid 1px #aaa;
  border-bottom: solid 3px #aaa; */
}
.thumb-image{
  margin: auto;
}

</style>
