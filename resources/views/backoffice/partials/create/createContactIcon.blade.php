<div class="container">
    <form action="/backoffice/contact-storeContactIcon" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Icon</label>
          <input type="text" name="icon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">titre</label>
            <input type="text" name="titre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>