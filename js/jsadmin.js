document.addEventListener("DOMContentLoaded", function () {
  // JavaScript para Usuarios
  const userAdminBtn = document.getElementById("user-admin-btn");
  const userAdminArea = document.getElementById("user-admin-area");
  const createUserBtn = document.getElementById("create-user-btn");
  const userCreateForm = document.getElementById("user-create-form");
  const userConsultBtn = document.getElementById("user-consult-btn");
  const userConsultForm = document.getElementById("user-consult-form");
  const userUpdateBtn = document.getElementById("user-update-btn");
  const userUpdateForm = document.getElementById("user-update-form");
  const deleteUserBtn = document.getElementById("delete-user-btn");
  const userDeleteForm = document.getElementById("user-delete-form");
  const userDeleteDetails = document.getElementById("user-delete-details");
  const confirmDeleteBtn = document.getElementById("confirm-delete-user");

  userAdminBtn.addEventListener("click", () => {
    if (userAdminArea.style.display === "none" || !userAdminArea.style.display) {
      userAdminArea.style.display = "block";
    } else {
      userAdminArea.style.display = "none";
    }
  });

  createUserBtn.addEventListener("click", () => {
    userCreateForm.style.display = "block";
    userConsultForm.style.display = "none";
    userUpdateForm.style.display = "none";
    userDeleteForm.style.display = "none";
    userDeleteDetails.style.display = "none";
  });

  userConsultBtn.addEventListener("click", () => {
    userCreateForm.style.display = "none";
    userConsultForm.style.display = "block";
    userUpdateForm.style.display = "none";
    userDeleteForm.style.display = "none";
  });

  userUpdateBtn.addEventListener("click", () => {
    userCreateForm.style.display = "none";
    userConsultForm.style.display = "none";
    userUpdateForm.style.display = "block";
    userDeleteForm.style.display = "none";
  });

  deleteUserBtn.addEventListener("click", () => {
    userCreateForm.style.display = "none";
    userConsultForm.style.display = "none";
    userUpdateForm.style.display = "none";
    userDeleteDetails.style.display = "block";
  });
});
