<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
    <form action="/datos" method="post">
    @csrf
    <div class="container-fluid">
    <div class="row pt-3"></div>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-lg-6 col-md-6 col-sm-12"> 
            <div class="card p-3 m-5 border border-light border-0 text-center" style="width: 48rem; background-color:#7952b3; font-size:1rem;">
                <div class="card-body" style="font-family:Liberation Sans;">
                    <h4 class="card-title" style="color:white;">ingresa tus datos</h4>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="nombre">nombre</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nombre">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default" >telefono</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" name="telefono" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">email</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class= "row">
                    <div class="col-8"></div>
                    <div class="col-4">
                    <button type="submit" class="btn btn-outline-warning btn-lg border-3 mt-2" style="font-family:Liberation Sans;">enviar solicitud</button>
                    </div>
                    </div>
                </div>
                
            </div>
    </form>
            <!-- @@isset($nombre) -->
            @if(!empty($nombre))
            
            <p>{{ $nombre ?? '' }} {{ $telefono ?? ''}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis maiores id molestiae minus aperiam! Natus dignissimos tempore est eos quo a, voluptates nesciunt fuga, delectus impedit reiciendis deleniti laborum dolor itaque rem nobis laudantium neque similique, rerum sequi odit? Nam, ad ea aperiam consectetur assumenda ducimus maxime delectus eos iusto quibusdam, repellendus illum voluptate harum sit sapiente animi minima aspernatur quaerat illo nesciunt quasi necessitatibus ex. Quibusdam necessitatibus maxime commodi molestiae dolorum eos quaerat quasi pariatur rem eius natus ipsa sunt beatae eaque quas saepe, eligendi eveniet autem dolore animi vitae? Unde quibusdam, maiores placeat consequuntur assumenda ipsa possimus dolorum?</p>

            @endif
        </div>
    </div>

    </div>
</body>
</html>