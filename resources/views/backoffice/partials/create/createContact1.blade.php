<div class="container">
    <form action="/backoffice/contact-storeContact1" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Ref</label>
          <input type="text" name="ref" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Class</label>
            <input type="text" name="class" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">icon</label>
            <input type="text" name="icon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>