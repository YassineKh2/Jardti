@extends('layouts.vertical', ['title' => 'General Elements'])

@section('content')

<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">General Elements</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
            <li class="breadcrumb-item active">General Elements</li>
        </ol>
    </div>
</div>

<!-- General Form -->
<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Input Type</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form>
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Text</label>
                                <input type="text" id="simpleinput" class="form-control">
                            </div>
                                <div class="mb-3">
                                <label for="example-email" class="form-label">Email</label>
                                <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                            </div>

                            <div class="mb-3">
                                <label for="example-password" class="form-label">Password</label>
                                <input type="password" id="example-password" class="form-control" value="password">
                            </div>

                            <div class="mb-3">
                                <label for="example-palaceholder" class="form-label">Placeholder</label>
                                <input type="text" id="example-palaceholder" class="form-control" placeholder="placeholder">
                            </div>

                            <div class="mb-3">
                                <label for="example-textarea" class="form-label">Text area</label>
                                <textarea class="form-control" id="example-textarea" rows="5" spellcheck="false"></textarea>
                            </div> 

                            <div class="mb-3">
                                <label for="example-disable" class="form-label">Readonly</label>
                                <input class="form-control" type="text" value="Readonly input here..." aria-label="readonly input example" readonly>
                            </div>

                            <div>
                                <label for="example-disable" class="form-label">Disabled</label>
                                <input type="text" class="form-control" id="example-disable" disabled="" value="Disabled value">
                            </div>

                        </form>
                    </div>

                    <div class="col-lg-6">
                        <form>
                            <div class="mb-3">
                                <label for="example-select" class="form-label">Input Select</label>
                                <select class="form-select" id="example-select">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Disabled</label>
                                <select id="simpleinput" class="form-select" aria-label="Default select example">
                                    <option selected>Select Menu</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="exampleColorInput" class="form-label">Color picker</label>
                                <input type="color" id="exampleColorInput" value="#563d7c" title="Choose your color" class="form-control form-control-color">
                            </div>

                            <div class="mb-3">
                                <label for="example-date" class="form-label">Date</label>
                                <input type="date" id="example-date" class="form-control" name="date">
                            </div>

                            <div class="mb-3">
                                <label for="example-multiselect" class="form-label">Multiple Select</label>
                                <select id="example-multiselect" multiple class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="example-custom" class="form-label">Button With Dropdowns</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="example-custom" aria-label="Text input with dropdown button">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                    </div>
                            </div>

                            <div>
                                <label for="exampleDataList" class="form-label">Datalist example</label>
                                <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                                <datalist id="datalistOptions">
                                    <option value="San Francisco">
                                    <option value="New York">
                                    <option value="Seattle">
                                    <option value="Los Angeles">
                                    <option value="Chicago">
                                </datalist>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Input Sizing</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="example-input-large" class="form-label">Large</label>
                        <input type="text" id="example-input-large" name="example-input-large" class="form-control form-control-lg" placeholder=".input-lg">
                    </div>
                    <div class="mb-3">
                        <label for="example-input-normal" class="form-label">Normal</label>
                        <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Normal">
                    </div>
                    <div>
                        <label for="example-input-small" class="form-label">Small</label>
                        <input class="form-control form-control-sm" type="text" placeholder=".input-sm">
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">File Input</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Small file input example</label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                    </div>
                    <div>
                        <label for="formFileLg" class="form-label">Large file input example</label>
                        <input class="form-control form-control-lg" id="formFileLg" type="file">
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Basic Example</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your
                            email with anyone else.</small>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class=" mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkmeout0">
                            <label class="form-check-label" for="checkmeout0">Check me out !</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Horizontal Form</h5>
            </div><!-- end card header -->
            
            <div class="card-body">
                <form>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3">
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                        <div class="col-sm-10 d-flex gap-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    First radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    Second radio
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                                <label class="form-check-label" for="gridRadios3">
                                    Third disabled radio
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row mb-3">
                        <div class="col-sm-10 offset-sm-2">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                                <label class="form-check-label" for="gridCheck1">
                                    Example checkbox
                                </label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
            </div>
        </div>
    </div>
    

    <div class="col-lg-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Checkboxes</h5>
            </div><!-- end card header -->


            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h6 class="fs-15">Checkboxes</h6>
                        <div class="mt-3">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                Default checkbox
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Checked checkbox
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <h6 class="fs-15">Disabled</h6>
                        <div class="mt-3">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled>
                                <label class="form-check-label" for="flexCheckDisabled">
                                    Disabled checkbox
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
                                <label class="form-check-label" for="flexCheckCheckedDisabled">
                                    Disabled checked checkbox
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Radios</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h6 class="fs-15">Defaults</h6>
                        <div class="mt-3">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Default radio
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Default checked radio
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <h6 class="fs-15">Disabled</h6>
                        <div class="mt-3">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" disabled>
                                <label class="form-check-label" for="flexRadioDisabled">
                                    Disabled radio
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioCheckedDisabled" checked disabled>
                                <label class="form-check-label" for="flexRadioCheckedDisabled">
                                    Disabled checked radio
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Input Sizing</h5>
            </div><!-- end card header -->
            
            <div class="card-body">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                    
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                    
                <div class="input-group input-group-lg">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Horizontal form label sizing</h5>
            </div><!-- end card header -->
            
            <div class="card-body">
                <div class="row mb-3">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
                    </div>
                </div>
                    <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg">
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
                <h5 class="card-title mb-0">Inline Forms</h5>
            </div><!-- end card header -->
            
            <div class="card-body">
                <form class="row row-cols-lg-auto g-3 align-items-center">
                    <div class="col-12">
                        <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
                        <div class="input-group">
                            <div class="input-group-text">@</div>
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                        <select class="form-select" id="inlineFormSelectPref">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                            <label class="form-check-label" for="inlineFormCheck">
                                Remember me
                            </label>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                
                <h6 class="fs-15 mt-3">Auto-sizing</h6>

                <form class="row gy-2 gx-3 align-items-center">
                    <div class="col-sm-5">
                        <label class="visually-hidden" for="autoSizingInput">Name</label>
                        <input type="text" class="form-control" id="autoSizingInput" placeholder="Jane Doe">
                    </div>
                    <div class="col-sm-3">
                        <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
                        <div class="input-group">
                            <div class="input-group-text">@</div>
                            <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Username">
                        </div>
                    </div>
                    <div class="col-auto">
                        <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                        <select class="form-select" id="autoSizingSelect">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-auto">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                            <label class="form-check-label" for="autoSizingCheck">
                                Remember me
                            </label>    
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

