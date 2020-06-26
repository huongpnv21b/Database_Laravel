<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="name">name</th>
            <th scope="gender">gender</th>
            <th scope="email">Email</th>
            <th scope="address">address</th>
            <th scope="phone_number">phone_number</th>
            <th scope="note">note</th>
            <th scope="image">image</th>
            <th scope="Action">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
            <tr>
                <td>{!! $customer->name !!}</td>
                <td>{!! $customer->gender!!}</td>
                <td>{!! $customer->email !!}</td>
                <td>{!! $customer->address !!}</td>
                <td>{!! $customer->phone_number !!}</td>
                <td>{!! $customer->note !!}</td>
                <td>
                    <img src="{!! asset($customer["image"]) !!}" width="30" alt="{!! $customer["name"] !!}">
                </td>
                {{-- <td><img src="{!! $customer->image !!}" alt=""></td> --}}
                <td>
                    <a href="{!! url('delete',$customer["id"]) !!}">Delete</a>
                    <a href="{!! url('edit',$customer["id"]) !!}">Update</a>

                    {{-- url('delete') tự đặt cho đường dẫn chạy --}}
                </td>

            </tr>
          @endforeach

        </tbody>
      </table>

</body>
</html>
