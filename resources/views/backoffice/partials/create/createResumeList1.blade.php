<div class="container">
    <form action="/backoffice/resume-storeResumeList1" method="POST">
        @csrf
        <div class="form-group">
          <div class="form-group">
            <label for="exampleInputEmail1">text</label>
            <input type="text" name="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>