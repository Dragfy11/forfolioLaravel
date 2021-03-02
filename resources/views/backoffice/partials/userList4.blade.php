<section class="container mt-5">
    <h1>userList4</h1>
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">titre</th>
            <th scope="col">chiffre</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($userList4 as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->titre}}</td>
              <td>{{$item->chiffre}}</td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
    </form>
  </section>