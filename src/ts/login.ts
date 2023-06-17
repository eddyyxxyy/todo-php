const as: NodeListOf<Element> = document.querySelectorAll('.tab a');
const contentElements: Element | null =
    document.querySelector('.content-wrapper');
const signUpForm: Element | null = document.querySelector(
    'form[action="/user/create"]',
);

as.forEach((a) => {
    a.addEventListener('click', (e) => {
        e.preventDefault();
        changeContent(a, 'Login');
    });
});

const verifyPassword = (isLogin: boolean = false) => {
    const pass = (
        document.getElementById('password-label-sign-up') as HTMLInputElement
    ).value;
    const confirmPass = (
        document.getElementById(
            'confirm-password-label-sign-up',
        ) as HTMLInputElement
    ).value;

    let regex =
        /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()])(?!.*userName)(?!.*(.)\1{2,}).{8,}$/;

    if (!isLogin) {
        if (
            pass !== confirmPass ||
            pass === '' ||
            confirmPass === '' ||
            !regex.test(pass)
        ) {
            let warning = document.createElement('h3');
            let passTip = document.createElement('h4');

            warning.innerText =
                'The passwords must be equal, contain upper and lower case letters, numbers and special characters.';
            warning.setAttribute('style', 'color: red');
            passTip.innerText = 'Something like: P@ssw0rd!';
            passTip.setAttribute('id', '2');

            if (signUpForm?.lastElementChild?.getAttribute('id') !== '2') {
                signUpForm?.lastElementChild?.after(warning);
                signUpForm?.lastElementChild?.after(passTip);
            }
            return false;
        }
    }
    return true;
};

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
