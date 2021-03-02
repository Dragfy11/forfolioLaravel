<div class="container">
    <form action="/backoffice-storeFooter" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">titre</label>
          <input type="text" name="titre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">subtitre</label>
            <input type="text" name="subtitre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">copy</label>
            <input type="text" name="copy" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">designed</label>
            <input type="text" name="designed" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">img</label>
            <input type="text" name="img" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>