let text = document.getElementById('text');
let cloudLeft = document.getElementById('cloud-left');
let cloudRight = document.getElementById('cloud-right');


window.addEventListener('scroll', () => {
    let value = window.scrollY;

    text.style.marginTop = value * 2.5 + 'px';
    cloudLeft.style.left = value * -1.5 + 'px';
    cloudRight.style.left = value * 1.5 + 'px';

})