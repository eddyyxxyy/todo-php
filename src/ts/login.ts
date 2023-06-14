const as: NodeListOf<Element> = document.querySelectorAll('.tab a');
const contentElements: Element | null =
    document.querySelector('.content-wrapper');

as.forEach((a) => {
    a.addEventListener('click', (e) => {
        e.preventDefault();

        changeContent(a, 'Sign Up');
    });
});

const changeContent = (element: Element, textContent: string): void => {
    if (element.textContent === textContent) {
        element.parentElement?.classList.add('active');
        element.parentElement?.nextElementSibling?.classList.remove('active');
        contentElements?.firstElementChild?.classList.add('active');
        contentElements?.lastElementChild?.classList.remove('active');
        return;
    }
    element.parentElement?.classList.add('active');
    element.parentElement?.previousElementSibling?.classList.remove('active');
    contentElements?.lastElementChild?.classList.add('active');
    contentElements?.firstElementChild?.classList.remove('active');
};
