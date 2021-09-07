<div class="bg-form">
    <div class="container">
        <section class="contacts">
            <form action="#" name="contact__form" method="POST" class="contact_form">
                <h2 class="contact_title">Задавайте ваши вопросы!</h2>

                <div class="flex-container">
                    <label for="contactName">
                        <span class="sr-only"> Поля для имени </span>
                        <input type="text" class="contact__name" id="contactName" name="name" value="" placeholder="Ваше имя" required>
                        <span class="required">*</span>
                    </label>

                    <label for="contactPhone">
                        <span class="sr-only">Поля для телефонного номера</span>
                        <input type="tel" class="contact__phone" id="contactPhone" name="phone" value="" placeholder="Номер телефона">
                    </label>

                    <label for="contactEmail">
                        <span class="sr-only">Поля для электронная почты</span>
                        <input type="email" class="contact__email" id="contactEmail" name="email" value="" placeholder="E-mail" required>
                        <span class="required">*</span>
                    </label>

                    <label for="contactTitle">
                        <span class="sr-only">Поля для заголовка вопроса</span>
                        <input type="text" class="contact__title" id="contactTitle" name="title" value="" placeholder="Введите вопрос" required>
                        <span class="required">*</span>
                    </label>
                </div>

                <div class="flex-container-submit">
                    <label for="contactText">
                        <span class="sr-only">Поля для сообщение</span>
                        <textarea class="contact__text" id="contactText" name="text" placeholder="Ваше сообщение" required></textarea>
                        <span class="required">*</span>
                    </label>


                    <label for="contactSubmit">
                        <span class="sr-only">Кнопка отправить</span>
                        <button type="submit" class="contact__submit"></button>
                        <button type="submit" class="contact__submit_text">Отправить</button>
                    </label>
                </div>

                <label class="checkbox-label">
                    <input type="checkbox" class="contact__checkbox checkbox" name="agreement[]" value="info_processing" id="contactCheckBox" required>
                    <span class="checkbox__style"></span>
                    <span>Я согласен на обработку моих персональных данных</span>

                    <span class="required">*</span>
                </label>
                <label class="checkbox-label">
                    <input type="checkbox" class="contact__checkbox checkbox" name="agreement[]" value="security_policy" id="contactCheckBox" required>
                    <span class="checkbox__style"></span>
                    <span>Я согласен с политикой конфиденциальности</span>
                    <span class="required">*</span>
                </label>
                </fieldset>
            </form>
        </section>
    </div>
    <div class="gap"></div>

    <div class="container">
        <?php
        global $logo_id, $logo_img, $logo_webp;
        ?>
        <footer class="flex-footer">
            <a href="#!" class="img">
                <picture>
                    <source srcset="<?php echo $logo_webp ?>" type="image/webp"><img src="<?php echo $logo_img ?>" alt="">
                </picture>
            </a>
            <div class="rights">2020 © Все права защищены</div>
            <div class="phone">
                <picture>
                    <source srcset="img/phone_icon_b.webp" type="image/webp"><img class="phone__img" src="img/phone_icon_b.png" alt="">
                </picture>
                <div class="phone__number">+38(097)788-61-74</div>
            </div>
        </footer>
    </div>

</div>
</div>

<?php wp_footer(); ?>
</body>


</html>