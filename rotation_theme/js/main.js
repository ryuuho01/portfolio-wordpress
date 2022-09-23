// ハンバーガーメニュー
const target = document.getElementById("menu");
const modal = document.getElementById('modal');
const nav = document.getElementById("nav");
target.addEventListener('click', () => {
  target.classList.toggle('open');
  nav.classList.toggle('in');
  modal.classList.toggle('modal');
});

// モーダルウィンドウ
window.addEventListener('click', (e) => {
  if (!e.target.closest('.nav') && !e.target.closest('.menu')) {
    target.classList.remove('open');
    nav.classList.remove('in');
    modal.classList.remove('modal');
  }
});

// 動きのきっかけとなるアニメーションの名前を定義
function fadeTrigger(){
  $('.fadeTrigger').each(function () {
    var elemPos = $(this).offset().top+230;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
      $(this).addClass('fadeUp');
      // 画面内に入ったらfadeUpというクラス名を追記
      // $(this).addClass('fadeUp-late');
      // $(this).addClass('fadeDown');
      // $(this).addClass('displayLine');
    }else{
      // $(this).removeClass('fadeUp');
      // 画面外に出たらfadeUpというクラス名を外す
      // $(this).removeClass('fadeUp-late');
      // $(this).removeClass('fadeDown');
      // $(this).removeClass('displayLine');
    }
  });
}
// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function (){
  fadeTrigger();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面をスクロールをしたら動かしたい場合の記述
// // 画面が読み込まれたらすぐに動かしたい場合の記述
// $(window).on('load', function(){
// fadeAnime();/* アニメーション用の関数を呼ぶ*/
// });// ここまで画面が読み込まれたらすぐに動かしたい場合の記述

function scrollTopOpacity(){
  $('.scroll-top').each(function () {
    var elemPos = $('.article-nav').offset().top+window.parent.screen.height+60;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
      $(this).addClass('scrollTopOpacity');
    }else{
      $(this).removeClass('scrollTopOpacity');
    }
  });
}
$(window).scroll(function (){
  scrollTopOpacity();
});



function underLine(){
  $('.underLine').each(function () {
    var elemPos = $(this).offset().top+230;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
      $(this).addClass('under-line');
    }else{
      // $(this).removeClass('under-line');
    }
  });
}
$(window).scroll(function (){
  underLine();
});

function featureInit(){
  $('.featureInit').each(function () {
    var elemPos = $(this).offset().top+150;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
      $(this).addClass('feature');
    }else{
      // $(this).removeClass('feature');
    }
  });
}
$(window).scroll(function (){
  featureInit();
});

function circleColumn1(){
  $('.circleColumn1').each(function () {
    var elemPos = $(this).offset().top+150;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
      $(this).addClass('circle_column1');
    } else {
      // $(this).addClass('add-item');
      // $(this).removeClass('circle_column1');
    }
  });
}
$(window).scroll(function (){
  circleColumn1();
});

function circleColumn2(){
  $('.circleColumn2').each(function () {
    var elemPos = $(this).offset().top+150;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
      $(this).addClass('circle_column2');
    }else{
      // $(this).removeClass('circle_column2');
    }
  });
}
$(window).scroll(function (){
  circleColumn2();
});

function circleColumn3(){
  $('.circleColumn3').each(function () {
    var elemPos = $(this).offset().top+150;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
      $(this).addClass('circle_column3');
    }else{
      // $(this).removeClass('circle_column1');
    }
  });
}
$(window).scroll(function (){
  circleColumn3();
});

function scrollTop(elem) {
  const target = document.getElementById(elem);
  target.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  });
}
scrollTop('button');


