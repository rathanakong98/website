<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Text File Editor</title>
<script src="jquery.min.js"></script>
<link rel="stylesheet" href="styles1.css">
</head>
<body>

<h1>Website add Text and Edit List TRC</h1>

<div class="main-container">
<div class="container">
<h4>List Website WWW</h4>
<textarea id="textArea"></textarea><br>
<button id="saveBtn">Save Changes</button>
<div id="output"></div>
</div>

<div class="container">
<h4>List Website None WWW</h4>
<textarea id="textArea1"></textarea><br>
<button id="saveBtn1">Save Changes</button>
<div id="output1"></div>
</div>

</div>
<script>
$(document).ready(function(){
    // Load the content of the text file when the page is loaded
    $.get("list-www.txt", function(data) {
        $("#textArea").val(data);
    });

    // Save changes to the text file
    $("#saveBtn").click(function(){
        var content = $("#textArea").val();
        $.post("save_file_www.php", {data: content}, function(data){
            $("#output").text(data);
        });
    });
});


$(document).ready(function(){
    // Load the content of the text file when the page is loaded
    $.get("list.txt", function(data) {
        $("#textArea1").val(data);
    });

    // Save changes to the text file
    $("#saveBtn1").click(function(){
        var content = $("#textArea1").val();
        $.post("save_file.php", {data: content}, function(data){
            $("#output1").text(data);
        });
    });
});
</script>

            <?php
                session_start();
                if(isset($_SESSION['username'])) {
                    echo "Welcome, ".$_SESSION['username']."!";
                } else {
                    header("location: index.html");
                    exit();
                }
            ?>
        <a href="logout.php" class="logout-btn">Logout</a>
</body>
</html>
