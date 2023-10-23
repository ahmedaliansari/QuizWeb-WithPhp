 <?php
include("config.php");
?>

 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizweb.com | Terms & Conditions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            
            font-family: 'Roboto', sans-serif;
    line-height: 1.6;
        }
      
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        h2 {
            margin-top: 10px;
        }

        p {
            margin-bottom: 15px;
        }

        ul {
            margin-left: 20px;
        }

        .card {
            margin-top: 30px;
        }

        .btn-start-quiz {
            display: block;
            width: 250px;
            margin: 0 auto;
            margin-top: 50px;
        }

        .footer {
            text-align: center;
            margin-top: 50px;
            padding-top: 20px;
            border-top: 1px solid #ccc;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome to Quizweb.com</h1>
        <p class="fs-4 fw-bold mt-3 text-center">Welcome <?php echo $_SESSION["name"]; ?></p>

        <div class="card">
            <div class="card-body">
                <h2 class="card-title text-center">Terms & Conditions</h2>
                <br>
                <p>Welcome to our quiz! By participating, you agree to the following terms and conditions:</p>
                <br>

                <h3>1. Eligibility</h3>
                <p>The quiz is open to individuals of all ages, unless specified otherwise in the quiz announcement.
                    However, participants under the age of 18 may need parental or legal guardian consent to enter.</p>

                <h3>2. Participation</h3>
                <p>Participation in the quiz is voluntary and free. No purchase or payment is necessary to enter or
                    win.</p>

                <h3>3. How to Enter</h3>
                <p>Follow the instructions provided in the quiz announcement to participate. This may include answering
                    questions, solving puzzles, or any other specified method.</p>

                <h3>4. Deadline</h3>
                <p>Pay attention to the quiz's deadline for entry. Any submissions received after the specified time and
                    date will not be considered.</p>

                <h3>5. Multiple Entries</h3>
                <p>In most cases, multiple entries from the same person may not be allowed unless stated otherwise.</p>

                <h3>6. Winners Selection</h3>
                <p>Winners will be selected based on specific criteria, which may vary for each quiz. Decisions of the
                    quiz organizers or judges are final.</p>
            </div>
        </div>
        <h2 class="mt-5 text-center">Start 👇 Quiz</h2>
        <a class="btn btn-primary btn-start-quiz" href="quiz.php" type="submit">Click Me</a>
    </div>

    <footer class="footer">
        <p>&copy; <?php echo date("Y"); ?> Quizweb.com. All rights reserved.</p>
    </footer>
</body>

</html>
