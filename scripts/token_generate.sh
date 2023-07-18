#!/bin/bash

curl -X POST -H 'Content-Type: application/json' "http://localhost:8080/api/token/generate?XDEBUG_SESSION_START=LARAVEL_SAIL" -d "{
    \"email\": \"$1\",
    \"password\": \"$2\",
    \"token_name\": \"$3\"
}"
