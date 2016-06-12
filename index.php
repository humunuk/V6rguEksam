<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hinda lehte - Näidis</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

<?php
session_start();
$id = session_id();

if (isset($_POST['reset_session'])) {
    reset_session();
}

function reset_session() {
    session_regenerate_id(true);
}

?>

<div class="container">
    <div class="row">

        <div class="cold-md-6 center-block">
            <h2>Midagi holderiks siia</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <div>
                <form name="reset_session" id="reset_session" action="" method="post">
                    <button name="reset_session" type="submit">Reset session</button>
                </form>
            </div>
        </div>

    </div>
    <div class="row navbar-fixed-bottom" style="margin-bottom: 5%; float: none; text-align: center;">
        <form class="form-inline" action="addEvaluation.php" method="post">
            <input id="session_id" type="text" value=<?php echo $id ?> hidden>
            <input id="page_name" type="text" value=<?php echo  ?> hidden>
            <div class="form-group">
                <label for="ranges">Kuidas antud lehekülg meeldib?</label>
                <select class="form-control" name="ranges">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5" selected>5</option>
                </select>
                <button id="addEval" type="submit" class="btn btn-success">Hinda!</button>
            </div>
        </form>
    </div>
</div>
<script>
    $(function() {
        var btn = $("#addEval");
        var

        btn.on('click', function(e) {
            e.preventDefault();
            console.log("test");
            $.ajax("addEvaluation.php",
                   {
                       type : 'post',
                       data : {test: "test", more: "dingadong"},
                       success : function(data) {
                           console.log(data);
                       }
                   });
        });
    })
</script>
</body>
</html>