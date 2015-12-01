<?php
/**
 * The shorthand funcations
 * @version 1.0.0
 */

use yii\helpers\Url;

if (!function_exists('route')) {
    /**
     * toRoute shorthands
     *
     * @param  string|array  $route
     * @param  boolean $scheme
     *
     * @return string
     * @see Url::toRoute
     */
    function route($route, $scheme = false)
    {
        return Url::toRoute($route, $scheme);
    }
}
if (!function_exists('url')) {
    /**
     * Url::to shorthands
     *
     * @param  string|array  $url
     * @param  boolean $scheme
     *
     * @return string
     * @see Url::to
     */
    function url($url, $scheme = false)
    {
        return Url::to($url, $scheme);
    }
}
if (!function_exists('session')) {
    /**
     * get or set the session
     *
     * @param  string|array $name  If presented array, will set the session
     * @param  mixed $default the default value to return
     *
     * @return mixed
     */
    function session($name = null, $default = null)
    {
        $session = \Yii::$app->getSession();
        $session->open();

        if (is_null($name)) {
            return $session;
        }

        if (is_array($name)) {
            foreach ($name as $key => $value) {
                $_SESSION[$key] = $value;
            }
            return null;
        }

        return $session->get($name, $default);
    }
}
if (!function_exists('flash')) {
    /**
     * set session flash
     *
     * @param  string $message
     * @param  string $type  flash type
     *
     * @return void
     */
    function flash($message, $type = 'success', $removeAfterAccess = true)
    {
        \Yii::$app->getSession()->setFlash($type, $message, $removeAfterAccess);
    }
}
if (!function_exists('cookie')) {
    /**
     * set or get the cookie
     *
     * @param  mixed $name if is array will set the cookie
     * @param  mixed $default
     *
     * @return mixed
     */
    function cookie($name = null, $default = null)
    {
        if (is_array($name)) {
            $cookies = \Yii::$app->getResponse()->cookies;
            return $cookies->add($name instanceof \yii\web\Cookie ? $name : new \yii\web\Cookie($name));
        }

        $cookies = \Yii::$app->getRequest()->cookies;

        return $cookies->getValue($name, $default);
    }
}
if (!function_exists('del_coookie')) {
    /**
     * delete the cookie
     *
     * @param  string  $name
     * @param  boolean $removeFromBrowser
     *
     * @return void
     */
    function del_cookie($name, $removeFromBrowser = true)
    {
        $cookies = \Yii::$app->getResponse()->cookies;
        $cookies->remove($name, $removeFromBrowser);
    }
}
if (!function_exists('__')) {
    /**
     * The i18n shorthands
     *
     * @param  string $message
     * @param  string $category
     * @param  array  $params
     * @param  mixed $language
     *
     * @return string
     */
    function __(, $category,$message, $params = [], $language = null)
    {
        return \Yii::t($category, $message, $params, $language);
    }
}
if (!function_exists('is_email')) {
    /**
     * Validate a string if an email string
     *
     * @param  string  $string
     *
     * @return boolean
     */
    function is_email($string, $options = [])
    {
        if (!isset($options['class'])) {
            $options['class'] = 'yii\validators\EmailValidator';
        }
        $validator = Yii::createObject($options);

        return $validator->validate($string);
    }
}
if (!function_exists('is_url'))
{
    /**
     * Validate the string if a valid url.
     *
     * @param  string  $string
     *
     * @return boolean
     */
    function is_url($string, $options = [])
    {
        if (!isset($options['class'])) {
            $options['class'] = 'yii\validators\UrlValidator';
        }
        $validator = Yii::createObject($options);
        return $validator->validate($string);
    }
}
