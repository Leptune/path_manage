#!/bin/bash

cd ~
rm -rf .path_manage_leptune
git clone https://github.com/Leptune/path_manage.git .path_manage_leptune --depth=1
cd .path_manage_leptune
cat .bashrc >> ~/.bashrc
source ~/.bashrc 
echo 'success~ enjoy it~~'
