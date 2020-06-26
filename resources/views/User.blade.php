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
            <th scope="email">Email</th>
            <th scope="password">Password</th>
            <th scope="remember_token">remember_token</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{!! $user->name !!}</td>
                <td>{!! $user->email!!}</td>
                <td>{!! $user->password !!}</td>
                <td>{!! $user->remember_token !!}</td>
                {{-- <td> <a href="{!! url ('delete',$user['id']) !!}" >XOa </a></td> --}}
            </tr>
          @endforeach

        </tbody>
      </table>

</body>
</html>
