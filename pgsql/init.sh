#!/bin/bash
set -e
psql=( psql -v ON_ERROR_STOP=1 )

# this will be used as a session mechanism for SP side saml
"${psql[@]}" --username "$POSTGRES_USER" <<-EOSQL
	CREATE DATABASE "$POSTGRES_SAML_DB" ;
  CREATE DATABASE "$POSTGRES_YII_DB" ;
	EOSQL
	echo
