@extends('layouts.app')

@section('content')
<h1 class="h3 mb-1 text-gray-800">Bootstrap Models</h1><!-- Page Heading -->
<p class="mb-4">Dialog boxes to display lightbox, notifications, or other custom content</p>
<div class="row"><!-- Content Row -->
    <div class="col-lg-6">
        <div class="card my-3">
            <div class="card-header fw-bold text-primary">
                Default Bootstrap Modal
            </div>
            <div class="card-body">
                <div class="card border-5 mb-3">
                    <div class="card-body">
                        <span class="text-secondary">Default Model:</span>
                        <hr>
                        <!-- Button trigger modal -->
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Launch Demo Modal</button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Default Bootstrap Modal</h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">This modal window is included with the Bootstrap framework.</div>
                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save changes</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <span class="small text-secondary">
                            The default Bootstrap modal has been restyled for the Laradmin.
                        </span>
                    </div>
                </div>
                <div class="card border-5">
                    <div class="card-body">
                        <span class="text-secondary mb-2">Static Backdrop Model:</span>
                        <hr>
                        <!-- Button trigger modal -->
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Launch Static Backdrop Modal</button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Static Backdrop Modal</h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">When using the <code>data-bs-backdrop='static'</code> attribute with a modal window, the user cannot dismiss the modal by clicking outside of the modal pane.</div>
                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Understood</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <span class="small text-secondary">The static backdrop modal option cannot be dismissed by clicking outside of the modal pane. Instead, the user must dismiss the modal by using the close button within the modal pane.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card my-3">
            <div class="card-header fw-bold text-primary">
                Vertically Centered Bootstrap Modal
            </div>
            <div class="card-body">
                <div class="card border-5">
                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Launch Vertically Centered Modal</button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Vertically Centered Modal</h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">The vertically centered modal centers the modal dialog in the center of the page.</div>
                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save changes</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <span class="small text-secondary">
                            Add <code>.modal-dialog-centered</code> to the <code>.modal-dialog</code> to vertically center the modal dilog when the modal window appears.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card my-3">
            <div class="card-header fw-bold text-primary">
                Scrollable Bootstrap Modals
            </div>
            <div class="card-body">
                <div class="card border-5 mb-3">
                    <div class="card-body">
                        <span class="text-secondary mb-2">Page Scrolling Long Modal:</span>
                        <hr>
                        <!-- Button trigger modal -->
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalLong">Launch Scrollable Modal</button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Long Modal with Page Scrolling</h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>{{ lorem_ipsum_long() }}</p>
                                        <p>{{ lorem_ipsum_long() }}</p>
                                        <p>{{ lorem_ipsum_long() }}</p>
                                        <p>{{ lorem_ipsum_long() }}</p>
                                        <p>{{ lorem_ipsum_long() }}</p>
                                    </div>
                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save changes</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <span class="small text-secondary">By default, the content within a modal will scroll independently of the page if the content is too long. If you don't want the page to scroll, use the next option.</span>
                    </div>
                </div>
                <div class="card border-5">
                    <div class="card-body">
                        <span class="text-secondary mb-2">Content Scrolling Long Modal:</span>
                        <hr>
                        <!-- Button modal trigger -->
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable">Launch Scrollable Modal</button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Long Model with Content Scrolling</h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>{{ lorem_ipsum_long() }}</p>
                                        <p>{{ lorem_ipsum_long() }}</p>
                                        <p>{{ lorem_ipsum_long() }}</p>
                                        <p>{{ lorem_ipsum_long() }}</p>
                                        <p>{{ lorem_ipsum_long() }}</p>
                                    </div>
                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save changes</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <span class="small text-secondary">
                            Add <code>.modal-dialog-scrollable</code> to the <code>.modal-dialog</code> to make longer modal content scroll within the modal body if the contents is longer than the viewport height.
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card my-3">
            <div class="card-header fw-bold text-primary">
                Model Sizing
            </div>
            <div class="card-body">
                <div class="card border-5">
                    <div class="card-body">
                        <!-- Extra large modal -->
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalXl">Extra Large</button>
                        <div class="modal fade" id="exampleModalXl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Extra Large Modal</h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>This is an example of an extra large modal!</p>
                                    </div>
                                    <div class="modal-footer"><button class="btn btn-primary" type="button" data-bs-dismiss="modal">Close</button></div>
                                </div>
                            </div>
                        </div>

                        <!-- Large modal -->
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalLg">Large</button>
                        <div class="modal fade" id="exampleModalLg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Large Modal</h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>This is an example of a large modal.</p>
                                    </div>
                                    <div class="modal-footer"><button class="btn btn-primary" type="button" data-bs-dismiss="modal">Close</button></div>
                                </div>
                            </div>
                        </div>

                        <!-- Small modal -->
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalSm">Small</button>
                        <div class="modal fade" id="exampleModalSm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Small Modal</h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>This is an example of a small modal.</p>
                                    </div>
                                    <div class="modal-footer"><button class="btn btn-primary" type="button" data-bs-dismiss="modal">Close</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <span class="small text-secondary">
                            Add <code>.modal-xl</code> , <code>.modal-lg</code> , or <code>.modal-sm</code> to the <code>.modal-dialog</code> to adjust the sizing of your Bootstrap modals.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection