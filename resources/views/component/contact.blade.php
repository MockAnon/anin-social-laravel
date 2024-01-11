<div class="row">
    <div class="col-md-6 background-grey color-black">
        <!-- @if (Session::has('flash_message'))
            <div class="alert alert-success">{{ Session::get('flash_message') }} </div>
        @endif -->
        <div id="alert-message" class="alert alert-success"></div>

        <form id="contact-form" style="margin: 0px; padding: 0px;" action="{{ route('contact.postmessage') }}" method="post" class="flex-col"> 
            
            {{ csrf_field() }}

            @csrf
            <div class="padding-0-1 padding-top-05">
                <label class="padding-bottom-1" for="email"> Your E-Mail: </label>
                <input class="form-control margin-bottom-05" type="text" name="email" id="email"> 
                @if ($errors->has('email'))
                    <small class="form-text invalid-feedback margin-bottom-025">{{ $errors->first('email') }} </small>
                @endif

                <label class="padding-bottom-1" for="subject"> Your Full Name: </label>
                <input class="form-control margin-bottom-05" type="text" name="name" id="subject">
                @if ($errors->has('name'))
                    <small class="form-text invalid-feedback margin-bottom-025">{{ $errors->first('name') }} </small>
                @endif

                <label class="padding-bottom-1" for="message"> Message: </label>
                <textarea class="form-control margin-bottom-05" type="message" name="message" id="message"> </textarea>
                @if ($errors->has('message'))
                    <small class="form-text invalid-feedback margin-bottom-05">{{ $errors->first('message') }} </small>
                @endif
            </div>

            <div class="" data-callback="recaptchaCallback" id="html_element"></div>

            <button id="submitBtn" type="submit" disabled class="btn btn-primary flex-05"> Submit </button>
        </form>

    </div>
 </div>

 <?php
#$user = User::first(); 
#$user->notify(new HelloUser());
?>

<style>
    .invalid-feedback {
        display: block;
    }
    

</style>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>

<script type="text/javascript">
    var max_val = "{{ env('SITE_KEY') }}";
    

    var onloadCallback = function() {
        grecaptcha.render('html_element', {
            'sitekey' : max_val
        });
    };
    function recaptchaCallback() {
        if(grecaptcha && grecaptcha.getResponse().length > 0)
        {
            //the recaptcha is checked
            $('#submitBtn').removeAttr('disabled');
        }
        else
        {
            //The recaptcha is not cheched
        }
    };

    const element = document.querySelector('#contact-form');
    const messageReturn = document.querySelector("#alert-message");

    element.addEventListener('submit', event => {
        event.preventDefault();
        // actual logic, e.g. validate the form
        console.log('Form submission cancelled.');

        var formData = new FormData(element);

        fetch("{{ route('contact.postmessage') }}", {
            method: "POST",
            Headers: {
                Accept: 'application.json',
                'Content-Type': 'application/json'
            },
            body: formData,
        })
        .then(response => {
            if (!response.ok) {
                console.log("return", response);
                messageReturn.classList.remove("success");
                throw new Error("network returns error", response);
            }
            return response.json();
        })
        .then(resp => {
            //success
            console.log("resp from server ", resp.message);
            messageReturn.innerHTML = resp.message;
            messageReturn.classList.add("success");
        })
        .catch(error => {
            // Handle error
            console.log("error ", error);
            messageReturn.innerHTML = JSON.stringify(error, null, 2);
            messageReturn.classList.remove("success");
        });

        // element.submit();
    });

    

</script>