#!/bin/bash

curl -X POST -H 'Content-Type: application/json' -H "Authorization: Bearer $1" "https://api.internettools.app/api/lead/update/1" -d '{
    "first_name": "test",
    "middle_name": "test",
    "last_name": "testy"
}'
