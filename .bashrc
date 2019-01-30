alias pma='php ~/.path_manage/add.php'
alias pmr='php ~/.path_manage/rename.php'
alias pmd='php ~/.path_manage/del.php'
alias pml='php ~/.path_manage/list.php'
function pmg() {
    p=`php  ~/.path_manage/go.php $1`
    if [[ $? == 0 ]]; then
        cd $p;
        echo 'succes!';
        pwd
    else
        echo $p;
    fi
}

