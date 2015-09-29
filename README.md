functions
------

Easily using some helpers handsome.


## Functions

* `route` => `yii\helpers\Url::toRoute`
* `url` => 'yii\helpers\Url::to'
* `session` Set or get session
* `flash` => `Yii::$app->session->setFlash($type, $message[, $removeAfterAccess])`
* `cookie` Set or get cookie
* `del_cookie` delete the cookie
* `_` => `Yii::t($messsage[, $categroy = 'app'][, $params][, $language])`


## Validators

* `is_email($string[, $options])` Check string if a valid email.
* `is_url($string[, $options])` Check string if a valid url.
