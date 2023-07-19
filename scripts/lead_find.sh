#!/bin/bash

curl -X GET -H 'Content-Type: application/json' -H "Authorization: Bearer $1" "http://localhost:8080/api/lead/find/1"
