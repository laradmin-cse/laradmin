@extends('layouts.app')

@section('content')
<h1 class="h3 mb-1 text-gray-800">Bootstrap Alerts</h1><!-- Page Heading -->
<p class="mb-4">Bootstrap's default utility classes can be found on the official
    <a href="https://getbootstrap.com/docs">Bootstrap Documentation</a> page. The custom components
    below were created to extend this theme past the default component classes built into Bootstrap's
    framework.
</p>
<div class="row"><!-- Content Row -->
    <div class="col-lg-6">
        <div class="card my-3">
            <div class="card-header fw-bold text-primary">Default Bootstrap Alerts</div>
            <div class="card-body">
                <div class="alert alert-primary" role="alert">
                    A primary alert—check it out!
                </div>
                <div class="alert alert-secondary" role="alert">
                    A secondary alert—check it out!
                </div>
                <div class="alert alert-success" role="alert">
                    A success alert—check it out!
                </div>
                <div class="alert alert-danger" role="alert">
                    A danger alert—check it out!
                </div>
                <div class="alert alert-warning" role="alert">
                    A warning alert—check it out!
                </div>
                <div class="alert alert-info" role="alert">
                    A info alert—check it out!
                </div>
                <div class="alert alert-light" role="alert">
                    A light alert—check it out!
                </div>
                <div class="alert alert-dark" role="alert">
                    A dark alert—check it out!
                </div>
            </div>
            <div class="card-footer">
                <span class="small text-secondary">
                    Use .alert and alert-{color} in div alogn with role="alert"
                </span>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card my-3"><!-- Alert Content Styling -->
            <div class="card-header fw-bold text-primary">Alert Content Styling</div>
            <div class="card-body">
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <h5 class="alert-heading">Alert Heading</h5>
                    This alert example has an alert heading, an alert link, and is dismissible! <a class="alert-link" href="#!">Example alert link!</a>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
            <div class="card-footer">
                <span class="small text-secondary">
                    <p>
                        By default, Bootstrap styles the content within alerts.
                        Use .alert-heading to style a heading within an alert,
                        .alert-link to style a link within an alert, or you can
                        use the dismissible option by using the data-bs-dismiss='alert'
                        data attribute.
                    </p>
                    <p>Learn more about dismissing Bootstrap alerts in the <a href="https://getbootstrap.com/docs/5.3/components/alerts/#dismissing">Bootstrap alerts component documentation</a> .</p>
                </span>
            </div>
        </div>

        <div class="card my-3"><!-- Custom Icon Alerts -->
            <div class="card-header fw-bold text-primary">Custom Icon Alerts</div>
            <div class="card-body">
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <div class="d-flex align-items-center">
                        <div class="me-3"><i class="bi bi-flag" style="font-size:25px;"></i></div>
                        <div>
                            <h5 class="alert-heading">Primary Icon Alert</h5>
                            This alert uses an icon from Bootstrap Icons!
                        </div>
                    </div>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <div class="d-flex align-items-center">
                        <div class="me-3"><i class="bi bi-feather" style="font-size:25px;"></i></div>
                        <div>
                            <h5 class="alert-heading">Danger Icon Alert</h5>
                            This alert uses an icon from Bootstrap Icons!
                        </div>
                    </div>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
            <div class="card-footer">
                <span class="small text-secondary">
                    <p>Learn more about dismissing Bootstrap alerts in the <a href="https://getbootstrap.com/docs/5.3/components/alerts/#dismissing">Bootstrap alerts component documentation</a> .</p>
                </span>
            </div>
        </div>
    </div>
</div>
@endsection