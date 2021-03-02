<section class="container mt-5">
    <h1>pricings</h1>
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">titre</th>
            <th scope="col">chiffre</th>
            <th scope="col">text1</th>
            <th scope="col">text2</th>
            <th scope="col">text3</th>
            <th scope="col">text4</th>
            <th scope="col">text5</th>
            <th scope="col">text6</th>
            <th scope="col">btn</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pricings as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->titre}}</td>
              <td>{{$item->chiffre}}</td>
              <td>{{$item->text1}}</td>
              <td>{{$item->text2}}</td>
              <td>{{$item->text3}}</td>
              <td>{{$item->text4}}</td>
              <td>{{$item->text5}}</td>
              <td>{{$item->text6}}</td>
              <td>{{$item->btn}}</td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
    </form>
  </section>