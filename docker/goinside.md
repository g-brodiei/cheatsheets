# Goinside
---
A cmd tool to simplify the hassle to enter a container

Paste this inside .bashrc or .profile of home/$USER directory

```bash
# docker ezymode #
goinside(){
    docker exec -it $1 bash -c "stty cols $COLUMNS rows $LINES && bash";
}
_goinside(){
    COMPREPLY=( $(docker ps --format "{{.Names}}" -f name=$2) );
}
complete -F _goinside goinside;
export -f goinside;
