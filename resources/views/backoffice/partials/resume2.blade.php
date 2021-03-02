<section class="container mt-5">
    <h1>resume_list</h1>
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">titre1</th>
            <th scope="col">titre2</th>
            <th scope="col">text1</th>
            <th scope="col">text2</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($resume_list as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->titre1}}</td>
              <td>{{$item->titre2}}</td>
              <td>{{$item->text1}}</td>
              <td>{{$item->text2}}</td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
    </form>
  </section>