<div class="container">
    <form action="/backoffice/portfolio-storePortfolioImg" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">filter</label>
          <input type="text" name="filter" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">imgsrc</label>
            <input type="text" name="imgsrc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">titre1</label>
            <input type="text" name="titre1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <div class="form-group">
            <label for="exampleInputEmail1">desc</label>
            <input type="text" name="desc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">titre2</label>
            <input type="text" name="titre2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">ref</label>
            <input type="text" name="ref" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>