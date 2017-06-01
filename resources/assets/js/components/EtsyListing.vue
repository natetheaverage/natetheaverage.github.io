<template>
  <div>
      <div>{{ item.title }}</div>
      
  </div>
</template>

<script>
export default {
    name: 'EtsyItem',
    props: ['item'],
    data: () => {
        return {
          

        }
    },
    methods: {
      
    },
    mounted(){
      console.log('New Item Mounted.')
       
    }
}
</script>

<style>
</style>
