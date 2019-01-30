#!/bin/bash

cd ~
rm -rf .path_manage_leptune
git clone https://github.com/Leptune/path_manage.git .path_manage_leptune --depth=1
cd .path_manage_leptune
echo 'source ~/.path_manage_leptune/bashrc' >> ~/.bashrc
source ~/.bashrc 
echo '安装成功！！欢迎使用~~'
echo '
# Linux路径管理系统~
# 命令列表
>- `pma 别名`: 将当前路径添加到别名
>- `pml`     : 别名对应的实际路径列表
>- `pmg 别名`: 跳转到别名所对应的路径
>- `pmd 别名`: 删除该别名
>- `pmr 旧别名 新别名`: 重命名
'
