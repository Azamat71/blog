<?php
?>
<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <style type="text/css">
        .box{
            width: 600px;
            margin: 0 auto;
            border: 1px solid #ccc;
        }
        .has-error{
            border-color: #cc0000;
            background-color: #ffff99;
        }
    </style>
</head>
<body>
    <br/>
    <div class="container box">
        <br>
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <form method="post" action="{{ url('sendemail/send') }}">{{ csrf_field() }}
            <div class="form-group">
                <label>Enter your name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Enter your email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Enter your message</label>
                <textarea name="message" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="send" value="Send" class="btn btn-info">
            </div>
        </form>
    </div>

</body>
</html>
