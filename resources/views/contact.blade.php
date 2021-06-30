<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        

        <form action="{{ route('contact.store') }}" method="post">

        <h1>Contact Us Form</h1><br><br>
            <!-- CROSS Site Request Forgery Protection -->
            @csrf 

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? 'error' : '' }}">
            </div><br>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}">
            </div><br>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="phone" name="phone" id="phone" class="form-control {{ $errors->has('phone') ? 'error' : '' }}">
            </div><br>

            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" id="subject" class="form-control {{ $errors->has('subject') ? 'error' : '' }}">
            </div><br>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" class="form-control"></textarea>

                @if ($errors->has('message'))
                <div class="error">
                    {{ $errors->first('message')}}
                </div>
                @endif
            </div><br>

            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-black">
        </form>

    </div>
</body>
</html>