@extends('layouts.vertical', ['title' => 'Tabs'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Tabs</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
            <li class="breadcrumb-item active">Tabs</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Default Tabs</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span class="d-block d-sm-none"><i class="mdi mdi-home-account"></i></span>
                            <span class="d-none d-sm-block">Home</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                            <span class="d-block d-sm-none"><i class="mdi mdi-account-outline"></i></span>
                            <span class="d-none d-sm-block">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#messages" role="tab">
                            <span class="d-block d-sm-none"><i class="mdi mdi-email-outline"></i></span>
                            <span class="d-none d-sm-block">Messages</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <p class="mb-0">
                            Vivamus consectetur justo non mi vehicula, nec fermentum turpis blandit. 
                            Pellentesque habitant morbi tristique senectus et netus et malesuada 
                            fames ac turpis egestas. Maecenas accumsan sem eget magna aliquet, 
                            sed fermentum nisi mattis. Aenean a quam nec mauris cursus accumsan,
                            Curabitur fermentum nisi non est ultricies. most discerning palates. 
                            Whether you're craving a hearty.
                        </p>
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel">
                        <p class="mb-0">
                            Indulge your taste buds with our mouthwatering selection of gourmet 
                            dishes crafted with the finest ingredients sourced from local farms. 
                            From savory appetizers to delectable main courses and decadent desserts, 
                            our menu promises to delight even the most discerning palates. 
                            Whether you're craving a hearty. most discerning palates. 
                            Whether you're craving a hearty.
                        </p>
                    </div>
                    <div class="tab-pane" id="messages" role="tabpanel">
                        <p class="mb-0">
                            Etsy mixtape wayfarers, ethical wes anderson tofu before they
                            sold out mcsweeney's organic lomo retro fanny pack lo-fi
                            farm-to-table readymade. Messenger bag gentrify pitchfork
                            tattooed craft beer, iphone skateboard locavore carles etsy
                            salvia banksy hoodie helvetica. skateboard locavore carles etsy
                            salvia banksy hoodie helvetica craving a hearty.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Nav Pills</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <!-- Nav tabs -->
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#navpills-home" role="tab">
                            <span class="d-block d-sm-none"><i class="mdi mdi-home-account"></i></span>
                            <span class="d-none d-sm-block">Home</span> 
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#navpills-profile" role="tab">
                            <span class="d-block d-sm-none"><i class="mdi mdi-account-outline"></i></span>
                            <span class="d-none d-sm-block">Profile</span> 
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#navpills-messages" role="tab">
                            <span class="d-block d-sm-none"><i class="mdi mdi-email-outline"></i></span>
                            <span class="d-none d-sm-block">Messages</span>   
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane" id="navpills-home" role="tabpanel">
                        <p class="mb-0">
                            Indulge your taste buds with our mouthwatering selection of gourmet 
                            dishes crafted with the finest ingredients sourced from local farms. 
                            From savory appetizers to delectable main courses and decadent desserts, 
                            our menu promises to delight even the most discerning palates. 
                            Whether you're craving a hearty. the most discerning palates. 
                            Whether you're craving a hearty.
                        </p>
                    </div><!-- end tab pane -->
                    <div class="tab-pane active show" id="navpills-profile" role="tabpanel">
                        <p class="mb-0">
                            Raw denim you probably haven't heard of them jean shorts Austin.
                            Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                            cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                            butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                            qui irure terry richardson ex squid. Cosby sweater eu banh mi,
                            qui irure terry richardson ex squid. 
                        </p>
                    </div><!-- end tab pane -->
                    <div class="tab-pane" id="navpills-messages" role="tabpanel">
                        <p class="mb-0">
                            Vivamus consectetur justo non mi vehicula, nec fermentum turpis blandit. 
                            Pellentesque habitant morbi tristique senectus et netus et malesuada 
                            fames ac turpis egestas. Maecenas accumsan sem eget magna aliquet, 
                            sed fermentum nisi mattis. Aenean a quam nec mauris cursus accumsan,
                            Curabitur fermentum nisi non est ultricies. Cosby sweater eu banh mi,
                            qui irure terry richardson ex squid.
                        </p>
                    </div><!-- end tab pane -->
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Nav Pills Justify</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <ul class="nav nav-pills nav-justified bg-light" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#navpills2-home" role="tab">
                            <span class="d-block d-sm-none"><i class="mdi mdi-home-account"></i></span>
                            <span class="d-none d-sm-block">Home</span> 
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#navpills2-profile" role="tab">
                            <span class="d-block d-sm-none"><i class="mdi mdi-account-outline"></i></span>
                            <span class="d-none d-sm-block">Profile</span> 
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#navpills2-messages" role="tab">
                            <span class="d-block d-sm-none"><i class="mdi mdi-email-outline"></i></span>
                            <span class="d-none d-sm-block">Messages</span>   
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#navpills2-settings" role="tab">
                            <span class="d-block d-sm-none"><i class="mdi mdi-cog"></i></span>
                            <span class="d-none d-sm-block">Settings</span>    
                        </a>
                    </li>
                </ul>

                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active show" id="navpills2-home" role="tabpanel">
                        <p class="mb-0">Vivamus consectetur justo non mi vehicula, nec fermentum turpis blandit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas accumsan sem eget magna aliquet, sed fermentum nisi mattis. Aenean a quam nec mauris cursus accumsan, Curabitur fermentum nisi non est ultricies. mauris cursus accumsan.</p>
                    </div>
                    <div class="tab-pane" id="navpills2-profile" role="tabpanel">
                        <p class="mb-0">Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Curabitur fermentum nisi non est ultricies.</p>
                    </div>
                    <div class="tab-pane" id="navpills2-messages" role="tabpanel">
                        <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. mauris cursus accumsan.</p>
                    </div>
                    <div class="tab-pane" id="navpills2-settings" role="tabpanel">
                        <p class="mb-0">Indulge your taste buds with our mouthwatering selection of gourmet dishes crafted with the finest ingredients sourced from local farms. From savory appetizers to delectable main courses and decadent desserts, our menu promises to delight even the most discerning palates. Whether you're craving a hearty. Curabitur fermentum nisi non est ultricies.</p>
                    </div>
                </div>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Nav Tabs Justify</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#navtabs2-home" role="tab">
                            <span class="d-block d-sm-none"><i class="mdi mdi-home-account"></i></span>
                            <span class="d-none d-sm-block">Home</span>    
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#navtabs2-profile" role="tab">
                            <span class="d-block d-sm-none"><i class="mdi mdi-account-outline"></i></span>
                            <span class="d-none d-sm-block">Profile</span>    
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#navtabs2-messages" role="tab">
                            <span class="d-block d-sm-none"><i class="mdi mdi-email-outline"></i></span>
                            <span class="d-none d-sm-block">Messages</span>    
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#navtabs2-settings" role="tab">
                            <span class="d-block d-sm-none"><i class="mdi mdi-cog"></i></span>
                            <span class="d-none d-sm-block">Settings</span>    
                        </a>
                    </li>
                </ul>

                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="navtabs2-home" role="tabpanel">
                        <p class="mb-0">
                            Vivamus consectetur justo non mi vehicula, nec fermentum turpis blandit.
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                            ac turpis egestas. Maecenas accumsan sem eget magna aliquet, sed 
                            fermentum nisi mattis. Aenean a quam nec mauris cursus accumsan, 
                            Curabitur fermentum nisi non est ultricies. mauris cursus accumsan
                        </p>
                    </div><!-- end tab pane -->
                    <div class="tab-pane" id="navtabs2-profile" role="tabpanel">
                        <p class="mb-0">
                            Vakal text here dolor sit amet, consectetuer adipiscing elit. 
                            Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
                            natoque penatibus et magnis dis parturient montes, nascetur 
                            ridiculus mus. Donec quam felis, ultricies nec, 
                            pellentesque eu, pretium quis, sem. Nulla consequat massa 
                            quis enim.  Curabitur fermentum nisi non est ultricies.
                        </p>
                    </div><!-- end tab pane -->
                    <div class="tab-pane" id="navtabs2-messages" role="tabpanel">
                        <p class="mb-0">
                            Etsy mixtape wayfarers, ethical wes anderson tofu before they
                            sold out mcsweeney's organic lomo retro fanny pack lo-fi
                            farm-to-table readymade. Messenger bag gentrify pitchfork
                            tattooed craft beer, iphone skateboard locavore carles etsy
                            salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                            Leggings squid 8-bit cred pitchfork ultricies.
                        </p>
                    </div><!-- end tab pane -->
                    <div class="tab-pane" id="navtabs2-settings" role="tabpanel">
                        <p class="mb-0">
                            Indulge your taste buds with our mouthwatering selection 
                            of gourmet dishes crafted with the finest ingredients 
                            sourced from local farms. From savory appetizers to 
                            delectable main courses and decadent desserts, our 
                            menu promises to delight even the most discerning palates. 
                            Whether you're craving a hearty. Curabitur fermentum nisi 
                            non est ultricies.
                        </p>
                    </div><!-- end tab pane -->
                </div>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col -->

</div> <!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Tabs Vertical Left</h5>
            </div><!-- end card header -->

            <div class="card-body">

                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link mb-2 active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                        <a class="nav-link mb-2" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                        <a class="nav-link mb-2" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content p-0 text-muted mt-md-0" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <p>
                                    Vivamus consectetur justo non mi vehicula, nec fermentum turpis
                                    blandit. Pellentesque habitant morbi tristique senectus et netus
                                    et malesuada fames ac turpis egestas. Maecenas accumsan sem eget
                                    magna aliquet, sed fermentum nisi mattis. Aenean a quam nec 
                                    mauris cursus accumsan, Curabitur fermentum nisi non est ultricies.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <p>
                                    Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                    single-origin coffee squid. Exercitation +1 labore velit, blog
                                    sartorial PBR leggings next level wes anderson artisan four loko
                                    farm-to-table craft beer twee. Qui photo booth letterpress,
                                    commodo enim craft beer mlkshk.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <p>
                                    Etsy mixtape wayfarers, ethical wes anderson tofu before they
                                    sold out mcsweeney's organic lomo retro fanny pack lo-fi
                                    farm-to-table readymade. Messenger bag gentrify pitchfork
                                    tattooed craft beer, iphone skateboard locavore carles etsy
                                    salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                                    Leggings gentrify squid 8-bit cred. DIY synth PBR banksy irony.
                                    Leggings.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <p>
                                    Indulge your taste buds with our mouthwatering selection of gourmet 
                                    dishes crafted with the finest ingredients sourced from local farms. 
                                    From savory appetizers to delectable main courses and decadent desserts, 
                                    our menu promises to delight even the most discerning palates. 
                                    Whether you're craving a hearty. delight even the most discerning palates. 
                                    Whether you're craving a hearty. 
                                </p>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

            </div>
        </div>
    </div>

    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Tabs Vertical Right</h5>
            </div><!-- end card header -->

            <div class="card-body">

                <div class="row">
                    <div class="col-md-9">
                        <div class="tab-content p-0 text-muted mt-md-0" id="v-r-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-r-pills-home" role="tabpanel" aria-labelledby="v-r-pills-home-tab">
                                <p>
                                    Vivamus consectetur justo non mi vehicula, nec fermentum turpis
                                    blandit. Pellentesque habitant morbi tristique senectus et netus
                                    et malesuada fames ac turpis egestas. Maecenas accumsan sem eget
                                    magna aliquet, sed fermentum nisi mattis. Aenean a quam nec 
                                    mauris cursus accumsan, Curabitur fermentum nisi non est ultricies.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="v-r-pills-profile" role="tabpanel" aria-labelledby="v-r-pills-profile-tab">
                                <p>
                                    Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                    single-origin coffee squid. Exercitation +1 labore velit, blog
                                    sartorial PBR leggings next level wes anderson artisan four loko
                                    farm-to-table craft beer twee. Qui photo booth letterpress,
                                    commodo enim craft beer mlkshk.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="v-r-pills-messages" role="tabpanel" aria-labelledby="v-r-pills-messages-tab">
                                <p>
                                    Etsy mixtape wayfarers, ethical wes anderson tofu before they
                                    sold out mcsweeney's organic lomo retro fanny pack lo-fi
                                    farm-to-table readymade. Messenger bag gentrify pitchfork
                                    tattooed craft beer, iphone skateboard locavore carles etsy
                                    salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                                    Leggings gentrify squid 8-bit cred. DIY synth PBR banksy irony.
                                    Leggings.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="v-r-pills-settings" role="tabpanel" aria-labelledby="v-r-pills-settings-tab">
                                <p>
                                    Indulge your taste buds with our mouthwatering selection of gourmet 
                                    dishes crafted with the finest ingredients sourced from local farms. 
                                    From savory appetizers to delectable main courses and decadent desserts, 
                                    our menu promises to delight even the most discerning palates. 
                                    Whether you're craving a hearty. delight even the most discerning palates. 
                                    Whether you're craving a hearty. 
                                </p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" id="v-r-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link mb-2 active" id="v-r-pills-home-tab" data-bs-toggle="pill" href="#v-r-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                        <a class="nav-link mb-2" id="v-r-pills-profile-tab" data-bs-toggle="pill" href="#v-r-pills-profile" role="tab" aria-controls="v-r-pills-profile" aria-selected="false">Profile</a>
                        <a class="nav-link mb-2" id="v-r-pills-messages-tab" data-bs-toggle="pill" href="#v-r-pills-messages" role="tab" aria-controls="v-r-pills-messages" aria-selected="false">Messages</a>
                        <a class="nav-link" id="v-r-pills-settings-tab" data-bs-toggle="pill" href="#v-r-pills-settings" role="tab" aria-controls="v-r-pills-settings" aria-selected="false">Settings</a>
                        </div>
                    </div>
                </div><!-- end row -->
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Underline Tabs</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <!-- Nav tabs -->
                <ul class="nav nav-underline border-bottom" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span class="d-block d-sm-none"><i class="mdi mdi-home-account"></i></span>
                            <span class="d-none d-sm-block">Home</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                            <span class="d-block d-sm-none"><i class="mdi mdi-account-outline"></i></span>
                            <span class="d-none d-sm-block">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#messages" role="tab">
                            <span class="d-block d-sm-none"><i class="mdi mdi-email-outline"></i></span>
                            <span class="d-none d-sm-block">Messages</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <p class="mb-0">
                            Vivamus consectetur justo non mi vehicula, nec fermentum turpis blandit. 
                            Pellentesque habitant morbi tristique senectus et netus et malesuada 
                            fames ac turpis egestas. Maecenas accumsan sem eget magna aliquet, 
                            sed fermentum nisi mattis. Aenean a quam nec mauris cursus accumsan,
                            Curabitur fermentum nisi non est ultricies.
                        </p>
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel">
                        <p class="mb-0">
                            Indulge your taste buds with our mouthwatering selection of gourmet 
                            dishes crafted with the finest ingredients sourced from local farms. 
                            From savory appetizers to delectable main courses and decadent desserts, 
                            our menu promises to delight even the most discerning palates. 
                            Whether you're craving a hearty. most discerning palates. 
                            Whether you're craving a hearty.
                        </p>
                    </div>
                    <div class="tab-pane" id="messages" role="tabpanel">
                        <p class="mb-0">
                            Etsy mixtape wayfarers, ethical wes anderson tofu before they
                            sold out mcsweeney's organic lomo retro fanny pack lo-fi
                            farm-to-table readymade. Messenger bag gentrify pitchfork
                            tattooed craft beer, iphone skateboard locavore carles etsy
                            salvia banksy hoodie helvetica. skateboard locavore carles etsy
                            salvia banksy hoodie helvetica.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>
@endsection