<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Floating Labels</h5>
            </div><!-- end card header -->
            
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <h6 class="fs-15 mb-3">Example</h6>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>

                        <h6 class="fs-15 mb-3">Textareas</h6>

                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Comments</label>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <h6 class="fs-15 mb-3">Selects</h6>

                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label for="floatingSelect">Works with selects</label>
                        </div>

                        <h6 class="fs-15 mb-3">Layout</h6>

                        <div class="row g-2">
                            <div class="col-md">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com">
                                    <label for="floatingInputGrid">Email address</label>
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelectGrid">
                                        <option selected>Open this select menu</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <label for="floatingSelectGrid">Works with selects</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Floating Disabled</h5>
            </div><!-- end card header -->
            
            <div class="card-body">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInputDisabled" placeholder="name@example.com" disabled>
                    <label for="floatingInputDisabled">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareaDisabled" disabled></textarea>
                    <label for="floatingTextareaDisabled">Comments</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2Disabled" style="height: 100px" disabled>Disabled textarea with some text inside</textarea>
                    <label for="floatingTextarea2Disabled">Comments</label>
                </div>
                <div class="form-floating">
                    <select class="form-select" id="floatingSelectDisabled" aria-label="Floating label disabled select example" disabled>
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <label for="floatingSelectDisabled">Works with selects</label>
                </div>

            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Input Group</h5>
            </div><!-- end card header -->
            
            <div class="card-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                    
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                </div>
                    
                <div class="mb-3">
                    <label for="basic-url" class="form-label">Your vanity URL</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                    </div>
                    <div class="form-text" id="basic-addon4">Example help text goes outside the input group.</div>
                </div>
                    
                <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
                </div>
                    
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                </div>
                    
                <div class="input-group">
                    <span class="input-group-text">With textarea</span>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
            </div>

        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Buttons With Dropdowns</h5>
            </div><!-- end card header -->
            
            <div class="card-body">

                <div class="mb-3">
                    <label class="form-label">Dropdown</label>
                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown <i class="mdi mdi-menu-down"></i> </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>

                <div class="mb-0">
                    <label class="form-label">Custom File Input</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>

                    <div class="input-group">
                        <label class="input-group-text" for="inputGroupFile01">Upload</label>
                        <input type="file" class="form-control" id="inputGroupFile01">
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Switches</h5>
            </div><!-- end card header -->
            
            <div class="card-body">

                <h6 class="fs-15 mb-3">Left Side Switches</h6>

                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                </div>
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                </div>
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDisabled" disabled>
                    <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox input</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckCheckedDisabled" checked disabled>
                    <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked switch checkbox input</label>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection