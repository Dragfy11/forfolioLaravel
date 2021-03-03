<section class="container mt-5">
    <h1>imagePortfolios</h1>
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">filter</th>
            <th scope="col">imgsrc</th>
            <th scope="col">titre1</th>
            <th scope="col">desc</th>
            <th scope="col">titre2</th>
            <th scope="col">ref</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($imagePortfolios as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->filter}}</td>
              <td>{{$item->imgsrc}}</td>
              <td>{{$item->titre1}}</td>
              <td>{{$item->desc}}</td>
              <td>{{$item->titre2}}</td>
              <td>{{$item->ref}}</td>
              <td><a class="btn btn-primary" href="/backoffice/portfolio-showPortfolioImg/{{$item->id}}">show</a></td>
              <td>
                <form action="/backoffice/portfolio-deletePortfolioImg/{{$item->id}}" method="post">
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
              </td>
              <td><a class="btn btn-primary" href="/backoffice/portfolio-editPortfolioImg/{{$item->id}}">Edit</a></td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
      @include('backoffice.partials.create.createPortfolioImg')
    </form>
  </section>