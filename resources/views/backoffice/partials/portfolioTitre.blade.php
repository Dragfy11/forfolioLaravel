<section class="container mt-5">
    <h1>titrePortfolios</h1>
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">titre</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($titrePortfolios as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->titre}}</td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
    </form>
  </section>