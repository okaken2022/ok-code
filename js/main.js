'use strict' ;
{


// ------------------------------------------------
// swiper.js
// ------------------------------------------------
  const swiper = new Swiper(".swiper", {
    // ページネーションが必要なら追加
    pagination: {
      el: ".swiper-pagination"
    },
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "1",
    breakpoints: {
      // スライドの表示枚数：600px以上の場合
      767: {
        slidesPerView: 2,
      }
    },
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true
    },
  
    // ナビボタンが必要なら追加
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    }
  });



// ------------------------------------------------
// hamburger-menu
// ------------------------------------------------
  const icon = document.getElementById('hamburger-icon');
  const menu = document.getElementById('hamburger__mask');

  icon.addEventListener('click', ()=> {
    menu.classList.toggle('is-active');
    icon.classList.toggle('is-active');
  });

  menu.addEventListener('click', ()=> {
    menu.classList.toggle('is-active');
    icon.classList.toggle('is-active');
  });



// ------------------------------------------------
// fade-in animation
// ------------------------------------------------
  let fadeInTarget = document.querySelectorAll('.fade-in');
  window.addEventListener('scroll', () => {
    for (let i = 0; i < fadeInTarget.length; i++){
      const rect = fadeInTarget[i].getBoundingClientRect().top;
      const scroll = window.pageYOffset || document.documentElement.scrollTop;
      const offset = rect + scroll;
      const windowHeight = window.innerHeight; // 現在のブラウザの高さ
      if (scroll > offset - windowHeight + 150) {
        fadeInTarget[i].classList.add('scroll-in');
      }
    }
  });

  

// ------------------------------------------------
// zoom animation
// ------------------------------------------------
  let fadeInTarget2 = document.querySelectorAll('.zoom');
  window.addEventListener('scroll', () => {
    for (let i = 0; i < fadeInTarget2.length; i++){
      const rect = fadeInTarget2[i].getBoundingClientRect().top;
      const scroll = window.pageYOffset || document.documentElement.scrollTop;
      const offset = rect + scroll;
      const windowHeight = window.innerHeight; // 現在のブラウザの高さ
      if (scroll > offset - windowHeight + 150) {
        fadeInTarget2[i].classList.add('zoom-in');
      }
    }
  });



// ------------------------------------------------
// smooth scroll
// ------------------------------------------------
  const smoothScrollTrigger = document.querySelectorAll('a[href^="#"]');

  for (let i = 0; i < smoothScrollTrigger.length; i++) {
      smoothScrollTrigger[i].addEventListener('click', (e) => {
          
          // 3. ターゲットの位置を取得
          e.preventDefault();
          let href = smoothScrollTrigger[i].getAttribute('href'); // 各a要素のリンク先を取得
          let targetElement = document.getElementById(href.replace('#', '')); // リンク先の要素（コンテンツ）を取得
          
          const rect = targetElement.getBoundingClientRect().top; // ブラウザからの高さを取得
          const offset = window.pageYOffset; // 現在のスクロール量を取得
          const gap = 60; // 固定ヘッダー分の高さ
          const target = rect + offset - gap; //最終的な位置を割り出す

          // 4. スムースにスクロール
          window.scrollTo({
              top: target,
              behavior: 'smooth',
          });
      });
  }

}
