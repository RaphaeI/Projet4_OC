<h2>Ajouter un commentaire</h2>
<form id="form" action="" method="POST" onsubmit="return submitUserForm();">
    <?= $form ?>
    <div class="g-recaptcha" data-sitekey="6LdgZLoUAAAAAGl9uyxQw2-Chjp5VC0DB_XFvCnd"></div>
    <div id="g-recaptcha-error"></div>
    <input id="submission_comment" type="submit" value="Commenter">
</form>

<script>
function submitUserForm() {
    var response = grecaptcha.getResponse();
    if(response.length == 0) {
        document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">Veuillez remplir le captcha</span>';
        return false;
    }
    return true;
}
</script>