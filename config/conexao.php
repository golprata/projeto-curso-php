<?php

@$conexao = mysql_connect("localhost","root","");

mysql_select_db("buriphp");

mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_result=utf8');