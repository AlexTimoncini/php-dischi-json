const { createApp } = Vue;

createApp({
    data() {
        return {
            serverUrl : './server.php',
            albums : [],
            displayedAlbum : false,
            albumTriggered : '',
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
        },
        displayInfo(elIndex){
            this.displayedAlbum = true;
            this.albumTriggered = this.albums[elIndex];
        }
    },

    created() {
        this.getAlbums();
    },
}).mount('#app');