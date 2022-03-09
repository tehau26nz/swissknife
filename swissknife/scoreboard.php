<div class="row" id="scoreboardRow">
    <div class="col-md-6 text-center">
        <canvas id="canvas" width="350" height="300"></canvas>
    </div>
    <div class="col-md-6">
        <ul class="list-group">
            <li class="list-group-item active">SCOREBOARD</li>
            <li class="list-group-item d-flex justify-content-between">Correct Guesses<span class="badge bg-primary"><?php echo $_SESSION['correctGuesses'] ?></span></li>
            <li class="list-group-item d-flex justify-content-between">Incorrect Guesses<span class="badge bg-primary"><?php echo $_SESSION['incorrectGuesses'] ?></span></li>
            <li class="list-group-item d-flex justify-content-between">Games Won<span class="badge bg-primary"><?php echo $_SESSION['gamesWon'] ?></span></li>
            <li class="list-group-item d-flex justify-content-between">Games Lost<span class="badge bg-primary"><?php echo $_SESSION['gamesLost'] ?></span></li>
            <li class="list-group-item d-flex justify-content-between">Total Games Played<span class="badge bg-primary"><?php echo $_SESSION['gamesWon'] + $_SESSION['gamesLost'] ?></span></li>
            <li class="list-group-item d-flex justify-content-between">
                <form method="post" action="hangman.php">
                    <button class="btn btn-danger" name="reset">RESET SCOREBOARD</button>
                </form>
            </li>
        </ul>
    </div>
</div>