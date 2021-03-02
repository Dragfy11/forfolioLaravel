<div class="container">
    <form action="/backoffice-storeHeader" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Ref</label>
          <input type="text" include="/"name="ref" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Titre</label>
            <input type="text" name="titre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>