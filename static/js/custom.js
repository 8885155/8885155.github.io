document.addEventListener('DOMContentLoaded', function() {
const colorSwitch = document.querySelector('.color-switch');
const musicBtn = document.getElementById('musicToggleBtn');
const backgroundMusic = document.getElementById('backgroundMusic');
let isMusicPlaying = false;
 
function initModal(openBtnId, modalId) {
const openBtn = document.getElementById(openBtnId);
const modal = document.getElementById(modalId);
const closeBtn = modal.querySelector('.close-btn');
 
openBtn.addEventListener('click', function() {
modal.classList.add('show');
document.body.style.overflow = 'hidden';
colorSwitch.style.display = 'none';
});
 
closeBtn.addEventListener('click', function() {
modal.classList.remove('show');
document.body.style.overflow = '';
colorSwitch.style.display = 'flex';
});
 
modal.addEventListener('click', function(event) {
if (event.target === modal) {
modal.classList.remove('show');
document.body.style.overflow = '';
colorSwitch.style.display = 'flex';
}
});
 
document.addEventListener('keydown', function(event) {
if (event.key === 'Escape' && modal.classList.contains('show')) {
modal.classList.remove('show');
document.body.style.overflow = '';
colorSwitch.style.display = 'flex';
}
});
}
 
initModal('openModalBtn', 'myModal');
initModal('openBlogModalBtn', 'blogModal');
initModal('openMovieModalBtn', 'movieModal');
initModal('openMusicModalBtn', 'musicModal');
 
const colorBtns = document.querySelectorAll('.color-btn');
const savedColor = localStorage.getItem('selectedColor');
const defaultColor = savedColor || 'color1';
 
document.body.className = '';
document.body.classList.add(defaultColor);
 
colorBtns.forEach(btn => {
btn.addEventListener('click', function() {
const colorClass = this.getAttribute('data-color');
document.body.className = '';
document.body.classList.add(colorClass);
localStorage.setItem('selectedColor', colorClass);
});
});
 
if (musicBtn && backgroundMusic) {
musicBtn.addEventListener('click', function() {
if (isMusicPlaying) {
backgroundMusic.pause();
musicBtn.classList.remove('playing');
} else {
backgroundMusic.play();
musicBtn.classList.add('playing');
}
isMusicPlaying = !isMusicPlaying;
});
}
});