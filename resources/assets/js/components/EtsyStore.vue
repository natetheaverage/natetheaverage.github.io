<template>
  <div>
      <div>Store title</div>
      <etsy-listing
        v-for="item in listings"
        :item='item'
      ></etsy-listing>
  </div>
</template>

<script>
export default {
    name: 'EtsyStoreContainer',
    data: () => {
        return {
          store: {},
          listings: {},
          params: {},
          pagination: {},
        }
    },
    methods: {
      loadListings(){
        this.$http.get('/api/listings').then( (data) => {
          this.listings = data.body.results
          this.params = data.params
          this.pagination = data.pagination
        })
      },
      loadStore(){
        this.$http.get('/api/store').then( (data) => {
          this.store = data
          // this.params = data.params
          // this.pagination = data.pagination
        })
      },
    },
    mounted(){
      console.log('Component mounted.')
       this.loadListings();
       this.loadStore();
    }
}
</script>

<style>
</style>
