const metaElements = document.querySelectorAll('.Meta');

metaElements.forEach((metaElement) => {
    const metaHeader = metaElement.querySelector('.Meta-header');
    metaHeader.addEventListener('click', () => {
        metaElement.classList.toggle('is-expanded');
    });
});