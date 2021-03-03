<div class="container">
    <form action="/backoffice/resume-storeResume3" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Titre</label>
          <input type="text" name="titre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Subtitre1</label>
            <input type="text" name="subtitre1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Subtitre2</label>
            <input type="text" name="subtitre2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <div class="form-group">
            <label for="exampleInputEmail1">text1</label>
            <input type="text" name="text1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">text2</label>
            <input type="text" name="text2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">text3</label>
            <input type="text" name="text3" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">text4</label>
            <input type="text" name="text4" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>