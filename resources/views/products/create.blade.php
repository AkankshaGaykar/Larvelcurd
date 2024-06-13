<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Laravel 11 CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="dark"></span></a>
      </li>
      <li class="nav-item">
      <a  class="nav-link" href="#"class="sr-only">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Review</a>
      </li>
      <li class="nav-item">
      <a  class="nav-link" href="{{ route('products.index') }}" class="sr-only">Back</a>
      </li>
    </ul>
  </div>
</nav>
    <div class="bg-dark py-3">
      <h3 class="text-white text-center">Simple Laravel 11 CRUD</h3>
    </div>
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-10 d-flex justify-content-end">
      
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-md-10">
          <div class="card border-0 shadow-lg my-3">
            <div class="card-header bg-dark">
              <h3 class="text-white">Create Product</h3>
            </div>
            <form enctype="multipart/form-data" action="{{ route('products.store') }}" method="post">
              @csrf
              <div class="card-body">
                <div class="mb-3">
                  <label for="name" class="form-label h5">Name</label>
                  <input value="{{ old('name') }}" type="text" class="@error('name') is-invalid @enderror form-control form-control-lg" placeholder="Name" name="name">
                  @error('name')
                    <p class="invalid-feedback">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="sku" class="form-label h5">SKU</label>
                  <input value="{{ old('sku') }}" type="text" class="@error('sku') is-invalid @enderror form-control form-control-lg" placeholder="SKU" name="sku">
                  @error('sku')
                    <p class="invalid-feedback">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="price" class="form-label h5">Price</label>
                  <input value="{{ old('price') }}" type="text" class="@error('price') is-invalid @enderror form-control form-control-lg" placeholder="Price" name="price">
                  @error('price')
                    <p class="invalid-feedback">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label h5">Description</label>
                  <textarea placeholder="Description" class="form-control" cols="30" rows="5" name="description">{{ old('description') }}</textarea>
                </div>
                <div class="mb-3">
                  <label for="image" class="form-label h5">Image</label>
                  <input type="file" class="form-control form-control-lg" name="image">
                </div>
                <div class="d-grid">
                  <button class="btn btn-lg btn-primary">Submit</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
