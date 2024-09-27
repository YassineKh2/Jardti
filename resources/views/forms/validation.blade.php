@extends('layouts.vertical', ['title' => 'General Elements'])

@section('content')

<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Form Validation</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
            <li class="breadcrumb-item active">Form Validation</li>
        </ol>
    </div>
</div>

<!-- Form Validation -->
<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Browser Defaults</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="validationDefault01" class="form-label">First name</label>
                        <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefaultUsername" class="form-label">Username</label>
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2">@</span>
                            <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault03" class="form-label">City</label>
                        <input type="text" class="form-control" id="validationDefault03" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault04" class="form-label">State</label>
                        <select class="form-select" id="validationDefault04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>City 1</option>
                            <option>City 2</option>
                            <option>City 3</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault05" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="validationDefault05" required>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                            <label class="form-check-label" for="invalidCheck2">
                                Agree to terms and conditions
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <!-- Custom styles -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Custom Styles</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <form class="row g-3 needs-validation" novalidate>
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label">First name</label>
                        <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustomUsername" class="form-label">Username</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">Please choose a username.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">City</label>
                        <input type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">Please provide a valid city.</div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom04" class="form-label">State</label>
                        <select class="form-select" id="validationCustom04" required>
                            <option selected disabled value="">Choose</option>
                            <option>City 1</option>
                            <option>City 2</option>
                            <option>City 3</option>
                        </select>
                        <div class="invalid-feedback"> Please select a valid state. </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom05" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">Please provide a valid zip.</div>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck"> Agree to terms and conditions </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <!-- Tooltips -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Tooltips</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <form class="row g-3 needs-validation" novalidate>
                    <div class="col-md-6 position-relative">
                        <label for="validationTooltip01" class="form-label">First name</label>
                        <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
                        <div class="valid-tooltip">Looks good!</div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="validationTooltip02" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
                        <div class="valid-tooltip">Looks good!</div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="validationTooltipUsername" class="form-label">Username</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                            <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                            <div class="invalid-tooltip">Please choose a unique and valid username.</div>
                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="validationTooltip03" class="form-label">City</label>
                        <input type="text" class="form-control" id="validationTooltip03" required>
                        <div class="invalid-tooltip">Please provide a valid city.</div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="validationTooltip04" class="form-label">State</label>
                        <select class="form-select" id="validationTooltip04" required>
                            <option selected disabled value="">Choose</option>
                            <option>City 1</option>
                            <option>City 2</option>
                            <option>City 3</option>
                        </select>
                        <div class="invalid-tooltip">Please select a valid state.</div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="validationTooltip05" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="validationTooltip05" required>
                        <div class="invalid-tooltip">Please provide a valid zip.</div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    
    <!-- Server Side -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Server Side</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <form class="row g-3">
                    <div class="col-md-4">
                        <label for="validationServer01" class="form-label">First name</label>
                        <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationServer02" class="form-label">Last name</label>
                        <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationServerUsername" class="form-label">Username</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend3">@</span>
                            <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationServer03" class="form-label">City</label>
                        <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationServer04" class="form-label">State</label>
                        <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
                            <option selected disabled value="">Choose</option>
                            <option>State 1</option>
                            <option>State 2</option>
                            <option>State 3</option>
                        </select>
                        <div id="validationServer04Feedback" class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationServer05" class="form-label">Zip</label>
                        <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
                        <div id="validationServer05Feedback" class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                            <label class="form-check-label" for="invalidCheck3">
                                Agree to terms and conditions
                            </label>
                            <div id="invalidCheck3Feedback" class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Supported Elements</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <form class="was-validated">
                    <div class="mb-3">
                        <label for="validationTextarea" class="form-label">Textarea</label>
                        <textarea class="form-control" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                        <div class="invalid-feedback">
                            Please enter a message in the textarea.
                        </div>
                    </div>
                    
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="validationFormCheck1" required>
                        <label class="form-check-label" for="validationFormCheck1">Check this checkbox</label>
                        <div class="invalid-feedback">Example invalid feedback text</div>
                    </div>
                    
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>
                        <label class="form-check-label" for="validationFormCheck2">Toggle this radio</label>
                    </div>
                    <div class="form-check mb-3">
                        <input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" required>
                        <label class="form-check-label" for="validationFormCheck3">Or toggle this other radio</label>
                        <div class="invalid-feedback">More example invalid feedback text</div>
                    </div>
                    
                    <div class="mb-3">
                        <select class="form-select" required aria-label="select example">
                            <option value="">Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <div class="invalid-feedback">Example invalid select feedback</div>
                    </div>
                    
                    <div class="mb-3">
                        <input type="file" class="form-control" aria-label="file example" required>
                        <div class="invalid-feedback">Example invalid form file feedback</div>
                    </div>
                    
                    <button class="btn btn-primary" type="submit" disabled>Submit form</button>
                </form>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
@endsection