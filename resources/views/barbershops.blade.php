
<html>
    <body>
    <h1>весь список</h1>
    <h2> ну пожалуйста</h2>
    @foreach ($data as $el)
     <div class = "alert alert-info">
     <h3>{{ $el->barbershop_name}}</h3>
     </div>
    @endforeach
    </body>
    </html>