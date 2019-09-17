<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>

    <script src="js/main.js"></script>
    <title>Ajax Request  with jQuery</title>
</head>
<body>
    <main>
        <section class="container">
            <h1>Ajax Request  with jQuery</h1>
            <hr>
            <span id="msg"></span>
            <form action="" class="form-inline" id="AjaxRequest">
                <div class="class form-group">
                    <input type="text"  class="form-control" name="name" placeholder="Name" id="">
                </div>
                <div class="class form-group">
                    <input type="email"  class="form-control" name="email" placeholder="E-mail" id="">
                </div>
                <div class="class form-group">
                    <input type="text"  class="form-control" name="tel" placeholder="Telephone" id="">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <hr>
            <table id="contacts" class="table table-sm">

            </table>

        </section>
    </main>


</body>
</html>
