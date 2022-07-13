<html>
    <head>
        <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body>
        <div class="container" style="padding-top:60px">
            <center>
                <h3>Test Comment Form</h3>
                <form action="/api/listings/{{$uuid}}" method="post" style="width:300px">
                    @csrf 
                    <input required type="text" name="message" style="width:100%" class="form-control" placeholder="Type a message" value="Hello friendly guest">
                    <button type="submit" class="btn btn-success" style="width:100%">Send Message</button>
                </form>
            </center>
        </div>
    </body>
</html>