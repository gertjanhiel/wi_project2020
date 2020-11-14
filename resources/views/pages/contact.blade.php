@extends('main')

@section('head')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
            src="https://connect.facebook.net/nl_BE/sdk.js#xfbml=1&version=v8.0&appId=645244712757991&autoLogAppEvents=1"
            nonce="tINufZKi"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('../css/contact-form.css') }}">
@endsection

@section('content')
<div class="fcf-body">

    <div id="fcf-form">
        <h3 class="fcf-h3">Contact us</h3>

        <form id="fcf-form-id" class="fcf-form-class" method="post" action="../../lang/en/contact-form-process.php">

            <div class="fcf-form-group">
                <label for="Name" class="fcf-label">Your name</label>
                <div class="fcf-input-group">
                    <input type="text" id="Name" name="Name" class="fcf-form-control" required>
                </div>
            </div>

            <div class="fcf-form-group">
                <label for="Email" class="fcf-label">Your email address</label>
                <div class="fcf-input-group">
                    <input type="email" id="Email" name="Email" class="fcf-form-control" required>
                </div>
            </div>

            <div class="fcf-form-group">
                <label for="Message" class="fcf-label">Your message</label>
                <div class="fcf-input-group">
                    <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
                </div>
            </div>

            <div class="fcf-form-group">
                <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Send Message</button>
            </div>

        </form>
    </div>

</div>
@endsection
