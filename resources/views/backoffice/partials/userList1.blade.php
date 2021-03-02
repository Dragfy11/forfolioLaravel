<section class="container mt-5">
    <h1>userList1</h1>
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">titre</th>
            <th scope="col">subtitre</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($userList1 as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->titre}}</td>
              <td>{{$item->subtitre}}</td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
    </form>
  </section>