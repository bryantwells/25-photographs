const expandableElements = document.querySelectorAll('.u-expandable');
const prompts = document.querySelectorAll('.Prompt');
const promptContainers = document.querySelectorAll('.Prompt-container');

expandableElements.forEach((expandableElement) => {
    const expandableHeader = expandableElement.querySelector('.u-expandableHeader');
    // expandableHeader.addEventListener('mouseleave', () => {
    //     prompts.forEach((prompt) => {
    //         prompt.classList.remove('is-active');
    //     });
    // });
    // expandableHeader.addEventListener('mouseenter', () => {
    //     prompts.forEach((prompt) => {
    //         prompt.classList.add('is-active');
    //     });
    // });
    expandableHeader.addEventListener('click', () => {
        expandableElement.classList.toggle('is-expanded');
    });
});

promptContainers.forEach((promptContainer) => {
    promptContainer.addEventListener('mouseleave', () => {
        prompts.forEach((prompt) => {
            prompt.classList.remove('is-active');
        });
    });
    promptContainer.addEventListener('mouseenter', () => {
        prompts.forEach((prompt) => {
            prompt.classList.add('is-active');
        });
    });
})