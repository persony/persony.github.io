<?php
//This is static template. All Logic is client-side (AngularJS)
/** @var CClientScript $clientScript */
$clientScript = Yii::app()->clientScript;
$clientScript->registerScriptFile('/js/angular/angular.js');
$clientScript->registerScriptFile('/js/angular/angular-resource.js');
$clientScript->registerScriptFile('/js/angular/angular-sanitize.js');
$clientScript->registerScriptFile('/js/angular/i18n/angular-locale_uk-ua.js');
$clientScript->registerScriptFile('/js/app/all.js');
$clientScript->registerCssFile('/css/blog.css');
?>

<div id="blog">
    <div class="container" ng-app="persony" ng-controller="all">
        <div class="section_header">
            <h3>Всі персони</h3>
            <input
                type="text"
                class="input-large search-query"
                placeholder="Пошук"
                ng-model="filter.search"
                ng-change="filter.exec()"
                />
        </div>
        <div id="filters_container">
            <ul id="filters">
                <li>
                    <a href="#" ng-click="sort.change('name')" ng-class="{active: sort.is('name')}">
                        За абеткою
                    </a>
                </li>
                <li class="separator">/</li>
                <li>
                    <a href="#" ng-click="sort.change('lastEvent')" ng-class="{active: sort.is('lastEvent')}">
                        За останніми подіями
                    </a>
                </li>
                <li class="separator">/</li>
                <li>
                    <a href="#" ng-click="sort.change('popularity')" ng-class="{active: sort.is('popularity')}">
                        За популярністю
                    </a>
                </li>
            </ul>
        </div>
        <!-- Post Row -->
        <div class="row post_row" ng-cloak ng-class="{lastpost_row: $last}" ng-repeat="row in rows">
            <!-- Post -->
            <div class="span4 post" ng-class="{last: $last}" ng-repeat="person in persons.slice(row*3, row*3 + 3)">
                <div class="img">
                    <a href="/kolesnichenko/">
                        <img ng-src="{{person.photo}}" alt="" />
                    </a>
                </div>
                <div class="text">
                    <h5><a href="/kolesnichenko/">{{person.name}}</a></h5>
                    <span class="date">{{person.lastEvent | date:"dd MMM. yyyy"}}</span>
                    <p ng-bind-html="person.content"></p>
                </div>
                <div class="author_box">
                    <h6>Іванов І.І.</h6>
                    <p>Журналіст</p>
                </div>
                <a class="plus_wrapper" ng-href="{{person.URLAlias}}">
                    <span>&#43;</span>
                </a>
            </div>
        </div>
    </div>
</div>