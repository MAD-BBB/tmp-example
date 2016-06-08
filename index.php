<?php
echo print_r($_POST);
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <title>form</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="panel">
            <div class="panel-body">
                <form class="form-horizontal" id="form0" action="/index.php" method="post" role="form">
                    <div class="form-group ">
                        <label for="inputFirstName" class="col-sm-2
                               control-label">Name
                            <span style="color:red;">*</span>
                        </label>
                        <div class="col-sm-8">
                            <input type="text"
                                   class="form-control"
                                   id="inputFirstName"
                                   name="inputFirstName"
                                   value="Pet"
                                   placeholder=""
                                   data-validation="server"
                                   data-validation-url="/ajax.php"
                                   >
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="inputLastName" class="col-sm-2
                               control-label">Family
                            <span style="color:red;">*</span>
                        </label>
                        <div class="col-sm-8">
                            <input type="text"
                                   class="form-control"
                                   id="inputLastName"
                                   name="inputLastName"
                                   value="Bull"
                                   placeholder=""
                                   data-validation="server"
                                   data-validation-url="/ajax.php"
                                   >
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="inputEmail" class="col-sm-2
                               control-label">Email
                            <span style="color:red;">*</span>
                        </label>
                        <div class="col-sm-8">
                            <input type="text"
                                   class="form-control"
                                   id="inputEmail"
                                   name="inputEmail"
                                   value=""
                                   placeholder=""
                                   data-validation="server"
                                   data-validation-url="/ajax.php"
                                   >
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" role="button"
                                class="btn but-submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/jQuery-Form-Validator/form-validator/jquery.form-validator.js"></script>
        <script type="text/javascript">
            $(function () {
                $.validate({
                    modules: 'security'
                });
            });
        </script>
    </body>
</html>