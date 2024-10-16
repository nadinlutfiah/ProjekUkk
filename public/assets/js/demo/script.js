// Add event listener to color palette
const colorPalette = document.querySelector('.color-palette');
colorPalette.addEventListener('click', (event) => {
  if (event.target.classList.contains('color')) {
    const selectedColor = event.target.style.backgroundColor;
    // Apply selected color to products (add logic to filter by color)
  }
});

// Add event listener to price range
const minPriceInput = document.getElementById('min-price');
const maxPriceInput = document.getElementById('max-price');
minPriceInput.addEventListener('input', () => {
  const minPrice = parseInt(minPriceInput.value) || 0;
  const maxPrice = parseInt(maxPriceInput.value) || Infinity;
  // Apply price filter to products (add logic to filter by price)
});
maxPriceInput.addEventListener('input', () => {
  const minPrice = parseInt(minPriceInput.value) || 0;
  const maxPrice = parseInt(maxPriceInput.value) || Infinity;
  // Apply price filter to products (add logic to filter by price)
});

// Add event listener to category checkboxes
const categoryCheckboxes = document.querySelectorAll('.products input[type="checkbox"]');
categoryCheckboxes.forEach(checkbox => {
  checkbox.addEventListener('change', () => {
    const selectedCategories = Array.from(categoryCheckboxes).filter(checkbox => checkbox.checked).map(checkbox => checkbox.id);
    // Apply category filter to products (add logic to filter by category)
  });
});

// Pagination Logic
const paginationLinks = document.querySelectorAll('.pagination a');
paginationLinks.forEach(link => {
  link.addEventListener('click', (event) => {
    event.preventDefault();
    // Update product display based on pagination link clicked (add logic for pagination)
  });
});