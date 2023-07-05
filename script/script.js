const { createApp } = Vue;

createApp({
    data() {
        return {
            serverUrl : './server.php',
        }
    },

    methods: {
        getAlbums(){
            axios.get(this.serverUrl, {
                params: {}
            })
            .then((response)=> {
                console.log(response.data);
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