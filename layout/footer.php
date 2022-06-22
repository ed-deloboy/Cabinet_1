<footer class="page-footer">
    <p class="mb-0">Copyright © 2022. Все права защищены.</p>
</footer>
</div>



<!-- modals -->

<!-- edit pass -->
<div class="modal fade" id="editPassword" tabindex="-1" aria-labelledby="editPasswordLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPasswordLabel">Изменение пароля</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="container">
            <form id="editPasswordForm" action="">
                <div class="mb-3">
                    <label for="oldPassword" class="form-label">Старый пароль</label>
                    <input type="password" class="form-control" id="oldPassword" name="oldPassword">
                    <div id="emailHelp" class="form-text">Введите пароль который вы используете сейчас</div>
                </div>
                <div class="mb-3">
                    <label for="newPassword" class="form-label">Новый пароль</label>
                    <input type="password" class="form-control" id="newPassword" name="newPassword">
                    <div id="emailHelp" class="form-text">Придумайте новый пароль</div>
                </div>
                <div class="mb-3">
                    <label for="newPassword2" class="form-label">Повторите новый пароль</label>
                    <input type="password" class="form-control" id="newPassword2" name="newPassword2">
                    <div id="emailHelp" class="form-text">Повторно напишите новый пароль</div>
                </div>
            </form>
            </div>
          
            <div class="modal-footer">
                <button  type="submit" form="editPasswordForm" class="btn btn-primary">Изменить</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
            </div>
        </div>
    </div>
</div>