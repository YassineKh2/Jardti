@extends('layouts.vertical', ['title' => 'Grid'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Grid</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
            <li class="breadcrumb-item active">Grid</li>
        </ol>
    </div>
</div>

<!--  Grid System -->
<div class="row">
    <div class="col-xl-12">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Grid Option</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-nowrap mb-0">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center">
                                    xs<br>
                                    <span class="fw-normal">&lt;576px</span>
                                </th>
                                <th scope="col" class="text-center">
                                    sm<br>
                                    <span class="fw-normal">≥576px</span>
                                </th>
                                <th scope="col" class="text-center">
                                    md<br>
                                    <span class="fw-normal">≥768px</span>
                                </th>
                                <th scope="col" class="text-center">
                                    lg<br>
                                    <span class="fw-normal">≥992px</span>
                                </th>
                                <th scope="col" class="text-center">
                                    xl<br>
                                    <span class="fw-normal">≥1200px</span>
                                </th>
                                <th scope="col" class="text-center">
                                    xxl<br>
                                    <span class="fw-normal">≥1400px</span>
                                </th>
                                </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th class="text-nowrap" scope="row">Grid behavior</th>
                            <td>Horizontal at all times</td>
                            <td colspan="5">Collapsed to start, horizontal above breakpoints</td>
                        </tr>
                        <tr>
                            <th class="text-nowrap" scope="row">Max container width</th>
                            <td>None (auto)</td>
                            <td>540px</td>
                            <td>720px</td>
                            <td>960px</td>
                            <td>1140px</td>
                            <td>1320px</td>
                        </tr>
                        <tr>
                            <th class="text-nowrap" scope="row">Class prefix</th>
                            <td><code>.col-</code></td>
                            <td><code>.col-sm-</code></td>
                            <td><code>.col-md-</code></td>
                            <td><code>.col-lg-</code></td>
                            <td><code>.col-xl-</code></td>
                            <td><code>.col-xxl-</code></td>
                        </tr>
                        <tr>
                            <th class="text-nowrap" scope="row"># of columns</th>
                            <td colspan="6">12</td>
                        </tr>
                        <tr>
                            <th class="text-nowrap" scope="row">Gutter width</th>
                            <td colspan="6">24px (12px on each side of a column)</td>
                        </tr>
                        <tr>
                            <th class="text-nowrap" scope="row">Custom gutters</th>
                            <td colspan="6">Yes</td>
                        </tr>
                        <tr>
                            <th class="text-nowrap" scope="row">Nestable</th>
                            <td colspan="6">Yes</td>
                        </tr>
                        <tr>
                            <th class="text-nowrap" scope="row">Offsets</th>
                            <td colspan="6">Yes</td>
                        </tr>
                        <tr>
                            <th class="text-nowrap" scope="row">Column ordering</th>
                            <td colspan="6">Yes</td>
                        </tr>
                        </tbody>
                    </table><!-- end table -->
                </div>
            </div> <!-- end card-body -->
            
        </div> <!-- end card-->
    </div>
</div>

<div class="row">
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Equal Width</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div>
                    <div class="row">
                        <div class="col">
                            <div class="p-3 border rounded bg-light">1 of 1</div>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <div class="row">
                        <div class="col">
                            <div class="p-3 border rounded bg-light">1 of 2</div>
                        </div>
                        <div class="col">
                            <div class="p-3 border rounded bg-light">2 of 2</div>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <div class="row">
                        <div class="col">
                            <div class="p-3 border rounded bg-light">1 of 3</div>
                        </div>
                        <div class="col">
                            <div class="p-3 border rounded bg-light">2 of 3</div>
                        </div>
                        <div class="col">
                            <div class="p-3 border rounded bg-light">3 of 3</div>
                        </div>
                    </div>
                </div>

            </div> <!-- end card-body -->
            
        </div> <!-- end card-->
    </div>


    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Mix and Match</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="text-center">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="p-3 border rounded bg-light">.col-md-8</div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="p-3 border rounded bg-light">.col-6 .col-md-4</div>
                        </div>
                    </div>
                </div>

                <div class="mt-3 text-center">
                    <div class="row">
                        <div class="col-6 col-md-4">
                            <div class="p-3 border rounded bg-light">.col-6 .col-md-4</div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="p-3 border rounded bg-light">.col-6 .col-md-4</div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="p-3 border rounded bg-light">.col-6 .col-md-4</div>
                        </div>
                    </div>
                </div>

                <div class="mt-3 text-center">
                    <div class="row">
                        <div class="col-6">
                            <div class="p-3 border rounded bg-light">.col-6</div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 border rounded bg-light">.col-6</div>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div>

    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Setting One Column</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div>
                    <div class="row">
                        <div class="col">
                            <div class="p-3 border rounded bg-light"> 1 of 3</div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 border rounded bg-light">2 of 3 (wider)</div>
                        </div>
                        <div class="col">
                            <div class="p-3 border rounded bg-light">3 of 3</div>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <div class="row">
                        <div class="col">
                            <div class="p-3 border rounded bg-light">1 of 3</div>
                        </div>
                        <div class="col-5">
                            <div class="p-3 border rounded bg-light">2 of 3 (wider)</div>
                        </div>
                        <div class="col">
                            <div class="p-3 border rounded bg-light">3 of 3</div>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-body -->
            
        </div> <!-- end card-->
    </div>

    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Variable width content</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="text-center">
                    <div class="row justify-content-md-center">
                        <div class="col col-lg-2">
                            <div class="p-3 border rounded bg-light"> 1 of 3</div>
                        </div>
                        <div class="col-md-auto">
                            <div class="p-3 border rounded bg-light">Variable Width Content</div>
                        </div>
                        <div class="col col-lg-2">
                            <div class="p-3 border rounded bg-light">3 of 3</div>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <div class="row">
                        <div class="col">
                            <div class="p-3 border rounded bg-light">1 of 3</div>
                        </div>
                        <div class="col-md-auto">
                            <div class="p-3 border rounded bg-light">Variable width content</div>
                        </div>
                        <div class="col col-lg-2">
                            <div class="p-3 border rounded bg-light">3 of 3</div>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-body -->
            
        </div> <!-- end card-->
    </div>

    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">All Breakpoints</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="text-center">
                    <div class="row">
                        <div class="col">
                            <div class="p-3 border rounded bg-light"> Col </div>
                        </div>
                        <div class="col">
                            <div class="p-3 border rounded bg-light">Col</div>
                        </div>
                        <div class="col">
                            <div class="p-3 border rounded bg-light">Col</div>
                        </div>
                        <div class="col">
                            <div class="p-3 border rounded bg-light">Col</div>
                        </div>
                    </div>
                </div>

                <div class="mt-3 text-center">
                    <div class="row">
                        <div class="col-8">
                            <div class="p-3 border rounded bg-light">col-8</div>
                        </div>
                        <div class="col-4">
                            <div class="p-3 border rounded bg-light">col-4</div>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-body -->
            
        </div> <!-- end card-->
    </div>


    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Stacked To Horizontal</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="text-center">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="p-3 border rounded bg-light">col-sm-8</div>
                        </div>
                        <div class="col-sm-4">
                            <div class="p-3 border rounded bg-light">col-sm-4</div>
                        </div>
                    </div>
                </div>

                <div class="mt-3 text-center">
                    <div class="row">
                        <div class="col-sm">
                            <div class="p-3 border rounded bg-light">col-sm</div>
                        </div>
                        <div class="col-sm">
                            <div class="p-3 border rounded bg-light">col-sm</div>
                        </div>
                        <div class="col-sm">
                            <div class="p-3 border rounded bg-light">col-sm</div>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-body -->
            
        </div> <!-- end card-->
    </div>

</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Row Columns</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="row">
                    <div class="col-xl-4">
                        <div>
                            <div class="row row-cols-2 g-0">
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                            </div>    
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div>
                            <div class="row row-cols-3 g-0">
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div>
                            <div class="row row-cols-4 g-0">
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col-6">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 mt-3">
                        <div>
                            <div class="row row-cols-auto g-0">
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 mt-3">
                        <div>
                            <div class="row row-cols-4 g-0">
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 mt-3">
                        <div>
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-0">
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div> <!-- end card-body -->
            
        </div> <!-- end card-->
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Nesting</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="row g-0 text-center">

                    <div class="col-sm-3">
                        <div class="p-3 border bg-light">Level 1: .col-sm-3</div>
                    </div>

                    <div class="col-sm-9">
                        <div class="p-3 border bg-light">
                            <div class="row g-0">
                                <div class="col-8 col-sm-6">
                                    <div class="p-1 border bg-light">Level 2: .col-8 .col-sm-6</div>
                                </div>
                                <div class="col-4 col-sm-6">
                                    <div class="p-1 border bg-light">Level 2: .col-4 .col-sm-6</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div> <!-- end card-body -->
            
        </div> <!-- end card-->
    </div>
</div>
@endsection