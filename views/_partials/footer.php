  </div>



  <footer>

    <a href="<?= BASE_PATH . 'newsletter'; ?>">
      S'inscrire/se désinscrire à la newsletter
    </a>

    <a href="<?= BASE_PATH . 'contact'; ?>">
      Nous contacter
    </a>









  </footer>

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js" integrity="sha512-5BqtYqlWfJemW5+v+TZUs22uigI8tXeVah5S/1Z6qBLVO7gakAOtkOzUtgq6dsIo5c0NJdmGPs0H9I+2OHUHVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.bundle.min.js" integrity="sha512-BOsvKbLb0dB1IVplOL9ptU1EYA+LuCKEluZWRUYG73hxqNBU85JBIBhPGwhQl7O633KtkjMv8lvxZcWP+N3V3w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   -->
  <script src="<?= BASE . "assets/js/script.js"; ?>"></script>

  <script>
    (function() {
      let onpageLoad = localStorage.getItem("theme") || ""; // On récupère la clé 'theme et sa valeur' dans la variable onPageLoad
      let element = document.getElementById("body"); // Element avec lequel nous voulons intéragir
      element.classList.add(onpageLoad);
      document.getElementsById("body").classList.toggle(localStorage.getItem("theme") || "");
    })();

    function themeToggle() {
      let element = document.body;
      element.classList.toggle("darkMode");

      let theme = localStorage.getItem("theme"); // récupère la valeur de la clé 'theme'
      if (theme && theme === "darkMode") { // si un theme existe et que sa valeur est "darkMode" 
        localStorage.setItem("theme", "lightMode"); // alors change sa valeur en "lightMode"
      } else { // si sa valeur n'est pas "darkMode" 
        localStorage.setItem("theme", "darkMode"); // alors remet la en "darkMode"
      }

      document.getElementsById("body").textContent = localStorage.getItem("theme");
    }
  </script>

  </body>

  </html>