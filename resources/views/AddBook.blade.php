<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<!-- Nav tabs -->
<ul class="nav nav-tabs" id="navId" role="tablist">
    <li class="nav-item">
        <a href="#tab1Id" class="nav-link active" data-bs-toggle="tab" aria-current="page">Active</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#tab2Id">Action</a>
            <a class="dropdown-item" href="#tab3Id">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#tab4Id">Action</a>
        </div>
    </li>
    <li class="nav-item" role="presentation">
        <a href="#tab5Id" class="nav-link" data-bs-toggle="tab">Another link</a>
    </li>
    <li class="nav-item" role="presentation">
        <a href="#" class="nav-link disabled" data-bs-toggle="tab">Disabled</a>
    </li>
</ul>

<!-- Tab panes -->
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
</div>



    <div class="container d-flex w-25">
    <form action="store" method="post">
        @csrf
        <div class="form-group">
          <label for="exampleInputTitle">Title</label>
          <input type="text" class="form-control" name="title" id="exampleInputTitle" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputAuther">Auther</label>
            <input type="text" name="author" class="form-control"  id="exampleInputAuther" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputTitle">description</label>
            <input type="text" class="form-control" name="desc" id="exampleInputTitle" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputTitle">Book Image</label>
            <input type="text" class="form-control" name="img" id="exampleInputTitle" aria-describedby="emailHelp" placeholder="Enter email">
          
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
      <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>