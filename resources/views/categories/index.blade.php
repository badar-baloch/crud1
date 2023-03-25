<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>All Categories</title>
</head>
<body>
    <h2>All Categories</h2>
    <a href="{{route('new-category')}}" class="btn btn-success mx-1">Add New Category</a>
    <table class="table table-hover">
        <thead>

            <tr>
                <th>Id</th>
                <th>Category Name</th>
                <th>Slug</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)


            <tr>
             <td>{{$category->id}}</td>
             <td>{{$category->cat_name}}</td>
             <td>{{$category->slug}}</td>
             <td>{!! ($category->status) ? '<span>Active</span>':'<span>Inactive</span>' !!}</td>
             <td>{{$category->created_at}}</td>
             <td>{{$category->updated_at}}</td>
             <td>
                <a href="{{route('edit-category',$category->id)}}" class="btn btn-sm btn-outline-warning">Edit</a>
                <a href="{{route('view-category', $category->id)}}" class="btn btn-sm btn-outline-primary">View</a>
                <a href="{{route('delete-category', $category->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
             </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
