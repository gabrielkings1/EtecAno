// gradeCurricular.js — show quick description when a subject is clicked
document.addEventListener('DOMContentLoaded', () => {
  const modal = document.getElementById('subject-modal');
  const modalTitle = document.getElementById('subject-modal-title');
  const modalBody = document.getElementById('subject-modal-body');
  const closeBtn = document.getElementById('subject-modal-close');

  function openModal(title, content){
    modalTitle.textContent = title;
    modalBody.textContent = content;
    modal.setAttribute('aria-hidden', 'false');
    modal.classList.add('active');
  }

  function closeModal(){
    modal.setAttribute('aria-hidden', 'true');
    modal.classList.remove('active');
  }

  // attach click listeners to all subject list items
  console.log('gradeCurricular: attaching handlers...');
  document.querySelectorAll('.grade-detail-section ul li[data-desc]').forEach(li => {
    li.addEventListener('click', (e) => {
      // subject text (before dash) as title
      const text = li.textContent || li.innerText;
      const title = text.split('-')[0].trim();
      const desc = li.getAttribute('data-desc') || '';
      console.log('gradeCurricular: clicked', title, desc);
      if (modal && modalTitle && modalBody) {
        openModal(title, desc);
      } else {
        // fallback if modal not available
        alert(title + '\n\n' + desc);
      }
    });
  });

  // close handlers
  closeBtn && closeBtn.addEventListener('click', closeModal);
  modal && modal.addEventListener('click', (e) => {
    if (e.target === modal) closeModal();
  });

  // Esc to close
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modal.classList.contains('active')) closeModal();
  });
});
