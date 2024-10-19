@extends('layouts.vertical', ['title' => 'Basic Tables'])

@section('content')
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Gamification Shop</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Shop</a></li>
                <li class="breadcrumb-item active">Category</li>
            </ol>
        </div>
    </div>


        <!-- Hoverable Rows -->
        <div class="">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title mb-0">Categories</h5>
                    <a href="categories/create"><i data-feather="plus-circle" style="height: 20px; width: 20px; color:gray;"></i></a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Picture</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @for ($i = 0; $i < count($Categories); $i++)
                                <tr>
                                    <th scope="row">{{$i}}</th>
                                    <td>{{$Categories[$i]['name']}}</td>
                                    <td>{{$Categories[$i]['description']}}</td>
                                    <td><img  class="img-fluid" style="max-width: 100px; height: auto;" src="{{asset($Categories[$i]['image'])}}" /></td>
                                    <td class="d-flex py-5 justify-content-center align-items-center gap-1">
                                        <i class="text-primary" data-feather="eye"  style="height: 20px; width: 20px;"></i>
                                        <a class="text-success" href="{{route('categories.edit', $Categories[$i]['id'])}}"><i data-feather="edit"  style="height: 20px; width: 20px;"></i></a>
                                        <form action="{{ route('categories.destroy', $Categories[$i]['id']) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="border-0 text-danger" style="background: none; padding: 0; cursor: pointer;"><i data-feather="trash"  style="height: 20px; width: 20px;"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>




    </div>
@endsection

