<?php

if (is_session_started()) 
{
	header('Location: Accueil');
}

session_start();
header('Location: Connexion');