<footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-6 ">
              <div class="pr-xl-4"><a class="brand" href="index.php"><img class="brand-logo-light" src="image/logo2.png" alt="" width="140" height="37" srcset="image/logo2.png 2x"></a>
                <p>Luôn luôn học hỏi, đổi mới từng ngày.</p>
                <!-- Rights-->
                <p class="rights"><span>©  </span><span class="copyright-year">2018</span><span> </span><span>NTTD</span><span>. </span><span>All Rights Reserved.</span></p>
              </div>
            </div>
            <div class="col-md-6">
              <h5>Liên hệ</h5>
              <dl class="contact-list">
                <dd>175 Tây Sơn, Hà Nội, Việt Nam</dd>
              </dl>
              <dl class="contact-list">
                <dd><a href="mailto:#">thanhdatnguyenthe@gmail.com</a></dd>
              </dl>
              <dl class="contact-list">
                <dd><a href="tel:#">https://github.com/ntthanhdat</a> <span>or</span> <a href="tel:#">https://facebook.com/juunirippou</a>
                </dd>
              </dl>
            </div>
          </div>
        </div>
        
      </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="lang.js"></script>
    <script>
      
      const langEl=document.querySelector('.langWrap');
        const link=document.querySelectorAll('a');
        const title=document.querySelector('.title');
        const greeting=document.querySelector('.greeting');
        link.forEach(el =>{
            el.addEventListener('click', ()=>{
                langEl.querySelector('.active').classList.remove('active');
                el.classList.add('active');
                const attr=el.getAttribute('language');
                title.textContent=data[attr].title;
                greeting.textContent=data[attr].greeting;
            });
        });
        
    </script>
  </body>
</html>