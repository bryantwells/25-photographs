const metaElements = document.querySelectorAll('.Meta');

metaElements.forEach((metaElement) => {
    const metaHeader = metaElement.querySelector('.Meta-header');
    metaHeader.addEventListener('click', () => {
        metaElement.classList.toggle('is-expanded');
    });
});

const submissions = [...document.querySelectorAll('.Submission')];

submissions.forEach((submission, i) => {
    submission.addEventListener('click', () => {
        if (submission.classList.contains('is-active')) {
            submission.classList.remove('is-active');
        } else {
            submissions.forEach((sibling) => { sibling.classList.remove('is-active') });
            submission.classList.add('is-active');
        }
    })
})