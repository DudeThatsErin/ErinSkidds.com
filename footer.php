</section>
<footer>
    <p>&copy; 2021 ErinSkidds.com - Website Coded & Created By Erin Skidds using JavaScript, PHP, <a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Ferinskidds.com%2F" target="_blank" title="HTML5 Valid!">HTML5</a> &amp; <a href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Ferinskidds.com&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en" target="_blank" title="CSS3 Valid!">CSS3</a>. It is <a href="https://search.google.com/test/mobile-friendly/result?id=fb15szBPie2K2zCH9QWr6g" target="_blank" title="Mobile Friendly!">Mobile Friendly</a>. Follow updates on <a href="https://github.com/DudeThatsErin/ErinSkidds.com" tile="ErinSkidds.com on GitHub">GitHub</a>.</p>
</footer>
</div>

    <script>
    grecaptcha.ready(function() {
        grecaptcha.execute('6LefRw4dAAAAANexYiV4MxbYODkg3eFkMDBfMIBT', {action: 'submit'}).then(function(token) {
            var recaptchaResponse = document.getElementById('recaptchaResponse');
            recaptchaResponse.value = token;
        });
    });
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
  </script>
</body>
</html>