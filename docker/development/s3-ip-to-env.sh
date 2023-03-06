#!/bin/sh

# This script adds or replaces the "media.s3.endpoint"
# environment variable with s3's container IP.

# Why?
# ---
# For development purposes, the s3 hostname is not accessible
# via the host machine. S3 objects must be accessed using localhost
# or the container IP.

S3_URL=$(echo http://$(dig s3 +short):9090/)

if grep -q media.s3.endpoint .env
then
    sed -i "s|media.s3.endpoint=.*|media.s3.endpoint=\"$S3_URL\"|" .env
else
    echo media.s3.endpoint="$S3_URL" >> .env
fi