function fadeTrigger1(){
  $('.fadeTrigger1').each(function () {
    var elemPos = $(this).offset().top+230;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
      $(this).addClass('fadeUp1');
    }else{
      // $(this).removeClass('fadeUp');
    }
  });
}
$(window).scroll(function (){
  fadeTrigger1();
});
function fadeTrigger2(){
  $('.fadeTrigger2').each(function () {
    var elemPos = $(this).offset().top+230;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
      $(this).addClass('fadeUp2');
    }else{
      // $(this).removeClass('fadeUp');
    }
  });
}
$(window).scroll(function (){
  fadeTrigger2();
});
function fadeTrigger3(){
  $('.fadeTrigger3').each(function () {
    var elemPos = $(this).offset().top+230;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
      $(this).addClass('fadeUp3');
    }else{
      // $(this).removeClass('fadeUp');
    }
  });
}
$(window).scroll(function (){
  fadeTrigger3();
});

function lanceTrigger1(){
  $('.lanceTrigger1').each(function () {
    var elemPos = $(this).offset().top+230;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
      $(this).addClass('fadelance1');
    }else{
      // $(this).removeClass('fadeUp');
    }
  });
}
$(window).scroll(function (){
  lanceTrigger1();
});

function lanceTrigger2(){
  $('.lanceTrigger2').each(function () {
    var elemPos = $(this).offset().top+230;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
      $(this).addClass('fadelance2');
    }else{
      // $(this).removeClass('fadeUp');
    }
  });
}
$(window).scroll(function (){
  lanceTrigger2();
});

function lanceTrigger3(){
  $('.lanceTrigger3').each(function () {
    var elemPos = $(this).offset().top+230;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
      $(this).addClass('fadelance3');
    }else{
      // $(this).removeClass('fadeUp');
    }
  });
}
$(window).scroll(function (){
  lanceTrigger3();
});


function lanceTrigger12(){
  $('.lanceTrigger1-2').each(function () {
    var elemPos = $(this).offset().top+230;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
      $(this).addClass('fadelance1-2');
    }else{
      // $(this).removeClass('fadeUp');
    }
  });
}
$(window).scroll(function (){
  lanceTrigger12();
});

function lanceTrigger22(){
  $('.lanceTrigger2-2').each(function () {
    var elemPos = $(this).offset().top+230;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
      $(this).addClass('fadelance2-2');
    }else{
      // $(this).removeClass('fadeUp');
    }
  });
}
$(window).scroll(function (){
  lanceTrigger22();
});

function lanceTrigger32(){
  $('.lanceTrigger3-2').each(function () {
    var elemPos = $(this).offset().top+230;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
      $(this).addClass('fadelance3-2');
    }else{
      // $(this).removeClass('fadeUp');
    }
  });
}
$(window).scroll(function (){
  lanceTrigger32();
});


// タブ テーブル行
const tabs = document.getElementsByClassName('tab-menu__item');
const rows = document.getElementsByClassName('table-row');
for (let i = 0; i < tabs.length; i++) {
  tabs[i].addEventListener('click', tabSwitch);
}
function tabSwitch() {
  document.getElementsByClassName('active')[0].classList.remove('active');
  document.getElementsByClassName('active-row')[0].classList.remove('active-row');

  this.classList.add('active');
  var check_number = document.getElementsByClassName('active').item(0).textContent;
  if (check_number.includes("1")) {
    rows[0].classList.add('active-row');
  } else if (check_number.includes("2")) {
    rows[1].classList.add('active-row');
  } else if (check_number.includes("3")) {
    rows[2].classList.add('active-row');
  } else if (check_number.includes("4")) {
    rows[3].classList.add('active-row');
  } else if (check_number.includes("5")) {
    rows[4].classList.add('active-row');
  } else if (check_number.includes("6")) {
    rows[5].classList.add('active-row');
  } else if (check_number.includes("7")) {
    rows[6].classList.add('active-row');
  } else if (check_number.includes("8")) {
    rows[7].classList.add('active-row');
  }

  document.getElementsByClassName('show')[0].classList.remove('show');
  const arrayTabs = Array.prototype.slice.call(tabs);
  const index = arrayTabs.indexOf(this);
  document.getElementsByClassName('tab-content__item')[index].classList.add('show');
};

