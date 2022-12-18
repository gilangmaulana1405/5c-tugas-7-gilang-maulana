<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Hello, world!</h1>
        <a class="btn btn-outline-secondary" href="insertUserForm" role="button">Insert User</a>
        <a class="btn btn-outline-secondary" href="forumForm" role="button">Forums</a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nama Pengguna</th>
                    <th>Forum</th>
                    <th width="1%">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>
                        <ul>
                            @foreach($user->forums as $forum)
                            <li> {{ $forum->nama }} </li>
                            @endforeach
                        </ul>
                        <form action="/deleteUser/{{ $user->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-secondary" type="submit">Delete User</button>
                        </form>
                        <a href="createForumForm" type="button" class="btn btn-outline-secondary">
                            Add Forum
                        </a>
                    </td>
                    <td class="text-center">{{ $user->forums->count() }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
