<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h2>View And Edit</h2>
     <a href="{{route('categories')}}" class="btn btn-success mx-1">All Category</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <td>Id</td>
                <td>Category Name</td>
                <td>Slug</td>
                <td>Status</td>
                <td>Action</td>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->cat_name}}</td>
                <td>{{$category->slug}}</td>
                <td>{!!($category->status) ? '<span class="badge badge-success">Active</span>':'<span>Inactive</span>'!!}</td>
                <td>
                    <a href="{{route('edit-category', $category->id)}}" class="btn btn-sm btn-outline-warning">Edit</a>
                </td>
            </tr>

        </tbody>

    </table>
</body>
</html>
