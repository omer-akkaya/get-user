<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $("document").ready(function () {
        $.ajax({
            url: "api/get-user.php",
            type: "get",
            success: function (data) {
                data.forEach(function (singleUser) {
                    $("#users").append(singleUser.name + "<br>")
                })
            }
        })
    })
</script>