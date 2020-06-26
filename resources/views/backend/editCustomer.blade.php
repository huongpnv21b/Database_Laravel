<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> --}}
</head>
<body>
    <form method='post' enctype="multipart/form-data">
        @csrf
        <label> UPDATE</label>
        <div class="form-group">
            <label>  Ten khach hang</label>
            <input type="text" class="form-control" name="inputName"  placeholder="Tên khach hang..." value="{!! $customer["name"] !!}">
        </div>
        <div class="form-group">
            <label> Gioi tinh</label>
            <input type="text" class="form-control" name="inputGender"  placeholder="Tên khach hang..." value="{!! $customer["gender"] !!}">
        </div>
        <div class="form-group">
            <label>  Email</label>
            <input type="text" class="form-control" name="inputEmail"  placeholder="Tên khach hang..." value="{!! $customer["email"] !!}">

        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="inputAddress"  placeholder="Tên khach hang..." value="{!! $customer["address"] !!}">

        </div>
        <div class="form-group">
            <label> Phone Number</label>
            <input type="text" class="form-control" name="inputPhoneNumber"  placeholder="Tên khach hang..." value="{!! $customer["phone_number"] !!}">

        </div>
        <div class="form-group">
            <label> Note</label>
            <input type="text" class="form-control" name="inputNote"  placeholder="Tên khach hang..." value="{!! $customer["note"] !!}">
        </div>
        <input type="file" class="form-control" name="inputFile"  placeholder="Tên khach hang..." value="{!! $customer["image"] !!}">
        <input type="submit" name="submit" value="Submit">

      </form>
</body>
</html>
