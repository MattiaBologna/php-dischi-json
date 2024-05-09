<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    
    <div id="app">

        <header class="bg-primary p-3">

            <div class="logo text-white fs-1 fw-bolder">DISCKS</div>

        </header>
        
        <main class="bg-dark py-4">
            <section>
                <div class="container">
                    <div class="row">
                        <div v-for="(disk, i) in disks" class="col-4">
                            <div  class="card m-2 bg-info" style="width: 18rem;" data-bs-toggle="modal" data-bs-target="#exampleModal" @click="testFunction(i)">
                                <img :src="disk.poster" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{disk.author}}</h5>
                                    <p class="card-text">{{disk.title}}</p>
                                    <p class="card-text">{{disk.year}}</p>
                                    <p class="card-text">{{disk.genre}}</p>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">{{currentDisk.author}}</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <img :src="currentDisk.poster" class="mw-100" alt="poster">
                                                <p>{{currentDisk.title}}</p>
                                                <p>{{currentDisk.year}}</p>
                                                <p>{{currentDisk.genre}}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script> 
</body>
</html>