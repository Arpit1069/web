$(document).ready(function () {
    $("#billForm").submit(function (event) {
        event.preventDefault();
        var units = $("#units").val();

        $.ajax({
            url: 'calculate.php',
            type: 'POST',
            data: { units: units },
            dataType: 'json',
            success: function (response) {
                if (response.error) {
                    $("#unitsError").html(response.error);
                    $("#result").empty();
                } else {
                    $("#unitsError").empty();
                    $("#result").html("<p>Total Bill: Rs. " + response.bill + "</p><p>Details:</p><p>" + response.details + "</p>");
                }
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
                alert("An error occurred while processing your request. Please try again.");
            }
        });
    });
});
