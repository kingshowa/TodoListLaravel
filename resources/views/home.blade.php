<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="nofollow" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>ToDo List</title>
</head>
<body class="" >
    <div class="container">
        <div class="row">
            <br><br>
            <div class="col-xl-6 offset-md-3 bg-info my-5 p-5">
                <h1 class="text-center">ToDo List</h1>               
                <form action="{{ route('store') }}" method="POST" autocomplete="off">
                    @csrf
                    <div class="row">
                        <div class="col-xl-10">
                            <input type="text" name="content" class="form-control">
                        </div>
                        <div class="col-xl-2">
                            <button type="submit" class="btn btn-success">Add</button>
                        </div>
                    </div>    
                </form>

                <hr>

                <table>
                    @if(count($todolists))

                    @foreach( $todolists as $todolist)
                    <tr>
                        <td width="750">{{ $todolist->content}}</td>
                        <td width="100">
                            <form action="{{ route('destroy', $todolist->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-small btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @endif           
                </table>
                
            </div>
        </div>
    </div>
</body>
</html>