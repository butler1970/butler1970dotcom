#!/bin/bash

curl -X GET -H 'Content-Type: application/json' -H "Authorization: Bearer $1" "https://api.internettools.app/api/lead/find/1"
