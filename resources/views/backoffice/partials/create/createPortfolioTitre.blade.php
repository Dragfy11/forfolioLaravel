<div class="container">
    <form action="/backoffice/portfolio-storePortfolioTitre" method="POST">
        @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">titre</label>
            <input type="text" name="titre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>