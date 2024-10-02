@extends('layouts.vertical', ['title' => 'General Elements'])

@section('content')

    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Category</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="/shop/categories">Shop</a></li>
                <li class="breadcrumb-item"><a href="/shop/categories">Category</a></li>
                <li class="breadcrumb-item active">Add</li>
            </ol>
        </div>
    </div>

    <!-- General Form -->
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header">
                    <h5 class="card-title mb-0">Add a Category</h5>
                </div><!-- end card header -->

                <div class="card-body">
                    <form action="{{route('categories.store')}}" method="POST" id="categoryform">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" id="name" name="name" class="form-control">
                                </div>
                                @error('nom')
                                <h1>u suck</h1>
                                @enderror
                                <div class="mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input class="form-control" type="file" id="image" name="image">
                                </div>
                                @error('image')
                                <h1>u suck</h1>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="5"
                                              spellcheck="false"></textarea>
                                </div>
                            </div>
                            @error('description')
                            <h1>u suck</h1>
                            @enderror
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>

@endsection
