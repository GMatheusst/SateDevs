function togglePassword(event) {
  const passwordInput = document.getElementById("senhaUsuario");
  const button = event.target; // O botão clicado

  // Checa se o botão contém o ícone de 'bi-eye'
  const icon = button.querySelector("i");

  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    icon.classList.remove("bi-eye");
    icon.classList.add("bi-eye-slash");
  } else {
    passwordInput.type = "password";
    icon.classList.remove("bi-eye-slash");
    icon.classList.add("bi-eye");
  }
}

function uploadImage() {
  document.getElementById("fileInput").click();
}

function previewImage(event) {
  const profileImage = document.getElementById("profileImage");
  profileImage.src = URL.createObjectURL(event.target.files[0]);
}
