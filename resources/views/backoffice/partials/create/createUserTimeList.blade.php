<div class="container">
    <form action="/backoffice/about-storeUserTimeList" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">chiffre</label>
          <input type="text" name="chiffre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
            <label for="exampleInputEmail1">icon</label>
            <input type="text" name="icon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">color</label>
            <input type="text" name="color" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>