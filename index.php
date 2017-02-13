<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="template.css">
    <!-- <link rel="stylesheet" href="http://localhost/bootstrap/css/bootstrap.min.css"> -->
    <title>Document</title>

</head>
<body>
    <div class="container">
        <header>
            Project Manager
            <div class="icon">
               <img src="/img/search.png" alt="검색">
               <img src="/img/person.png" alt="친구">
               <img src="/img/chat.png" alt="대화">
               <img src="/img/notice.png" alt="알림">
            </div>
        </header>
        <section class="content">
            <nav>
                <?php
                echo file_get_contents('nav.txt')

                ?>
            </nav>
            <main>
              <?php
              if( empty($_GET['id']) == false ) {
                echo file_get_contents($_GET['id'].".txt");
              } else {
                echo file_get_contents('index.txt');
              }

              ?>
              <!-- <img src="https://openclipart.org/image/2400px/svg_to_png/222252/feels.png" alt="sad frog" width="200px"><br>
                <br> -->


            </main>
            <aside>
                <div class="additional">
                  <!-- <a href="http://localhost/index.php?id=conference" class="btn grey">회의</a> -->
                  <input class="btn grey" type="button" value="회의실" onclick="location.href='http://localhost/index.php?id=conference' "><br>
                  <input class="btn grey" type="button" value="부가기능" onclick="alert('서비스 준비중 입니다.')"><br> <br>
                </div>


                <div id="disqus_thread">
                <script>
                /**
                *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                /*
                var disqus_config = function () {
                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                };
                */
                (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = '//banpo-bridge.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
                })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                </div>
                <div class="additional">
                  <input class="btn grey" type="button" value="완료" onclick="confirm('프로젝트를 완료 하시겠습니까?')"><br> <br>

                </div>

            </aside>
        </section>
        <footer id="foot">
           Copyright 'Banpo-of-bridge' Communications. All rights reserved.
           <!-- <a href="https://github.com/gyu-young/Bridge-of-Banpo.git"    target="_blank">Bridge of Banpo</a> -->
        </footer>
    </div>
</body>
</html>
