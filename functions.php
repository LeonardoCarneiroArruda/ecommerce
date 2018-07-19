<?php

use \Hcode\Model\User;

function formatPrice( $vlprice) {

	if (!$vlprice > 0) $vlprice = 0;	

	return number_format($vlprice, 2, ",", ".");
}

function checklogin($inadmin = true) {

	return User::checklogin($inadmin);
}

function getUserName() {

	$user = User::getFromSession();

	return $user->getdesperson();
}


?>