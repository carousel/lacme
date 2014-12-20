<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Password Reminder</title>
        <link rel="stylesheet" href="css/bootstrap.css"/>

    </head>
    <body>
        
    @if(Session::has("error"))
        {{Session::get("error")}}
    @endif
    @if(Session::has("status"))
        {{Session::get("status")}}
    @endif
        
    <div class="row">
        <div class="col-md-6">
            {{Form::open(["url"=>"postRemind","method"=>"POST"])}}
                {{Form::label("email")}}
                {{Form::email("email","",["class"=>"form-control","placeholder"=>"Enter email for password reset"])}}
                {{Form::submit("Submit",["class" => "btn bin-success pull-right"])}}
            {{Form::close()}}
        </div>
    </div>
        
    </body>
</html>
