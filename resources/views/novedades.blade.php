<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>novedades</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body style="background-color:#7952b3; font-family:verdana;">
    <div class="container-fluid bg-white">
        <div class="row p-5">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link px-5;" href="/"><h4>Libreria</h4></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-5" href="/novedades"><h4>Novedades</h4></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-5" href="/contacto"><h4>Contacto</h4></a>
                </li>
        </div>
    </div>

<!-- <form action="" method="post"> -->
    <div class="container pt-5">
        <div class="table-responsive">
            <table class="table">
                <tr><td><img src="img/libro4.jpeg" alt=""></td><td>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body" id="elUltimoMago">
                            <h5 class="card-title">el ultimo mago</h5>
                            <p class="card-text" id="precio">$800</p>
                            <input type="number" min="0" name="cantidad" id="cantidad" value='0'>
                            <button type="submit" class="btn btn-warning mt-2" class="card-link" id='boton'>
                            <img src="/cart-check.svg" width="25px"heigth="25px" alt="">agregar al carrito</button>
                            </div>
                    </div></td>
                <td><img src="img/libro3.jpeg" alt=""></td><td>
                    <div class="card" style="width: 18rem;">
                            <div class="card-body"id="el-poder-del-cerebro">
                                <h5 class="card-title">el poder del cerebro</h5>
                                <p class="card-text">$1300</p>
                                <input type="number" min="0" name="cantidad" id="cantidad">
                                <button type="submit" class="btn btn-warning mt-2" class="card-link" id='boton'>
                                <img src="/cart-check.svg" width="25px"heigth="25px" alt="">agregar al carrito</button>
                            </div>                                
                            </div>
                        </div>
                </td></tr>
                <tr><td><img src="img/libro2.jpeg" alt=""></td><td>
                <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                <a type="button" class="btn btn-warning"href="#" class="card-link">
                                <img src="/cart-check.svg" width="25px"heigth="25px" alt="">agregar al carrito</a>
                            </div>
                                </div>
                        </div>
                </td><td><img src="img/libro4.jpeg" alt=""></td><td>
                <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a type="button" class="btn btn-warning"href="#" class="card-link">
                                <img src="/cart-check.svg" width="25px"heigth="25px" alt="">agregar al carrito</a>
                            </div>
                                </div>
                        </div>
                </td></tr>
                <tr><td><img src="img/libro5.jpeg" alt=""></td><td>
                <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a type="button" class="btn btn-warning"href="#" class="card-link">
                                <img src="/cart-check.svg" width="25px"heigth="25px" alt="">agregar al carrito</a>
                            </div>                                </div>
                        </div>
                </td>
                <td><img class="pt-5" src="/arrow-down-circle.svg"width=170px heigth=170px alt=""></td><td><h1  class="pt-5  text-center display-2">Destacado</h1></td>
                </tr>
            </table>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="img/libromanzana.jpg" class= "img-fluid pt-4"alt="">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <img src="img/libro1.webp" class="pt-4"alt="">
            </div>
            <div class="col-lg-3 col-md-2 col-sm-12">
            <div class="card mt-4" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a type="button" class="btn btn-warning"href="#" class="card-link">
                            <img src="/cart-check.svg" width="25px"heigth="25px" alt="">agregar al carrito</a>
                            </div>                                
                        </div> 

                        
            </div>
           
        </div>
        
    </div>

    <!-- </form>  -->
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function(){

        var libros = ['#elUltimoMago','#el-poder-del-cerebro'];

        libros.forEach(elemento => subtotal(elemento));
            
      
        function subtotal(value){
            $(value).children('#boton').click(function(){
                var cant = parseInt( $(value).children('#cantidad').val() || 0);    
                $(value).children('#cantidad').val(cant+1);
            });
        }
        //naty
        // $('#elUltimoMago').children('#boton').click(function(){
        //     var cant = parseInt( $('#elUltimoMago').children('#cantidad').val());
            
        //     $('#elUltimoMago').children('#cantidad').val(cant+1);
        // });

       // $('#elUltimoMago').children('#cantidad').val('0')

    });
    
    </script>
</body>
</html>