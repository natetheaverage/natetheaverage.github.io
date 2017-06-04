<template>
  <div>
      <div class="title">{{store.section}}</div>
      <hr />
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
          console.log(data)
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
