<section class="container mt-5">
    <h1>contactList</h1>
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">ref</th>
            <th scope="col">class</th>
            <th scope="col">icon</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($contactList as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->ref}}</td>
              <td>{{$item->class}}</td>
              <td>{{$item->icon}}</td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
    </form>
  </section>