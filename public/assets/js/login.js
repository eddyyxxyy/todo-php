const as = document.querySelectorAll('.tab a');
const contentElements = document.querySelector('.content-wrapper');

as.forEach((a) => {
    a.addEventListener('click', (e) => {
        e.preventDefault();

        a.parentElement.classList.add('active');
        if (a.textContent == 'Sign Up') {
            a.parentElement.classList.add('active');
            a.parentElement.nextElementSibling.classList.remove('active');
            contentElements.firstElementChild.classList.add('active');
            contentElements.lastElementChild.classList.remove('active');
        } else {
            a.parentElement.classList.add('active');
            a.parentElement.previousElementSibling.classList.remove('active');
            contentElements.lastElementChild.classList.add('active');
            contentElements.firstElementChild.classList.remove('active');
        }
    });
});
