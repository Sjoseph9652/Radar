<header class="header">
    <?php include 'navbar.php' ?>
    <div class="container text-center py-5">
        <h1 class="mb-4">Product Questions? Ask our Experts!</h1>
        <div class="input-group mb-3 justify-content-center">
            <input type="text" class="form-control question-box" placeholder="Type your question here" style="max-width: 500px;">
            <div class="input-group-append">
                <button id="seek-help" class="btn btn-primary search-button" onclick="ConfirmLogin()">Ask!</button>
            </div>
        </div>
        <?php if (isset($_SESSION['header_question_success'])): ?>
        <div class="alert alert-success alert-dismissible fade show text-center mt-2" role="alert">
            Your question has been submitted! We'll get back to you shortly.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php unset($_SESSION['header_question_success']); ?>
    <?php endif; ?>
    </div>
</header>

<script>
function ConfirmLogin() {
    <?php if (isset($_SESSION['email'])): ?>
        var question = document.querySelector('.question-box').value.trim();
        if (question) {
            var form = document.createElement('form');
            form.method = 'POST';
            form.action = 'submit_request.php';

            var input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'question';
            input.value = question;
            form.appendChild(input);

            document.body.appendChild(form);
            form.submit();
        } else {
            alert('Please type a question first!');
        }
    <?php else: ?>
        $('#signup').modal('show');
    <?php endif; ?>
}
</script>

