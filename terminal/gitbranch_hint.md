# creating a color tinted terminal for git
# this should replace certain lines inside bashrc or profile.

''' bash
# Colors
BLACK="\[\033[0;30m\]"
BLACKBOLD="\[\033[1;30m\]"
RED="\[\033[0;31m\]"
REDBOLD="\[\033[1;31m\]"
GREEN="\[\033[0;32m\]"
GREENBOLD="\[\033[1;32m\]"
YELLOW="\[\033[0;33m\]"
YELLOWBOLD="\[\033[1;33m\]"
BLUE="\[\033[0;34m\]"
BLUEBOLD="\[\033[1;34m\]"
PURPLE="\[\033[0;35m\]"
PURPLEBOLD="\[\033[1;35m\]"
CYAN="\[\033[0;36m\]"
CYANBOLD="\[\033[1;36m\]"
WHITE="\[\033[0;37m\]"
WHITEBOLD="\[\033[1;37m\]"

# Export
export RED REDBOLD BLUE BLUEBOLD GREEN GREENBOLD YELLOW YELLOWBOLD WHITE

BASE=$WHITE
# USER=$GREEN
HOST=$WHITE
#ROOT=$RED

if [ -n "$force_color_prompt" ]; then
    if [ -x /usr/bin/tput ] && tput setaf 1 >&/dev/null; then
        # We have color support; assume it's compliant with Ecma-48
        # (ISO/IEC-6429). (Lack of such support is extremely rare, and such
        # a case would tend to support setf rather than setaf.)
        color_prompt=yes
        force_color_prompt=yes
    else
        color_prompt=
    fi
fi

parse_git_branch() {
 git branch 2> /dev/null | sed -e '/^[^*]/d' -e 's/* .∗.*.∗/(\1)/'
}

if [ "$color_prompt" = yes ]; then
        PS1="\n$BLACKBOLD[$BASE\t$BLACKBOLD][$GREEN\u$BLACKBOLD][$WHITE\h$BLACKBOLD]$BASE \w$BLUE\$(parse_git_branch)\[\033[00m\] $BLACKBOLD$ $BASE"
else
        PS1="\n$BLACKBOLD[$BASE\t$BLACKBOLD][$RED\u$BLACKBOLD][$WHITE\h$BLACKBOLD]$BASE \w$BLUE\$(parse_git_branch)\[\033[00m\] $BLACKBOLD$ $BASE"
fi
unset color_prompt force_color_prompt
'''
