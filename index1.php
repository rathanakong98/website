
<?php
session_start();
if(isset($_SESSION['username'])){ 
    header("Location: /Form-Login/index1.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Text File Editor</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="styles1.css">

</head>
<body>
    <h1>Website add Text and Edit List TRC</h1>
    <h4>List Website Block TRC</h4>
<div class="container">
<textarea id="textArea"></textarea><br>
<button id="saveBtn">Save Changes</button>
<div id="output"></div>
</div>
<script>
$(document).ready(function(){
    // Load the content of the text file when the page is loaded
    $.get("list.txt", function(data) {
        $("#textArea").val(data);
    });

    // Save changes to the text file
    $("#saveBtn").click(function(){
        var content = $("#textArea").val();
        $.post("save_file.php", {data: content}, function(data){
            $("#output").text(data);
        });
    });
});
</script>

</body>
</html>
