@extends('layouts.vertical', ['title' => 'General Elements'])

@section('content')

    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Gamification Shop</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="/back/shop/items">Shop</a></li>
                <li class="breadcrumb-item"><a href="/back/shop/items">Item</a></li>
                <li class="breadcrumb-item active">Add</li>
            </ol>
        </div>
    </div>

    <!-- General Form -->
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header">
                    <h5 class="card-title mb-0">Add an Item</h5>
                </div><!-- end card header -->

                <div class="card-body">
                    <form action="{{route('items.store')}}"  enctype="multipart/form-data" method="POST" id="itemform">
                        {{ csrf_field() }}
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="validationServerUsername" class="form-label">Name</label>
                                    <div class="input-group has-validation">
                                        <input type="text" name="name" id="name" class="form-control  @error('name') is-invalid @enderror" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback">
                                        @error('name')
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="validationTooltip04" class="form-label">Category</label>
                                    <select name="category" id="category" class="form-select" id="validationCategory" required>
                                        <option selected disabled value="">Choose</option>
                                        @for ($i = 0; $i < count($Categories); $i++)
                                            <option value="{{$Categories[$i]['id']}}">{{$Categories[$i]['name']}}</option>
                                        @endfor
                                    </select>

                                    <div class="invalid-tooltip">Please select a valid state.</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="validationServerQuantity" class="form-label">Quantity</label>
                                    <div class="input-group has-validation">
                                        <input type="number" name="quantity" id="quantity" class="form-control  @error('quantity') is-invalid @enderror" id="validationServerQuantity" aria-describedby=" validationServerQuantityFeedback">
                                        @error('quantity')
                                        <div id="validationServerQuantityFeedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="validationServerPrice" class="form-label">Price</label>
                                    <div class="input-group has-validation">
                                        <input type="number" name="price" id="price" class="form-control  @error('price') is-invalid @enderror" id="validationServerPrice" aria-describedby=" validationServerPriceFeedback">
                                        @error('price')
                                        <div id="validationServerQuantityFeedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <div class="input-group has-validation">
                                    <textarea class="form-control" id="description" aria-describedby="validationServerDescriptionFeedback" name="description" rows="5"
                                              spellcheck="false"></textarea>
                                    </div>
                                    @error('description')
                                    <div id="validationServerDescriptionFeedback" class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 mb-2 mb-lg-0">
                                <label for="validationServerImage" class="form-label">Image</label>
                                <div class="input-group has-validation">
                                    <input id='validationServerImage' name="image" class="form-control @error('image') is-invalid @enderror" type="file"  aria-describedby="validationServerUsernameFeedback">
                                    @error('image')
                                    <div id="validationServerImage" class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>

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
