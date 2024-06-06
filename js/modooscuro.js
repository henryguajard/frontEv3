document.addEventListener("DOMContentLoaded", function() {
  document.querySelectorAll('[data-bs-theme-value]').forEach(function (button) {
      button.addEventListener('click', function () {
          var theme = this.getAttribute('data-bs-theme-value');
          if (theme === 'light') {
              document.body.classList.remove('dark-mode');
              document.querySelector('.navbar').classList.remove('dark-mode');
          } else if (theme === 'dark') {
              document.body.classList.add('dark-mode');
              document.querySelector('.navbar').classList.add('dark-mode');
          }
      });
  });
});