const openclose1 = document.getElementById("q-openclose1");
const openclose2 = document.getElementById("q-openclose2");
const openclose3 = document.getElementById("q-openclose3");
const openclose4 = document.getElementById("q-openclose4");
const openclose5 = document.getElementById("q-openclose5");
const answer1 = document.getElementById("answer1");
const answer2 = document.getElementById("answer2");
const answer3 = document.getElementById("answer3");
const answer4 = document.getElementById("answer4");
const answer5 = document.getElementById("answer5");
openclose1.addEventListener('click', () => {
  openclose1.classList.toggle('q-open');
  answer1.classList.toggle('q-in');
});
openclose2.addEventListener('click', () => {
  openclose2.classList.toggle('q-open');
  answer2.classList.toggle('q-in');
});
openclose3.addEventListener('click', () => {
  openclose3.classList.toggle('q-open');
  answer3.classList.toggle('q-in');
});
openclose4.addEventListener('click', () => {
  openclose4.classList.toggle('q-open');
  answer4.classList.toggle('q-in');
});
openclose5.addEventListener('click', () => {
  openclose5.classList.toggle('q-open');
  answer5.classList.toggle('q-in');
});


// 各ページへのリンク挙動
// about
var aboutEl = document.getElementById('container-top');
var aboutRe = aboutEl.getBoundingClientRect();
var aboutPo = aboutRe.top-30;
function about() {
  target.classList.remove('open');
  nav.classList.remove('in');
  modal.classList.remove('modal');
  if (
      location.pathname.indexOf('about') != -1 ||
      location.pathname.indexOf('course') != -1 ||
      location.pathname.indexOf('contact') != -1 ||
      location.pathname.indexOf('policy') != -1 ||
      location.pathname.indexOf('payment') != -1 ||
      location.pathname.indexOf('law') != -1
    ) {
        var url = location.href.replace("course", "about");
        url = url.replace("contact", "about");
        url = url.replace("policy", "about");
        url = url.replace("payment", "about");
        url = url.replace("law", "about");
        window.location.href = url;
      } else {
        scrollTo({
          top: aboutPo,
          behavior: "smooth"
        });
      }
}

// service
var serviceEl = document.getElementById('service');
var serviceRe = serviceEl.getBoundingClientRect();
var servicePo = serviceRe.top-50;
function service() {
  target.classList.remove('open');
  nav.classList.remove('in');
  modal.classList.remove('modal');
  if (
      location.pathname.indexOf('about') != -1 ||
      location.pathname.indexOf('course') != -1 ||
      location.pathname.indexOf('contact') != -1 ||
      location.pathname.indexOf('policy') != -1 ||
      location.pathname.indexOf('payment') != -1 ||
      location.pathname.indexOf('law') != -1
    ) {
        var url = location.href.replace("/about", "");
        url = url.replace("/course", "");
        url = url.replace("/contact", "");
        url = url.replace("/policy", "");
        url = url.replace("/payment", "");
        url = url.replace("/law", "");
        window.location.href = url+'#service';
      } else {
        scrollTo({
          top: servicePo,
          behavior: "smooth"
        });
      }
}
$(window).ready(function () {
  if (window.location.hash === '#service') {
    scrollTo({
      top: servicePo,
      behavior: "smooth"
    });
  } else { }
});

// course
var courseEl = document.getElementById('course');
var courseRe = courseEl.getBoundingClientRect();
var coursePo = courseRe.top-50;
function course() {
  target.classList.remove('open');
  nav.classList.remove('in');
  modal.classList.remove('modal');
  if (
      location.pathname.indexOf('about') != -1 ||
      location.pathname.indexOf('course') != -1 ||
      location.pathname.indexOf('contact') != -1 ||
      location.pathname.indexOf('policy') != -1 ||
      location.pathname.indexOf('payment') != -1 ||
      location.pathname.indexOf('law') != -1
    ) {
        var url = location.href.replace("about", "course");
        url = url.replace("contact", "course");
        url = url.replace("policy", "course");
        url = url.replace("payment", "course");
        url = url.replace("law", "course");
        window.location.href = url;
      } else {
        scrollTo({
          top: coursePo,
          behavior: "smooth"
        });
      }
}

