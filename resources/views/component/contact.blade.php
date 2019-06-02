<div class="row">
    <div class="col-md-6">
        <h3> Sign Up </h3>
        @if (Session::has('flash_message'))
            <div class="alert alert-success">{{ Session::get('flash_message') }} </div>
        @endif
        <form action="{{ route('contact.store') }}" method="post"> 
        {{ csrf_field() }}
            <div class="form-group">
                <label for="email"> Your E-Mail: </label>
                <input class="form-control" type="text" name="email" id="email"> 
                @if ($errors->has('email'))
                    <small class="form-text invalid-feedback">{{ $errors->first('email') }} </small>
                @endif
            </div>
            <div class="form-group">
                <label for="subject"> Your Full Name: </label>
                <input class="form-control" type="text" name="name" id="subject">
                @if ($errors->has('name'))
                    <small class="form-text invalid-feedback">{{ $errors->first('name') }} </small>
                @endif
            </div>
            <div class="form-group">
                <label for="message"> Message </label>
                <textarea class="form-control" type="message" name="message" id="message"> </textarea>
                @if ($errors->has('message'))
                    <small class="form-text invalid-feedback">{{ $errors->first('message') }} </small>
                @endif
            </div>
            <button type="submit" class="btn btn-primary"> Submit </button>
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