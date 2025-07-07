#!/bin/sh

if [ "$#" -ne 1 ]; then
  exit 1
fi

url=$(curl -sI "$1" | grep -i '^Location:' | cut -d' ' -f2)
echo $url;
