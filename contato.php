<html lang="pt-br">
    <head>
        <title>Contato</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>

    </head>

    <body>

    <?php require_once("navegacao.php"); ?>

    <form method="get" action="action.php" class="form-horizontal">
        <fieldset>

            <!-- Text input-->
            <div class="form-group">
                <label id="label" class="col-md-4 control-label" for="textinput">Nome</label>
                <div class="col-md-4">
                    <input id="textinput" name="nome" type="text"  class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label id="label" class="col-md-4 control-label" for="textinput">E-mail</label>
                <div class="col-md-4">
                    <input id="textinput" name="email" type="text"  class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label id="label" class="col-md-4 control-label" for="textinput">Assunto</label>
                <div class="col-md-4">
                    <input id="textinput" name="assunto" type="text" class="form-control input-md">

                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label id="label" class="col-md-4 control-label" for="textarea">Mensagem</label>
                <div class="col-md-4">
                    <textarea class="form-control" id="textarea" name="mensagem"></textarea>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                    <button id="singlebutton" name="singlebutton" class="btn btn-default pull-right">
                        Enviar
                    </button>
                </div>
            </div>

        </fieldset>
    </form>

    <?php require_once("footer.php"); ?>

    </body>
</html>