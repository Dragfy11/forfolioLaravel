<section class="container mt-5">
    <h1>contactList2</h1>
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">icon</th>
            <th scope="col">titre</th>
            <th scope="col">text</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($contactList2 as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->icon}}</td>
              <td>{{$item->titre}}</td>
              <td>{{$item->text}}</td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
    </form>
  </section>