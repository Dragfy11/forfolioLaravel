<div class="container">
    <form action="/backoffice/resume-storeResumeTitre" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Titre</label>
          <input type="text" name="titre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">subtitre</label>
            <input type="text" name="subtitre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">text</label>
            <input type="text" name="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>