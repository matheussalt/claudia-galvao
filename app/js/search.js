export default function search() {
  const searchButton = document.querySelector('.search-icon');
  const searchWrapper = document.querySelector('.search-header');

  searchButton.addEventListener('click', (e) => {
    searchWrapper.classList.toggle('ativo');
  });
}
