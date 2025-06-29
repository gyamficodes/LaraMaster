import './bootstrap';

 // Mobile menu toggle
 document.getElementById('mobile-menu-button').addEventListener('click', function() {
    document.getElementById('mobile-menu').classList.toggle('hidden');
  });



  const profileDropdownButton = document.querySelector('#profileButton');
  const profileDropdown = document.querySelector('#user-profile');

  
  const handdleUserProfileButton = () => {
     if(profileDropdown.classList.contains('hidden')){
      profileDropdown.classList.remove('hidden');
      profileDropdown.classList.add('flex');
     } else {
      profileDropdown.classList.add('hidden');
      profileDropdown.classList.remove('flex');
     }
  };

  profileDropdownButton.addEventListener('click', handdleUserProfileButton);