<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

    <title>Messenger</title>
  </head>
  <body>
    <div class="container">
        <h1>Messages : </h1>

        <div id="messages" class="list-group mb-3">
    
        </div>
    
        <div id="message">

            <div class="mb-3">
                <label for="message_user">Username</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                  </div>
                  <input type="text" class="form-control" id="message_user" placeholder="Username" required="">
                  <div class="invalid-feedback" style="width: 100%;">
                    Your username is required.
                  </div>
                </div>
            </div>

            <div class="form-group">
                <label for="message_text">Your message</label>
                <textarea class="form-control" id="message_text" rows="3" spellcheck="false"></textarea>
            </div>

            <button class="btn btn-primary float-right">Send</button>
        </div>
    </div>
    


    <!-- JavaScript Dep -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- JavaScript src -->
    <script src="message.js"></script>
</body>
</html>