<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Booltify</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <div id="app">
            <header>
                <nav>
                    <h1>BOOLTIFY</h1>
                </nav>
            </header>
            <main>
                <div class="container">
                    <div class="row">
                        <div class="cards col-12 d-flex flex-wrap justify-content-center">
                            <div class="card m-4" v-for="(album, index) in albums" :key="index">
                                <img :src="album.poster" class="card-img-top" :alt="album.title" @click="displayInfo(index)" draggable="false">
                                <div class="card-body text-center">
                                    <p class="card-text">{{ album.title }}</p>
                                    <p class="card-text">{{ album.author }}</p>
                                    <p class="card-text">{{ album.year }}</p>
                                </div>
                            </div>
                            <div class="ivy_pop d-flex" v-if="displayedAlbum">
                                <div class="card m-auto">
                                    <img :src="albumTriggered.poster" class="mb-4" :alt="albumTriggered.title" draggable="false" @click="displayedAlbum = !displayedAlbum">
                                    <div class="text-center">
                                        <p class="fs-2">{{ albumTriggered.title }}</p>
                                        <p class="fs-3">{{ albumTriggered.author }}</p>
                                        <p class="fs-4">{{ albumTriggered.year }}</p>
                                    </div>
                                </div>
                                <button class="ivy_close_btn" @click="displayedAlbum = !displayedAlbum">X</button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <script src="./script/script.js"></script>
    </body>
</html>