#!/bin/bash
#
mkdir -p setup/vg_recipes/cookbooks setup/vg_recipes/roles setup/vg_recipes/data_bags

cd setup/vg_recipes/cookbooks

REPOS=(
	"https://github.com/opscode-cookbooks/apt.git"
	"https://github.com/opscode-cookbooks/build-essential.git"
	"https://github.com/fnichol/chef-user.git"
	"https://github.com/opscode-cookbooks/openssh.git"
	"https://github.com/dcrosta/cookbook-simple-iptables.git"
	"https://github.com/opscode-cookbooks/imagemagick.git"
	"https://github.com/opscode-cookbooks/sudo.git"
	"https://github.com/opscode-cookbooks/postfix.git"
	"https://github.com/opscode-cookbooks/openssl.git"
	"https://github.com/brianwebb01/mysql.git"
	"https://github.com/Indatus/apache.git"
	"https://github.com/Indatus/apache-php54.git"
	"https://github.com/escapestudios/chef-yasm.git"
	"https://github.com/enmasse-entertainment/ffmpeg-cookbook.git"
	"https://github.com/opscode-cookbooks/git.git"
	"https://github.com/opscode-cookbooks/dmg.git"
	"https://github.com/opscode-cookbooks/runit.git"
	"https://github.com/opscode-cookbooks/yum.git"
	"https://github.com/opscode-cookbooks/windows.git"
	"https://github.com/opscode-cookbooks/chef_handler.git"
	"https://github.com/enmasse-entertainment/libvpx-cookbook"
	"https://github.com/enmasse-entertainment/x264-cookbook.git"
)

if [ "$(ls -A .)" ]; then
    echo "Cookbooks exist, updating each from GIT..."
    for i in ./* ; do
	  if [ -d "$i" ]; then
	  	echo ""
	  	echo "Updating $i"
	    cd $i && git pull && cd ..
	  fi
	done
else
    echo "NO cookbooks, fetching them from GIT..."
    for i in "${REPOS[@]}"
	do
		git clone $i
	done
	mv chef-yasm yasm
	mv ffmpeg-cookbook ffmpeg
	mv libvpx-cookbook libvpx
	mv x264-cookbook x264
fi
