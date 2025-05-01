<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>L O O S E</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $this->include('/templates/header.php') ?>
    <!-- STYLES -->
    <style>

        body{
            background-image: none;
            background-color: rgba(82, 128, 180);
        }

        .container-fluid::before{
            height:0;
        }

        a{
            font-family: "Basement Grosteque";
            color: white;
        }

        .card{
            border: 0px;
        }

        #loose-h1{
            font-family: "Basement Grosteque";
            letter-spacing: 2rem;
            color: white;
            /* -webkit-text-stroke: 2px black; */
            font-size: 2rem;
            text-align: center;
            padding-left: 4rem;
        }

        .massive-cont{
            height: 20vh;
            width: 100%;
            margin: 0;
            
        }

        #menu-cont{
            padding:0;
        }
        .list-group-item{
            background-color: transparent;
        }

        a:hover{
            text-decoration: none;
            color: white;
        }

        .static{
            position:absolute;
        }

        .static:hover{
            opacity: 0;
        }


        @media screen and (max-height: 1000px) {            
            #loose-h1{
                letter-spacing: 1rem;
                padding-left:2rem;
            }
            .massive-cont{
                margin-top:10vh;
            }

        }

    </style>
    
</head>
<body>
    <div class="container-fluid m-0 p-0">    
        <!-- HEADER: MENU + HEROE SECTION -->
        <header>
            <div class="heroe row m-0">
                <div class="col-12 my-auto p-0">
                    <h1 id="loose-h1">LOOSE</h1>
                </div>
            </div>
        </header>

        <!-- CONTENT -->
        <section class="massive-cont row justify-content-center">
            <div id="menu-cont" class="col-12 align-self-center"  data-aos="fade-up">
                <div id="menu">            
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-center px-0">
                            <a class="text-center" href="<?= site_url('') ?>">
                                <div class="card">

                                    <div class="card-img-overlay">
                                        <h5 class="card-title">WATAN</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text">Last updated 3 mins ago</p>
                                    </div>
                                    <img class="card-img img-fluid static" src="<?= site_url("/assets/img/whatsup/WATAN.jpg")?>" /> <img class="card-img img-fluid active" src="<?= site_url("/assets/img/whatsup/WATAN.gif")?>" />
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item text-center">
                            <a class="text-center" href="<?= site_url('WhatsUp') ?>">What We've Been Up To</a>
                        </li>
                        <li>
                            <a></a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>

<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->


<!-- SCRIPTS -->

<script src="<?= base_url("assets/lib/aos-master/dist/aos.js") ?>">
</script>

<script> AOS.init()</script>

<!-- -->

</body>
</html>
