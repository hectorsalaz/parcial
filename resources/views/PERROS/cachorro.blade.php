<div class="card" style="width: 18rem;" class ="container">
  <img src="img/puri.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">ALIMENTO PARA PERRO</h5>
    <p class="card-text"><ul>
    @foreach($dogy as $c)
        <li> {{$c}}</li>

    @endforeach
</ul></p>
    <a href="#" class="btn btn-primary">comprar</a>
  </div>
</div>


<div class="card" style="width: 18rem;">
  <img src="img/per.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">LOCION CANINA</h5>
    <p class="card-text"><ul>
    @foreach($dog as $x)
        <li> {{$x}}</li>

    @endforeach
</ul></p>
    <a href="#" class="btn btn-primary">comprar</a>
  </div>
</div>


