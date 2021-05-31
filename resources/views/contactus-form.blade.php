<html>
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
<form method="POST" action="" id="contactusid" class="_form _form_9 _inline-form  _dark" novalidate>
    {{ csrf_field() }}
    <input type="hidden" name="u" value="9" />
    <input type="hidden" name="f" value="9" />
    <input type="hidden" name="s" />
    <input type="hidden" name="c" value="0" />
    <input type="hidden" name="m" value="0" />
    <input type="hidden" name="act" value="sub" />
    <input type="hidden" name="v" value="2" />
    <div class="_form-content">
        <div class="_form_element _x96827109 _full_width _clear" >
            <div class="_form-title">
                Send us A Message Ask QuestionsOr Request Futher Information
            </div>
        </div>
        <div class="_form_element _x00371721 _full_width " >
            <label class="_form-label">
                Name
            </label>
            <div class="_field-wrapper">
                <input type="text" name="fullname" placeholder="Type your name" class="RequiredField" />
            </div>
        </div>
        <div class="_form_element _x22830933 _full_width " >
            <label class="_form-label">
                Email*
            </label>
            <div class="_field-wrapper">
                <input type="text" name="email" placeholder="Type your email"  class="RequiredField"/>
            </div>
        </div>
        <div class="_form_element _field25 _full_width ">
            <label class="_form-label">
                Phone Number
            </label>
            <div class="_field-wrapper">
                <input type="text" name="field[25]" value="" placeholder="" class="RequiredField" maxlength="15" minlength="7"/>
            </div>
        </div>
        <div class="_form_element _field39 _full_width " >
            <label class="_form-label">
                Message
            </label>
            <div class="_field-wrapper">
                <textarea name="field[39]" placeholder=""  class="RequiredField"></textarea>
            </div>
        </div>
        <div class="_button-wrapper _full_width">
            <button type="submit" class="btn btn-primary" id="contact-submit">Submit</button>
        </div>
        <div class="_clear-element">
        </div>
    </div>
    <div class="_form-thank-you" style="display:none;">
    </div>
    <div id="waitingMsg" style="color: #E6A833; margin-top:20px;   display:none">Please wait...</div>
</form>
<script src="{{ asset('site/form/contactusform.js')}}"></script>
</body>
</html>
