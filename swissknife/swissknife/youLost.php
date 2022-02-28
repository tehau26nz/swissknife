<div class="alert alert-danger text-center" id="lostAlertBox" role="alert">
    Bugger... You've lost!
</div>
<div class="text-center">
    The word was:
    <h1><?php echo $_SESSION['word'] ?></h1>
    <a href="hangman.php" class="btn btn-success" role="button">Want to play again?</a>
</div>