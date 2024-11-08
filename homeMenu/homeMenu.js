// Handle click on heart icon to add/remove favorites
document.querySelectorAll('.favorite-icon').forEach(function(icon) {
    icon.addEventListener('click', function() {
      const dishId = icon.getAttribute('data-id');
      const isFavorite = icon.classList.contains('favorited');
      
      // Toggle favorite status
      if (isFavorite) {
        icon.classList.remove('favorited');
        icon.style.color = "#f5c85a"; // Red color when not favorited
        removeFromFavorites(dishId);
      } else {
        icon.classList.add('favorited');
        icon.style.color = "#e74c3c"; // Change to your desired color for favorites
        addToFavorites(dishId);
      }
    });
  });
  
  // Function to add item to favorites
  function addToFavorites(dishId) {
    let favorites = JSON.parse(localStorage.getItem('favorites')) || [];
    if (!favorites.includes(dishId)) {
      favorites.push(dishId);
      localStorage.setItem('favorites', JSON.stringify(favorites));
    }
  }
  
  // Function to remove item from favorites
  function removeFromFavorites(dishId) {
    let favorites = JSON.parse(localStorage.getItem('favorites')) || [];
    favorites = favorites.filter(id => id !== dishId);
    localStorage.setItem('favorites', JSON.stringify(favorites));
  }
  
  // Optionally, you can load the favorite items from localStorage when the page loads to keep the state.
  document.addEventListener('DOMContentLoaded', function() {
    let favorites = JSON.parse(localStorage.getItem('favorites')) || [];
    document.querySelectorAll('.favorite-icon').forEach(function(icon) {
      const dishId = icon.getAttribute('data-id');
      if (favorites.includes(dishId)) {
        icon.classList.add('favorited');
        icon.style.color = "#e74c3c"; // Color for favorites
      }
    });
  });
  