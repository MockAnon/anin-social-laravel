<div class="row">
    <div class="col-md-6">
        <h3 style="margin-bottom: 2rem; margin-top: 0rem;"> Sign Up </h3>
        @if (Session::has('flash_message'))
            <div class="alert alert-success">{{ Session::get('flash_message') }} </div>
        @endif
        <form style="margin: 0px; padding: 0px;" action="{{ route('contact.store') }}" method="post" class="flex-col"> 
            
        {{ csrf_field() }}

        @csrf
            {{-- <div class=""> --}}
                <label class="padding-bottom-1" for="email"> Your E-Mail: </label>
                <input class="form-control margin-bottom-1" type="text" name="email" id="email"> 
                @if ($errors->has('email'))
                    <small class="form-text invalid-feedback">{{ $errors->first('email') }} </small>
                @endif
            {{-- </div>
            <div class=""> --}}
                <label class="padding-bottom-1" for="subject"> Your Full Name: </label>
                <input class="form-control margin-bottom-1" type="text" name="name" id="subject">
                @if ($errors->has('name'))
                    <small class="form-text invalid-feedback">{{ $errors->first('name') }} </small>
                @endif
            {{-- </div>
            <div class=""> --}}
                <label class="padding-bottom-1" for="message"> Message </label>
                <textarea class="form-control margin-bottom-1" type="message" name="message" id="message"> </textarea>
                @if ($errors->has('message'))
                    <small class="form-text invalid-feedback">{{ $errors->first('message') }} </small>
                @endif
            {{-- </div> --}}
            <div id="html_element"></div>
            <button type="submit" class="btn btn-primary flex-05"> Submit </button>
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
    var onloadCallback = function() {
        grecaptcha.render('html_element', {
            'sitekey' : '6LcGg_cUAAAAAPn-BNqyHBdmikCHBV803Hx9W3t5'
        });
    };
</script>