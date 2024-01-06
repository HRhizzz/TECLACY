function toggleProfile() {
  var signUpButton = document.getElementById("signUp");
  var signInButton = document.getElementById("signIn");
  var profileButton = document.getElementById("profile");

  var isSignedIn = true; // Gantilah ini dengan kondisi login yang sesungguhnya

  if (isSignedIn) {
    signUpButton.style.display = "none";
    signInButton.style.display = "none";
    profileButton.style.display = "inline";
  } else {
    signUpButton.style.display = "inline";
    signInButton.style.display = "inline";
    profileButton.style.display = "none";
  }
}
function redirectToHome() {
  window.location.href = "home.php";
}

function redirectToSignIn() {
  window.location.href = "signin.php";
}
