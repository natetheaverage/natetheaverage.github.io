<template>
  <div>
    <div class="product-container col-xs-6">
      <div>{{ item.title }}</div>

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
      </div>


    </div>
  </div>
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
  border: 3px solid #bbb;
  border-radius: 10px;
  padding: 20px;
}
.spotlight-image-container{

}
.spotlight-image{
  max-height:300px;
}
.thumb-container{
  display: flex;
  flex-direction: row;
  height:100px;
  padding: 12px;
}
.thumb-image{
  margin: auto;
}

</style>
