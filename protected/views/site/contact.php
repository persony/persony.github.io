<?php
Yii::app()->clientScript->registerCssFile('/css/contact.css');
?>


<div id="contact">
    <div class="container">
        <div class="section_header">
            <h3>Маєте що сказати?</h3>
        </div>
        <div class="row contact">
            <p>
                Ми з задоволенням приймемо Вас в команду дописувачів проекту. Для цього просто залиште свої контактні дані нижче</p>

            <form />
            <div class="row form">
                <div class="span6 box">
                    <input class="name" type="text" placeholder="Ім'я" />
                    <input class="mail" type="text" placeholder="Електронна пошта" />
                </div>
                <div class="span6 box box_r">
                    <textarea placeholder="Додаткова інформація при потребі..."></textarea>
                </div>
            </div>

            <div class="row submit">
                <div class="span5 box">
                    <label class="checkbox">
                        <input type="checkbox" /> Підписатись на новини
                    </label>
                </div>
                <div class="span3 right">
                    <br/>
                    <input type="submit" value="Надіслати" />
                </div>
            </div>
            </form>
        </div>
    </div>
</div>