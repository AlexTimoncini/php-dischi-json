const { createApp } = Vue;

createApp({
    data() {
        return {
            serverUrl : './server.php',
            albums : [],
        }
    },

    methods: {
        getAlbums(){
            axios.get(this.serverUrl, {
                params: {}
            })
            .then((response)=> {
                this.albums = response.data;
                console.log(this.albums);
            })
            .catch(function (error) {
                console.log(error);
            })
        }
    },

    created() {
        this.getAlbums();
    },
}).mount('#app');