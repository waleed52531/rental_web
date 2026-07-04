const globalSearch = document.querySelector('#globalSearch');
const searchableCards = document.querySelectorAll('.property-card');

globalSearch?.addEventListener('input', () => {
  const query = globalSearch.value.trim().toLowerCase();

  searchableCards.forEach((card) => {
    const haystack = card.textContent.toLowerCase();
    const area = card.dataset.area || '';
    card.classList.toggle('hidden', Boolean(query) && !`${haystack} ${area}`.includes(query));
  });
});
