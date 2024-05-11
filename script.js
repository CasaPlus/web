document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault();
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    if (email === "CasaPlus@gmail.com" && password === "casaplus1234") {
   
      window.location.href = "portada2.html";
    } else {
      
      document.getElementById('error-message').classList.remove('hidden');
    }
  });