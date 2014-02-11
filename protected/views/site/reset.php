<?php
Yii::app()->clientScript->registerCssFile('/css/reset.css');
?>

<div id="reset_pwd" class="reset_page">
    <div class="container">
        <div class="row">
            <div class="span12 box_wrapper">
                <div class="span12 box">
                    <div>
                        <div class="head">
                            <h4>Введіть адресу електронної пошти нижче, щоб отримати інструкції про те, як змінити пароль.</h4>
                            <div class="line"></div>
                        </div>
                        <div class="form">
                            <form />
                            <input type="text" placeholder="Електронная пошта" />
                            <input type="submit" class="btn" value="Змінити пароль" />
                            </form>
                        </div>
                    </div>
                </div>
                <p class="already">Знаєте пароль? <a href="/sign-in/"> Вхід</a></p>
            </div>
        </div>
    </div>
</div>