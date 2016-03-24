functions
------
[![version](https://img.shields.io/packagist/v/light/functions.svg?style=flat-square)](https://packagist.org/packages/light/functions)
[![Download](https://img.shields.io/packagist/dd/light/functions.svg?style=flat-square)](https://packagist.org/packages/light/functions)

Easily using some helpers handsome.


## Functions

* `route` => `yii\helpers\Url::toRoute`
* `url` => 'yii\helpers\Url::to'
* `session` Set or get session
* `flash` => `Yii::$app->session->setFlash($type, $message[, $removeAfterAccess])`
* `cookie` Set or get cookie
* `del_cookie` delete the cookie
* `__` => `Yii::t($category, $messsage[, $params][, $language])`


## Validators

* `is_email($string[, $options])` Check string if a valid email.
* `is_url($string[, $options])` Check string if a valid url.
