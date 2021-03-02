<section class="container mt-5">
    <h1>reTitres</h1>
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">titre</th>
            <th scope="col">subtitre</th>
            <th scope="col">text</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($reTitres as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->titre}}</td>
              <td>{{$item->subtitre}}</td>
              <td>{{$item->text}}</td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
    </form>
  </section>