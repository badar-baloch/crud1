<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Add New Category</title>
</head>
<body>
    <h2>Add New Category</h2>
    <a href="{{route('categories')}}" class="btn btn-success mx-1">All Category</a>
    <form action="{{route('store-new-category')}}" method="post">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-5">
                <div class="mb-3">
                    <label for="cat_name" class="form-label">Category Name</label>
                    <input type="text" id="cat_name" name="cat_name" placeholder="Category Name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-select form-select-lg">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
                @csrf
                <button type="submit" class="btn btn-primary">submit</button>
            </div>
        </div>
    </form>
</body>
</html>
