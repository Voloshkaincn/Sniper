<div class="modal"  id="recall"  tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="close__line"></span>
        <span class="close__line"></span>
      </button>
      <div class="modal-body p-0">
        <h1 class="modal-title">Замовити дзвінок</h1>
        <form id="recallForm" action="">
          <div class="col-12">
            <div class="input-hoshi">
              <input class="required" type="text" name="name">
              <label>Имя</label>
              <span class="error__mess error__required">Введіть Ваше імя</span>
            </div>
          </div>
          <div class="col-12 mb-6">
            <div class="input-hoshi">
              <input class="required" type="text" name="phone">
              <label>Телефон</label>
              <span class="error__mess error__required">Введіть Ваш телефон</span>
            </div>
          </div>
          <div class="col-6 p-0 mx-auto">
            <button class="btn__main-full">Відправити</button>
          </div>        
        </form>
      </div>
      <div id="answer" class="modal-body p-0">
        <h1 class="text-center">Ваші данні успішно відправлені!</h1>
        <h3 class="text-center">Ми зв'яжемось з Вами у найближчий час.</h3>
      </div>   
    </div>    
  </div>  
</div>