export default {
    data() {
        return {

        }
    },
    methods: {
        loadNate() {
            this.$http.get('/api/user').then((data) => {
                // this.listings = data.results
                // this.params = data.params
                // this.pagination = data.pagination
            })
        },
    },
    mounted() {

    },
}