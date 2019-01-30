alias pma='php ~/.path_manage_leptune/add.php'
alias pmr='php ~/.path_manage_leptune/rename.php'
alias pmd='php ~/.path_manage_leptune/del.php'
alias pml='php ~/.path_manage_leptune/list.php'
function pmg() {
    p=`php  ~/.path_manage_leptune/go.php $1`
    if [[ $? == 0 ]]; then
        cd $p;
        echo 'succes!';
        pwd
    else
        echo $p;
    fi
}

