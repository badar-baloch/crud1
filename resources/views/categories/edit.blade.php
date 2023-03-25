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
    <form action="{{route('update-category',$category->id)}}" method="post">
        @csrf
        <div>
            <div>
                <div>
                    <label for="cat_name">Category Name</label>
                    <input type="text" name="cat_name" id="cat_name" placeholder="" value="{{$category->cat_name}}">
                </div>
                <div>
                    <label for="status">Status</label>
                    <select name="status" id="status">
                        <option value="1" {{$category->status == 1 ? 'selected' : ''}}>Active</option>
                        <option value="0" {{$category->status == 0 ? 'selected' : ''}}>Inactive</option>
                    </select>
                </div>
                <button type="submit">Update Category</button>
            </div>
        </div>
    </form>
</body>
</html>
