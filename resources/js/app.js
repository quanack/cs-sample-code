import './bootstrap';
import '../css/app.css';


const form = document.querySelector('#bookmark_form');

const title = document.querySelector('#title');
const url = document.querySelector('#url');

form.addEventListener('submit', (e) => {
    e.preventDefault();

    if (title.value === '' || url.value === '') {
        return alert('Please fill in all fields');
    }

    // check if url is valid
    if (!validateUrl(url.value)) {
        return alert('Please enter a valid url');
    }

    form.submit();
});

function validateUrl(url) {
    const pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
        '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // domain name
        '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
        '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
        '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
        '(\\#[-a-z\\d_]*)?$','i'); // fragment locator
    return !!pattern.test(url);
}
