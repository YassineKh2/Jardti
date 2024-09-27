@extends('layouts.vertical', ['title' => 'Quilljs Editor'])

@section('css')
    @vite(['node_modules/quill/dist/quill.core.css', 'node_modules/quill/dist/quill.snow.css', 'node_modules/quill/dist/quill.bubble.css'])
@endsection

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Quill JS Editor</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
            <li class="breadcrumb-item active">Quill JS Editor</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div id="quill-editor" style="height: 400px;">
                    <h1>Hello World</h1>
                    <p><br></p>
                    <h4>This is an simple editable area</h4>
                    <p><br></p>
                    <ol>
                        <li>
                            Select a text to reveal the toolbar.
                        </li>
                        <li>
                            Edit rich document on-the-fly, so elastic!
                        </li>
                    </ol>
                    <br>
                    <p>Preset build with <code>snow</code> theme, and some common formats.</p>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection


@section('script')
    @vite(['resources/js/pages/quilljs.init.js'])
@endsection