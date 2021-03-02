<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>

    <div class="container mt-5">
    <form action="/backoffice-updateFooter/{{$editFooter->id}}" method="post">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">titre</label>
            <input type="text" name="titre" value="{{$editFooter->titre}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">subtitre</label>
            <input type="text" name="subtitre" value="{{$editFooter->subtitre}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">copy</label>
            <input type="text" name="copy" value="{{$editFooter->copy}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">designed</label>
            <input type="text" name="designed" value="{{$editFooter->designed}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Img</label>
            <input type="text" name="img" value="{{$editFooter->img}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>





    <script src="{{asset('css/app.css')}}"></script>
</body>
</html>