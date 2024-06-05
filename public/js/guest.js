
function getRandomNumber(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function delayedFunction(){
    const popup = document.getElementById('popup');
    popup.classList.remove('scale-0');
    popup.classList.add('scale-100');
}
window.onload = function() {
    setTimeout(delayedFunction, getRandomNumber(10000, 15000));
};

function closeNotif(){
  const closeNotif = document.getElementById('popup');
  closeNotif.classList.add('hidden');
}