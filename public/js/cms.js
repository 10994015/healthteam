/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************!*\
  !*** ./resources/js/cms.js ***!
  \*****************************/
var addSemple = document.getElementById('addSemple');
window.addEventListener('sampleAlert', function (e) {
  Swal.fire({
    icon: 'error',
    title: '樣本人數不足！',
    text: '',
    footer: ''
  });
});
window.addEventListener('zeroAlert', function (e) {
  Swal.fire({
    icon: 'error',
    title: '請選擇抽獎人數！',
    text: '',
    footer: ''
  });
});
window.addEventListener('totalAlert', function (e) {
  Swal.fire({
    icon: 'error',
    title: '總人數不足！',
    text: '',
    footer: ''
  });
});
window.addEventListener('addSampleSuccess', function (e) {
  Swal.fire({
    icon: 'success',
    title: '加入成功！',
    text: '',
    footer: ''
  });
  addSemple.style.background = "#aaa";
  addSemple.style.color = "#fff";
  addSemple.style.outline = "#aaa";
  addSemple.style.border = "#aaa 1px solid";
  addSemple.innerHTML = "重新加入";
});
/******/ })()
;