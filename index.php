<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill Calculator</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Electricity Bill Calculator</h2>
                <form id="billForm">
                    <div class="form-group">
                        <label for="units">Enter Units Consumed:</label>
                        <input type="number" class="form-control" id="units" name="units" placeholder="Enter units">
                        <small id="unitsError" class="error"></small>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Calculate</button>
                </form>
                <div class="mt-3" id="result"></div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
