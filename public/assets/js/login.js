"use strict";
const as = document.querySelectorAll('.tab a');
const contentElements = document.querySelector('.content-wrapper');
const signUpForm = document.querySelector('form[action="/user/create"]');
as.forEach((a) => {
    a.addEventListener('click', (e) => {
        e.preventDefault();
        changeContent(a, 'Login');
    });
});
const verifyPassword = (isLogin = false) => {
    var _a, _b, _c;
    const pass = document.getElementById('password-label-sign-up').value;
    const confirmPass = document.getElementById('confirm-password-label-sign-up').value;
    let regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()])(?!.*userName)(?!.*(.)\1{2,}).{8,}$/;
    if (!isLogin) {
        if (pass !== confirmPass ||
            pass === '' ||
            confirmPass === '' ||
            !regex.test(pass)) {
            let warning = document.createElement('h3');
            let passTip = document.createElement('h4');
            warning.innerText =
                'The passwords must be equal, contain upper and lower case letters, numbers and special characters.';
            warning.setAttribute('style', 'color: red');
            passTip.innerText = 'Something like: P@ssw0rd!';
            passTip.setAttribute('id', '2');
            if (((_a = signUpForm === null || signUpForm === void 0 ? void 0 : signUpForm.lastElementChild) === null || _a === void 0 ? void 0 : _a.getAttribute('id')) !== '2') {
                (_b = signUpForm === null || signUpForm === void 0 ? void 0 : signUpForm.lastElementChild) === null || _b === void 0 ? void 0 : _b.after(warning);
                (_c = signUpForm === null || signUpForm === void 0 ? void 0 : signUpForm.lastElementChild) === null || _c === void 0 ? void 0 : _c.after(passTip);
            }
            return false;
        }
    }
    return true;
};
const changeContent = (element, textContent) => {
    var _a, _b, _c, _d, _e, _f, _g, _h, _j, _k;
    if (element.textContent === textContent) {
        (_a = element.parentElement) === null || _a === void 0 ? void 0 : _a.classList.add('active');
        (_c = (_b = element.parentElement) === null || _b === void 0 ? void 0 : _b.nextElementSibling) === null || _c === void 0 ? void 0 : _c.classList.remove('active');
        (_d = contentElements === null || contentElements === void 0 ? void 0 : contentElements.firstElementChild) === null || _d === void 0 ? void 0 : _d.classList.add('active');
        (_e = contentElements === null || contentElements === void 0 ? void 0 : contentElements.lastElementChild) === null || _e === void 0 ? void 0 : _e.classList.remove('active');
        return;
    }
    (_f = element.parentElement) === null || _f === void 0 ? void 0 : _f.classList.add('active');
    (_h = (_g = element.parentElement) === null || _g === void 0 ? void 0 : _g.previousElementSibling) === null || _h === void 0 ? void 0 : _h.classList.remove('active');
    (_j = contentElements === null || contentElements === void 0 ? void 0 : contentElements.lastElementChild) === null || _j === void 0 ? void 0 : _j.classList.add('active');
    (_k = contentElements === null || contentElements === void 0 ? void 0 : contentElements.firstElementChild) === null || _k === void 0 ? void 0 : _k.classList.remove('active');
};
