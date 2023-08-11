#!/bin/bash

curl -X POST -H 'Content-Type: application/json' "https://api.internettools.app/api/token/generate" -d "{
    \"email\": \"$1\",
    \"password\": \"$2\",
    \"token_name\": \"$3\"
}"
