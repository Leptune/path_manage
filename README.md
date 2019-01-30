# Linux路径管理系统
>- 类似pm命令
>- 简单、精简、高效、实用~
>- 只要安装php就可以使用

# 一键安装（请先确保php有安装）
```
# 如果没有安装php，centos用户请运行下面命令：
# sudo yum install php
# ubuntu用户
# sudo apt-get install php

curl https://raw.githubusercontent.com/Leptune/path_manage/master/install.sh | sh && source ~/.bashrc

```

# 一键卸载
```
rm -rf ~/.path_manage_leptune

# 编辑~/.bashrc, 把【source ~/.path_manage_leptune/.bashrc】删掉，然后重新登录即可

```

# 命令列表
>- `pmh`     : 显示帮助信息
>- `pml`     : 别名对应的实际路径列表
>- `pma 别名`: 将当前路径添加到别名
>- `pmg 别名`: 跳转到别名所对应的路径
>- `pmd 别名`: 删除该别名
>- `pmr 旧别名 新别名`: 重命名
