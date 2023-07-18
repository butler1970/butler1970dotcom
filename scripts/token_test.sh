#!/bin/bash

curl -X GET -H "Authorization: Bearer $1" "http://localhost:8080/api/token/test"
