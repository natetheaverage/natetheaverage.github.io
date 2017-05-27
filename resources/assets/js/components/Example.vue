<template>
  <div>
    
      <div v-text="printing">broke</div>

  </div>
</template>

<script>
  export default {
    name: 'test',
    data: () => {
      return {
        printing: "hi planet"
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