// contact
var contactEl = document.getElementById('contact');
var contactRe = contactEl.getBoundingClientRect();
var contactPo = contactRe.top-50;
function contact() {
  target.classList.remove('open');
  nav.classList.remove('in');
  modal.classList.remove('modal');
  if (
      location.pathname.indexOf('about') != -1 ||
      location.pathname.indexOf('course') != -1 ||
      location.pathname.indexOf('contact') != -1 ||
      location.pathname.indexOf('policy') != -1 ||
      location.pathname.indexOf('payment') != -1 ||
      location.pathname.indexOf('law') != -1
    ) {
        var url = location.href.replace("about", "contact");
        url = url.replace("course", "contact");
        url = url.replace("policy", "contact");
        url = url.replace("payment", "contact");
        url = url.replace("law", "contact");
        window.location.href = url;
      } else {
        scrollTo({
          top: contactPo,
          behavior: "smooth"
        });
      }
}

// 蛍
particlesJS("particles-js",{
"particles":{
"number":{
"value":50,//この数値を変更するとホタルの数が増減できる
"density":{
"enable":true,
"value_area":1602.3971861905397
}
},
"color":{
"value":"#ff3535"//色
    },
"shape":{
"type":"circle",//形状はcircleを指定
"stroke":{
"width":0,
}
},
"opacity":{
"value":1,
"random":true,//透過をランダムに
"anim":{
"enable":false,
"speed":1.10115236356258881,
"opacity_min":0,
"sync":false
}
},
"size":{
"value":4.005992965476349,
"random":true,//サイズをランダムに
"anim":{
"enable":true,
"speed":24.345709068776642,
"size_min":0.1,
"sync":false
}
},
"line_linked":{
"enable":false,
},
"move":{
"enable":true,
"speed":6,//この数値を小さくするとゆっくりな動きになる
"direction":"none",//方向指定なし
"random":true,//動きはランダムに
"straight":false,//動きをとどめない
"out_mode":"out",//画面の外に出るように描写
"bounce":false,//跳ね返りなし
"attract":{
"enable":false,
"rotateX":600,
"rotateY":600
}
}
},
"interactivity":{
"detect_on":"canvas",
"events":{
"onhover":{
"enable":false
},
"onclick":{
"enable":false
},
"resize":true
}
},
"retina_detect":true
});

particlesJS("particlesc-js",{
"particles":{
"number":{
"value":100,//この数値を変更するとホタルの数が増減できる
"density":{
"enable":true,
"value_area":1602.3971861905397
}
},
"color":{
"value":"#ff3535"//色
    },
"shape":{
"type":"circle",//形状はcircleを指定
"stroke":{
"width":0,
}
},
"opacity":{
"value":1,
"random":true,//透過をランダムに
"anim":{
"enable":false,
"speed":1.10115236356258881,
"opacity_min":0,
"sync":false
}
},
"size":{
"value":4.005992965476349,
"random":true,//サイズをランダムに
"anim":{
"enable":true,
"speed":24.345709068776642,
"size_min":0.1,
"sync":false
}
},
"line_linked":{
"enable":false,
},
"move":{
"enable":true,
"speed":6,//この数値を小さくするとゆっくりな動きになる
"direction":"none",//方向指定なし
"random":true,//動きはランダムに
"straight":false,//動きをとどめない
"out_mode":"out",//画面の外に出るように描写
"bounce":false,//跳ね返りなし
"attract":{
"enable":false,
"rotateX":600,
"rotateY":600
}
}
},
"interactivity":{
"detect_on":"canvas",
"events":{
"onhover":{
"enable":false
},
"onclick":{
"enable":false
},
"resize":true
}
},
"retina_detect":true
});
