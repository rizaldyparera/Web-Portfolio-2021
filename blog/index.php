<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>🚀OnlyMARS Blog</title>
    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon">
    <meta name="description" content="I will share my writings about the world of programming. whether it's tips and tricks as well as learning materials.">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body id="body-pd">
  <div class="l-navbar" id="navbar">
    <nav class="nav">
        <div>
            <div class="nav__brand">
                <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                <a href="#" class="nav__logo">🚀OnlyMARS Blog</a>
            </div>
            <div class="nav__list">
                <a href="#" class="nav__link active">
                    <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                    <span class="nav__name">Dashboard</span>
                </a>
                <a href="../" class="nav__link">
                    <ion-icon name="person" class="nav__icon"></ion-icon>
                    <span class="nav__name">Portfolio</span>
                </a>

                <div  class="nav__link collapse">
                    <ion-icon name="list" class="nav__icon"></ion-icon>
                    <span class="nav__name">Category</span>

                    <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                    <ul class="collapse__menu">
                        <a href="#" class="collapse__sublink active" id="all">All</a>
                        <a href="#" class="collapse__sublink active" id="programming">Programming</a>
                        <a href="#" class="collapse__sublink active" id="tech">Tech</a>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
  <div class="home_content">
    <div class = "main-container">
          <div class = "posts-collect">
              <div class = "posts-main-container">
                  <!-- single post -->
                  <div class = "all programming">
                      <div class = "post-img">
                          <img src = "img/BG2.jpg" alt = "post">
                          <span class = "category-name">Programming</span>
                      </div>

                      <div class = "post-content">
                          <div class = "post-content-top">
                              <span><i class='bx bx-calendar'></i> 22 JUNI 2021 | Posted by Rizaldy Parera</span>
                          </div>
                          <h2>Apa Itu Pemograman</h2>
                          <p>Pemograman adalah cara untuk "Menginstruksikan komputer untuk melakukan berbagai tugas"....</p>
                      </div>
                      <button type = "button" class = "read-btn"><a href="../article/apa-itu-pemograman" target="_blank">Read All</a></button>
                  </div>
                  <!-- end of single post -->
                  <!-- single post -->
                  <div class = "all programming">
                      <div class = "post-img">
                          <img src = "img/BG.jpg" alt = "post">
                          <span class = "category-name">programming</span>
                      </div>

                      <div class = "post-content">
                          <div class = "post-content-top">
                              <span><i class='bx bx-calendar'></i> 25 JUNI 2021 | Posted by Rizaldy Parera</span>
                          </div>
                          <h2>Mengapa Pemograman Sangat Penting</h2>
                          <p>Banyak orang menganggap bahwa pemograman itu hanya mengenai penggunaan algoritma rumit....</p>
                      </div>
                      <button type = "button" class = "read-btn"><a href="../article/mengapa-pemograman-sangat-penting" target="_blank">Read All</a></button>
                  </div>
                  <!-- end of single post -->
                  <!-- single post -->
                  <div class = "all programming">
                      <div class = "post-img">
                          <img src = "img/BG3.jpg" alt = "post">
                          <span class = "category-name">programming</span>
                      </div>

                      <div class = "post-content">
                          <div class = "post-content-top">
                            <span><i class='bx bx-calendar'></i> 28 JUNI 2021 | Posted by Rizaldy Parera</span>
                          </div>
                          <h2>Bahasa Pemograman Untuk Pemula</h2>
                          <p>Jika kamu saat ini sedang belajar untuk menjadi seorang programmer, tentu kamu akan....</p>
                      </div>
                      <button type = "button" class = "read-btn"><a href="../article/bahasa-pemograman-untuk-pemula" target="_blank">Read All</a></button>
                  </div>
                  <!-- end of single post -->
                  <!-- single post -->
                  <div class = "all programming">
                      <div class = "post-img">
                          <img src = "img/BG4.jpg" alt = "post">
                          <span class = "category-name">programming</span>
                      </div>

                      <div class = "post-content">
                          <div class = "post-content-top">
                            <span><i class='bx bx-calendar'></i> 30 JUNI 2021 | Posted by Rizaldy Parera</span>
                          </div>
                          <h2>Mengenal Arti Dari Web Developer</h2>
                          <p>Web Developer adalah seorang programmer yang membuat program (website) untuk world wide web.....</p>
                      </div>
                      <button type = "button" class = "read-btn"><a href="../article/mengenal-arti-dari-web-developer" target="_blank">Read All</a></button>
                  </div>
                  <!-- end of single post -->
              </div>
          </div>
      </div>
  </div>

<!-- ===== IONICONS ===== -->
<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
<script>
/*===== EXPANDER MENU  =====*/ 
const showMenu = (toggleId, navbarId, bodyId)=>{
  const toggle = document.getElementById(toggleId),
  navbar = document.getElementById(navbarId),
  bodypadding = document.getElementById(bodyId)

  if(toggle && navbar){
    toggle.addEventListener('click', ()=>{
      navbar.classList.toggle('expander')

      bodypadding.classList.toggle('body-pd')
    })
  }
}
showMenu('nav-toggle','navbar','body-pd')

/*===== LINK ACTIVE  =====*/ 
const linkColor = document.querySelectorAll('.nav__link')
function colorLink(){
  linkColor.forEach(l=> l.classList.remove('active'))
  this.classList.add('active')
}
linkColor.forEach(l=> l.addEventListener('click', colorLink))


/*===== COLLAPSE MENU  =====*/ 
const linkCollapse = document.getElementsByClassName('collapse__link')
var i

for(i=0;i<linkCollapse.length;i++){
  linkCollapse[i].addEventListener('click', function(){
    const collapseMenu = this.nextElementSibling
    collapseMenu.classList.toggle('showCollapse')

    const rotate = collapseMenu.previousElementSibling
    rotate.classList.toggle('rotate')
  })
}


// Filter Category
const categoryTitle = document.querySelectorAll('.collapse__sublink');
const allCategoryPosts = document.querySelectorAll('.all');

for(let i = 0; i < categoryTitle.length; i++){
    categoryTitle[i].addEventListener('click', filterPosts.bind(this, categoryTitle[i]));
}

function filterPosts(item){
    changeActivePosition(item);
    for(let i = 0; i < allCategoryPosts.length; i++){
        if(allCategoryPosts[i].classList.contains(item.attributes.id.value)){
            allCategoryPosts[i].style.display = "block";
        } else {
            allCategoryPosts[i].style.display = "none";
        }
    }
}

function changeActivePosition(activeItem){
    for(let i = 0; i < categoryTitle.length; i++){
        categoryTitle[i].classList.remove('active');
    }
    activeItem.classList.add('active');
};
</script>

</body>
</html>
