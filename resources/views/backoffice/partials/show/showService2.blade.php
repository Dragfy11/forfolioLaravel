@section('content')
    <body>
    <div class="container mt-5">
    <div class="card" style="width: 18rem;">
          <div class="card-body">
              <h5 class="card-title">{{$showFooter->id}}</h5>
              <h5 class="card-title">Titre: {{$showFooter->titre}}</h5>
              <h5 class="card-title">Subtitre: {{$showFooter->subtitre}}</h5>
              <h5 class="card-title">text: {{$showFooter->text}}</h5>
              <h5 class="card-title">imgsrc: {{$showFooter->imgsrc}}</h5>
          </div>
      </div>
</div>
@endsection



