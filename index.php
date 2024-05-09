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

        <header class="bg-success p-3">

            <div class="logo">LOGO</div>

        </header>
        
        <main>
            <section>
                <div class="container">
                    <div class="row">
                        <div v-for="disk in disks" class="col-4">
                            <div  class="card m-2" style="width: 20rem;">
                                <img :src="disk.poster" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{disk.author}}</h5>
                                    <p class="card-text">{{disk.title}}</p>
                                    <p class="card-text">{{disk.year}}</p>
                                    <p class="card-text">{{disk.genre}}</p>
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