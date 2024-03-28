//const SELECT_LANG = document.getElementById('select-lang');
const SELECT_LANG = document.querySelector('#select-lang');

SELECT_LANG.addEventListener('change', () => {
    location.href = "/translate?lang="+SELECT_LANG.value;
});
