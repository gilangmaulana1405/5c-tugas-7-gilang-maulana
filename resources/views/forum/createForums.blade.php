<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Insert Forum</title>
</head>
<body>
    <div class="container">
        <h1>Hello, world!</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#createNewForumModal">
            Create Forum
        </button>

        <!-- Modal -->
        <div class="modal fade" id="createNewForumModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="createNewForumModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="createNewForumModalLabel">Create New Forum</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/createForum" method="POST">
                    <div class="modal-body">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Forum Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
        <table class="table table-bordered table-striped">
            <h3>All Forums Table</h3>
            <thead>
                <tr>
                    <th>Forum Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($forums as $forum)
                <tr>
                    <td>{{ $forum->name }}</td>
                    <td>
                        <a class="btn btn-outline-secondary" href="{{ route('deleteForum',$forum->id) }}" role="button">Delete Forum</a>
                        <a class="btn btn-outline-secondary" href="editForumForm" role="button">Follow</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
