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
    <form action="/backoffice/resume-updateResume3/{{$editResume3->id}}" method="post">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">titre</label>
            <input type="text" name="titre" value="{{$editResume3->titre}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">subtitre1</label>
              <input type="text" name="subtitre1" value="{{$editResume3->subtitre1}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">subtitre2</label>
              <input type="text" name="subtitre2" value="{{$editResume3->subtitre2}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Text1</label>
              <input type="text" name="text1" value="{{$editResume3->text1}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Text2</label>
              <input type="text" name="text2" value="{{$editResume3->text2}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Text3</label>
              <input type="text" name="text3" value="{{$editResume3->text3}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Text4</label>
              <input type="text" name="text4" value="{{$editResume3->text4}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>





    <script src="{{asset('css/app.css')}}"></script>
</body>
</html>