function togglePassword() {
    const passwordInput = document.getElementById("senhaUsuario");
    const button = event.target;
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      button.textContent = "Hide";
    } else {
      passwordInput.type = "password";
      button.textContent = "Show";
    }
  }
  
  function uploadImage() {
    document.getElementById("fileInput").click();
  }
  
  function previewImage(event) {
    const profileImage = document.getElementById("profileImage");
    profileImage.src = URL.createObjectURL(event.target.files[0]);
  }
  