@extends('layouts.vertical', ['title' => 'Form Pickers'])

@section('css')
    @vite(['node_modules/flatpickr/dist/flatpickr.min.css'])
@endsection

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Form Pickers</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
            <li class="breadcrumb-item active">Form Pickers</li>
        </ol>
    </div>
</div>

<!-- Advance Form -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Flatpickr Date picker</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="mb-3">
                            <label class="form-label">Basic</label>
                            <input type="text" class="form-control" id="basic-datepicker" placeholder="Basic datepicker">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Date & Time</label>
                            <input type="text" class="form-control" id="datetime-datepicker" placeholder="Date and Time">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">MinDate and MaxDate</label>
                            <input type="text" class="form-control" id="minmax-datepicker" placeholder="Mindate - Maxdate">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">MinDate</label>
                            <input type="text" class="form-control" id="mindate-datepicker" placeholder="Mindate">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">MaxDate</label>
                            <input type="text" class="form-control" id="maxdate-datepicker" placeholder="Maxdate">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Today</label>
                            <input type="text" class="form-control" id="today-datepicker" placeholder="Today">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Today to maximum day</label>
                            <input type="text" class="form-control" id="todaymax-datepicker" placeholder="Today to maximum day">
                        </div>

                        <div>
                            <label class="form-label">Disabling dates</label>
                            <input type="text" class="form-control" id="disable-datepicker" placeholder="Disabling dates">
                        </div>
                    </div>


                    <div class="col-xl-6">
                        <div class="mb-3">
                            <label class="form-label">Disabling dates by a functions</label>
                            <input type="text" class="form-control" id="disablefunction-datepicker" placeholder="Disabling by functions">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Selecting multiple dates</label>
                            <input type="text" class="form-control" id="multipledates-datepicker" placeholder="Selecting multiple dates">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Selecting multiple conjunction</label>
                            <input type="text" class="form-control" id="multipleconjunction-datepicker" placeholder="Selecting multiple conjunction">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Range Calendar</label>
                            <input type="text" class="form-control" id="rangecalendar-datepicker" placeholder="Range Calendar">
                        </div>

                        <div>
                            <label class="form-label">Inline</label>
                            <input type="text" class="form-control" id="inline-datepicker" placeholder="Inline">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Flatpickr Time Picker</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="mb-3">
                            <label class="form-label">Time Picker</label>
                            <input id="basic-timepicker" type="text" class="form-control" placeholder="Basic timepicker">
                        </div>

                        <div class="mb-0">
                            <label class="form-label">24-hour Time Picker</label>
                            <input id="24hours-timepicker" type="text" class="form-control" placeholder="24-hour Time Picker">
                        </div>
                    </div>


                    <div class="col-xl-6">
                        <div class="mb-3">
                            <label class="form-label">Time Picker w/ Limits</label>
                            <input id="minmax-timepicker" type="text" class="form-control"
                                placeholder="Limits">
                        </div>

                        <div class="mb-0">
                            <label class="form-label">Preloading Time</label>
                            <input id="preloading-timepicker" type="text" class="form-control" placeholder="Preloading Time">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection


@section('script')
    @vite([ 'resources/js/pages/form-picker.js'])
@endsection