const menuToggle = document.querySelector('[data-menu-toggle]');
const menuPanel = document.querySelector('[data-menu-panel]');

if (menuToggle && menuPanel) {
  menuToggle.addEventListener('click', () => {
    const isOpen = menuPanel.classList.toggle('open');
    menuToggle.setAttribute('aria-expanded', String(isOpen));
  });
}

const donorFilters = document.querySelector('[data-donor-filters]');
const donorCards = document.querySelectorAll('[data-donor-card]');

if (donorFilters && donorCards.length) {
  donorFilters.addEventListener('input', () => {
    const city = donorFilters.querySelector('[name="city"]').value.trim().toLowerCase();
    const group = donorFilters.querySelector('[name="group"]').value.trim().toLowerCase();
    const availability = donorFilters.querySelector('[name="availability"]').value.trim().toLowerCase();

    donorCards.forEach((card) => {
      const cityMatch = !city || card.dataset.city.toLowerCase().includes(city);
      const groupMatch = !group || card.dataset.group.toLowerCase() === group;
      const availabilityMatch = !availability || card.dataset.availability.toLowerCase().includes(availability);
      card.classList.toggle('hidden', !(cityMatch && groupMatch && availabilityMatch));
    });
  });
}
