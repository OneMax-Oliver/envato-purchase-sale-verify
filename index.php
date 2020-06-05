<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Envato Purchase Verifier</title>
    </head>
    <body>

        <h1 class="text-center">Envato Purchase Verifier</h1>
        <div class="content">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <form action="verify.php" method="post">
                        <div class="form-group">
                            <label for="PurchaseCode">Purchase Code</label>
                            <input type="text" class="form-control" name="PurchaseCode" id="PurchaseCode" aria-describedby="PurchaseCode" placeholder="Enter Purchase Code" minlength="10" maxlength="32" required="true" autocomplete="true" autofocus="true">
                            <small id="PurchaseCode" class="form-text text-muted">We'll never share your Purchase Code with anyone else.</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>