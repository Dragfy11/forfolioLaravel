<section class="container mt-5">
    <h1>reLists</h1>
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">text</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($reLists as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->text}}</td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
    </form>
  </section>