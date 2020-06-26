<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

    <form method='post' enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label> Nhap ten khach hang</label>
            <input  class="form-control" type="text" name="inputName" placeholder="Name"><br>
        </div>
        <div class="form-group">
            <label> Nhap gioi tinh</label>
            <input  class="form-control" type="text" name="inputGender" placeholder="GioiTinh"><br>
        </div>
        <div class="form-group">
            <label> Nhap Email</label>
            <input  class="form-control" type="text" name="inputEmail" placeholder="Email"><br>

        </div>
        <div class="form-group">
            <label> Nhap Address</label>
            <input  class="form-control" type="text" name="inputAddress" placeholder="Address"><br>

        </div>
        <div class="form-group">
            <label> Nhap SDT</label>
            <input   class="form-control" type="text" name="inputPhoneNumber" placeholder="Phone Number"><br>

        </div>
        <div class="form-group">
            <label> Note</label>
             <input  class="form-control"  type="text" name="inputNote" placeholder="Note"><br>
        </div>
        <input type="file" name="inputFile">
        <input type="submit" name="submit" value="Submit">
        @include('errors')
      </form>

</body>
</html>
