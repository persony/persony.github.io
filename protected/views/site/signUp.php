<?php
Yii::app()->clientScript->registerCssFile('/css/sign-up.css');
?>

<!-- Sign In Option 1 -->
<div id="sign_up1">
    <div class="container">
        <div class="row">
            <div class="span12 header">
                <h4>Створи свій акаунт</h4>
                <p>
                    Ви можете зайти через акаунт соціальної мережі</p>

                <div class="span5 social">
                    <a href="#" class="circle facebook">
                        <img src="/img/face.png" alt="" />
                    </a>
                    <a href="#" class="circle twitter">
                        <img src="/img/twt.png" alt="" />
                    </a>
                    <a href="#" class="circle vkk">
                        <img src="/img/vkk.png" alt="" />
                    </a>
                    <a href="#" class="circle gplus">
                        <img src="/img/gplus.png" alt="" />
                    </a>

                </div>
            </div>

            <div class="span3 division">
                <div class="line l"></div>
                <span>або</span>
                <div class="line r"></div>
            </div>

            <div class="span12 footer">
                <form />
                <input type="text" placeholder="Електронная пошта" />
                <input type="password" placeholder="Пароль" />
                <input type="password" placeholder="Підтвердіть пароль" />
                <input type="submit" placeholder="Confirm Password" value="Вхід" />
                </form>
            </div>

            <!-- <div class="span5 remember">
                <label class="checkbox">
                    <input type="checkbox"> Remember me
                </label>
                <a href="#">Forgot password?</a>
            </div> -->

            <div class="span12 dosnt">
                <span>Ви вже маєте акаунт?</span>
                <a href="/sign-in/">Вхід</a>
            </div>
        </div>
    </div>
</div>