/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************!*\
  !*** ./resources/js/cms.js ***!
  \*****************************/
var sample = document.getElementsByClassName('sample');
var addSemple = document.getElementById('addSemple');
var lotteryBtn = document.getElementById('lotteryBtn');
var sampleArr = [];
var lotteryNum = 0;
var winner = [];
var lotterySelect = document.getElementById('lotterySelect');
var randomNum = 0;
var winnerHtml = '';
var winnerList = document.getElementById('winnerList');
var score5View = document.getElementById('score5View');
var score4View = document.getElementById('score4View');
var score3View = document.getElementById('score3View');
var score2View = document.getElementById('score2View');
var score1View = document.getElementById('score1View');
var scoreModalback = document.getElementsByClassName('scoreModalback');
addSemple.addEventListener('click', function () {
  addSemple.classList.remove('btn-success');
  addSemple.classList.add('btn-secondary');
  addSemple.innerText = '重新加入';
  for (var i = 0; i < sample.length; i++) {
    sampleArr.push(sample[i].innerText);
  }
});
lotterySelect.addEventListener('change', function () {
  lotteryNum = lotterySelect.value;
});
lotteryBtn.addEventListener('click', function () {
  if (sampleArr.length == 0) return alert('人數不足，請加入樣本!');
  if (sampleArr.length < lotterySelect.value) return alert('人數不足!');
  for (var i = 1; i <= lotteryNum; i++) {
    randomNum = getRandom(Number(sampleArr.length));
    winner.push(sampleArr[randomNum]);
    winnerHtml += "<div class=\"item\"><b>".concat(sampleArr[randomNum], "</b></div>");
    sampleArr.splice(randomNum, 1);
  }
  winnerList.innerHTML = winnerHtml;
});
function getRandom(x) {
  return Math.floor(Math.random() * x);
}
;
score5View.addEventListener('click', viewScoreModalFn);
score4View.addEventListener('click', viewScoreModalFn);
score3View.addEventListener('click', viewScoreModalFn);
score2View.addEventListener('click', viewScoreModalFn);
score1View.addEventListener('click', viewScoreModalFn);
function viewScoreModalFn(e) {
  var num = e.target.id.split('core')[1].split('V')[0];
  console.log(num);
  document.getElementById("score".concat(num)).style.display = "flex";
}
for (var i = 0; i < scoreModalback.length; i++) {
  scoreModalback[i].addEventListener('click', closeScoreModal);
}
function closeScoreModal(e) {
  e.target.parentNode.style.display = "none";
}
/******/ })()
;