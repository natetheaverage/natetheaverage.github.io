<template>
  <div>
    
      <div v-text="colorNumber">regular</div>

  </div>
</template>

<script>
  export default {
    name: 'test',
    data() {
      return {
        colors: ['#16F0F0', '#00FF00', '#FFFF00', '#FF14AB', '#16F0F0'],
        pathEls: document.querySelectorAll('path'),
        colorNumber: '6'//anime.random(0, 3),
      }
    },
    methods: {

    },
    ready() 
    {
      console.log('Component mounted.')  
    }
}
    
  
</script>

<style lang="stylus">
</style>
