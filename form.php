
<form class="row g-3 justify-content-center mt-3" method="post" action="">
    <div class="col-auto" style="text-align:center">
        <select class="form-select" name="guess">
            <?php
            foreach ($remainingLetters as $letter) {
                echo '<option value = "' . strtoupper($letter) . '">' . strtoupper($letter) . '</option>';
            }
            ?>
        </select>
    </div>
    <div class="col-auto" style="text-align:center">
        <button type="submit" name="submit" class="btn btn-primary mb-3">GUESS</button>
    </div>
</form>

