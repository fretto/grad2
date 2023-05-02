
    
/* JavaScript code to generate the image */

  // Replace these variables with the user's first and last name
  const firstName = "User";
  const lastName = "Name";
  
  // Get the first letter of the user's first and last name
  const initials = `${firstName.charAt(0)}${lastName.charAt(0)}`;
  
  // Create an image with the user's initials inside a circle
  const profileImage = document.getElementById("profile-image");
  profileImage.innerHTML = `<div class="profile-image-circle" style="font-size:40px;">${initials}</div>`;

