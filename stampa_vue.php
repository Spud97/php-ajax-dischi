<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi VUE</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>

<body>
    <div id="app">
        <?php include "partials/theHeader.php" ?>

        <div class="bg-main">
            <div class="container py-5">
                <div class="row row-cols-5">

                    <div class="col" v-for="disco in listaDischi">
                        <div class="card bg-card d-flex flex-column text-center p-3 mt-3">
                            <img :src="disco.src" alt="" />
                            <h4>{{disco.titolo}}</h4>
                            <span>{{disco.artista}}</span>
                            <span>{{disco.anno}}</span>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <script src="js/vue.js"></script>
</body>

</html>