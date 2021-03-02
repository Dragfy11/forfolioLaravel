<section class="container mt-5">
    <h1>header</h1>
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">ref</th>
            <th scope="col">titre</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($headers as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->ref}}</td>
              <td>{{$item->titre}}</td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
    </form>
  </section>