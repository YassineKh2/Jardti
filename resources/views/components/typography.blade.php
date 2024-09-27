@extends('layouts.vertical', ['title' => 'Typography'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Typography</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
            <li class="breadcrumb-item active">Typography</li>
        </ol>
    </div>
</div>

<!-- Typography -->
<div class="row">
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Heading</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <h1>h1. Bootstrap heading</h1>
                <h2>h2. Bootstrap heading</h2>
                <h3>h3. Bootstrap heading</h3>
                <h4>h4. Bootstrap heading</h4>
                <h5>h5. Bootstrap heading</h5>
                <h6 class="mb-0">h6. Bootstrap heading</h6>
            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div>

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Description List Alignment</h5>
            </div> <!-- end card header -->

            <div class="card-body">
                <dl class="row">
                    <dt class="col-sm-3">Description lists</dt>
                    <dd class="col-sm-9">A description list is perfect for defining terms.</dd>
                    
                    <dt class="col-sm-3">Term</dt>
                    <dd class="col-sm-9">
                        <p>Definition for the term.</p>
                        <p>And some more placeholder definition text.</p>
                    </dd>
                    
                    <dt class="col-sm-3">Another term</dt>
                    <dd class="col-sm-9">This definition is short, so no extra paragraphs or anything.</dd>
                    
                    <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                    <dd class="col-sm-9">This can be useful when space is tight. Adds an ellipsis at the end.</dd>
                    
                    <dt class="col-sm-3">Nesting</dt>
                    <dd class="col-sm-9">
                        <dl class="row">
                            <dt class="col-sm-4">Nested definition list</dt>
                            <dd class="col-sm-8">I heard you like definition lists. Let me put a definition list inside your definition list.</dd>
                        </dl>
                    </dd>
                </dl>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div>

</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Display headings</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <h1 class="display-1">Display 1</h1>
                <h1 class="display-2">Display 2</h1>
                <h1 class="display-3">Display 3</h1>
                <h1 class="display-4">Display 4</h1>
                <h1 class="display-5">Display 5</h1>
                <h1 class="display-6 mb-0">Display 6</h1>
            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Blockquotes</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="row">

                    <div class="col-md-12">
                        <figure>
                            <blockquote class="blockquote font-size-16 mb-0">
                                <p>A well-known quote, contained in a blockquote element.</p>
                            </blockquote>
                            <figcaption class="blockquote-footer mt-2 mb-0">
                                Someone famous in <cite title="Source Title">Source Title</cite>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-md-12">
                        <figure class="text-center">
                            <blockquote class="blockquote font-size-16 mb-0">
                                <p>A well-known quote, contained in a blockquote element.</p>
                            </blockquote>
                            <figcaption class="blockquote-footer mt-2 mb-0">
                                Someone famous in <cite title="Source Title">Source Title</cite>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-md-12">
                        <figure class="text-end mb-0">
                            <blockquote class="blockquote font-size-16 mb-0">
                                <p>A well-known quote, contained in a blockquote element.</p>
                            </blockquote>
                            <figcaption class="blockquote-footer mt-2 mb-0">
                                Someone famous in <cite title="Source Title">Source Title</cite>
                            </figcaption>
                        </figure>
                    </div>

                </div>
            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div>
</div>

<div class="row">

    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Inline Text Elements</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                <p><del>This line of text is meant to be treated as deleted text.</del></p>
                <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                <p><u>This line of text will render as underlined.</u></p>
                <p><small>This line of text is meant to be treated as fine print.</small></p>
                <p><strong>This line rendered as bold text.</strong></p>
                <p class="mb-0"><em>This line rendered as italicized text.</em></p>
            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div>

    <div class="col-xl-6">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Unstyled List</h5>
                    </div> <!-- end card header -->

                    <div class="card-body">
                        <ul class="list-unstyled mb-0">
                            <li>This is a list.</li>
                            <li>It appears completely unstyled.</li>
                            <li>Structurally, it's still a list.</li>
                            <li>However, this style only applies to immediate child elements.</li>
                            <li>Nested lists:
                                <ul>
                                    <li>are unaffected by this style</li>
                                    <li>will still show a bullet</li>
                                    <li>and have appropriate left margin</li>
                                </ul>
                            </li>
                            <li>This may still come in handy in some situations.</li>
                        </ul>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Inline List</h5>
                    </div> <!-- end card header -->

                    <div class="card-body">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">This is a list item.</li>
                            <li class="list-inline-item">And another one.</li>
                            <li class="list-inline-item">But they're displayed inline.</li>
                        </ul>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div>

        </div>
    </div>

    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Unordered</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <ul class="mb-0">
                    <li>
                        This is a list.
                    </li>
                    <li>
                        It appears completely unstyled.
                    </li>
                    <li>
                        Structurally, it's still a list.
                    </li>
                    <li>
                        However, this style only applies to immediate child elements.
                    </li>
                    <li>
                        Nested lists:
                        <ol>
                            <li>
                                Are unaffected by this style
                            </li>
                            <li>
                                Will still show a bullet
                            </li>
                            <li>
                                And have appropriate left margin
                            </li>
                            <li>
                                Ac tristique libero volutpat at
                            </li>
                        </ol>
                    </li>
                    <li>
                        This may still come in handy in some situations
                    </li>
                </ul> 
            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div>

    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Ordered</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <ol class="mb-0">
                    <li>
                        This is a list.
                    </li>
                    <li>
                        It appears completely unstyled.
                    </li>
                    <li>
                        Structurally, it's still a list.
                    </li>
                    <li>
                        However, this style only applies to immediate child elements.
                    </li>
                    <li>
                        Nested lists:
                        <ol>
                            <li>
                                Are unaffected by this style
                            </li>
                            <li>
                                Will still show a bullet
                            </li>
                            <li>
                                And have appropriate left margin
                            </li>
                            <li>
                                Ac tristique libero volutpat at
                            </li>
                        </ol>
                    </li>
                    <li>
                        This may still come in handy in some situations
                    </li>
                </ol> 
            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div>
</div>
@endsection