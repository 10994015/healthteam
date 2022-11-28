/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/input.js ***!
  \*******************************/
var student = document.getElementById('student');
var finish = document.getElementById('finish');
var name = document.getElementById('name');
var study = document.getElementsByClassName('study');
var studyChk = false;
student.addEventListener("keyup", function () {
  chkFn();
});
name.addEventListener("keyup", function () {
  chkFn();
});
for (var i = 0; i < study.length; i++) {
  study[i].addEventListener('change', chkStudy);
}
function chkStudy() {
  studyChk = false;
  for (var _i = 0; _i < study.length; _i++) {
    if (study[_i].checked) {
      studyChk = true;
      console.log(true);
    }
  }
  chkFn();
}
function chkFn() {
  if (student.value !== "" && name.value !== "" && studyChk) {
    finish.disabled = false;
    finish.style.background = "#BF3434";
  } else {
    finish.disabled = true;
    finish.style.background = "#ccc";
  }
}
/******/ })()
;