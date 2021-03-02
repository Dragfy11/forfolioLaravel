<section class="container mt-5">
    <h1>userTime</h1>
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">chiffre</th>
            <th scope="col">text1</th>
            <th scope="col">text2</th>
            <th scope="col">icon</th>
            <th scope="col">color</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($userTime as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->chiffre}}</td>
              <td>{{$item->text1}}</td>
              <td>{{$item->text2}}</td>
              <td>{{$item->icon}}</td>
              <td>{{$item->color}}</td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
    </form>
  </section>