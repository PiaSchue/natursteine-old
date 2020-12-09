<!--Fade-in-Effekt mithilfe von JS und CSS-Klassen fadein und appear-->
<script type="text/javascript">
  const faders = document.querySelectorAll('.fadein');

  const appearOptions = {
    threshold: 0.6,
    rootMargin:"0px 0px -50px 0px"
  };

  const appearOnScroll = new IntersectionObserver(function(
    entries, 
    appearOnScroll
    ) {
      entries.forEach(entry => {
        if (!entry.isIntersecting) {
          return;
        } else {
          entry.target.classList.add('appear');
          appearOnScroll.unobserve(entry.target)
        }
      })
    }, 
    appearOptions);

  faders.forEach(fader => {
    appearOnScroll.observe(fader);
  });
</script>

<!--Fade-in-Effekt mithilfe von JS und CSS-Klassen fadein und appear --- Für 2 Fotos untereinander, da sonst nicht rechtzeitig aktiviert-->
<script type="text/javascript">
  const faders2 = document.querySelectorAll('.fadein2');

  const appearOptions2 = {
    threshold: 0.1,
    rootMargin:"0px 0px 0px 0px"
  };

  const appearOnScroll2 = new IntersectionObserver(function(
    entries, 
    appearOnScroll2
    ) {
      entries.forEach(entry => {
        if (!entry.isIntersecting) {
          return;
        } else {
          entry.target.classList.add('appear');
          appearOnScroll2.unobserve(entry.target)
        }
      })
    }, 
    appearOptions2);

  faders2.forEach(fader => {
    appearOnScroll.observe(fader);
  });
</script>
<!--Footer-->
<section id="footer" class="jumbotron pl-5 pb-0 pt-4 mb-0">
  <section class="container">
      <div class="row">
         <div class="col-12 col-lg-9">
            <p class="text-uppercase mb-0">Natursteine Schürmann</p>
              <ul class="list-unstyled text-small font-weight-light">
                  <li> Lübbesmeyerweg 5</li>
                  <li> 48653 Coesfeld</li>
                  <li> Germany</li>
                  <li> Tel.: 02541 71000 </li>
              </ul>
          </div>
          <div class="col-12 col-md-3">
            <p class="text-uppercase mb-0">Links</p>
            <ul class="list-unstyled text-small font-weight-light">
              <li><a class="text-muted" href="index.php">Home</a></li>
              <li><a class="text-muted" href="datenschutz.php">Datenschutzerklärung</a></li>
              <li><a class="text-muted" href="kontakt.php">Kontakt</a></li>
              <li><a class="text-muted" href="impressum.php">Impressum</a></li>
            </ul>
          </div>
      </div>      
  </section>
</section> 
</body>
</html>