ssh cs17d36@192.168.0.30
ls
exit
rsync -avzh abc.txt cs17d42@192.168.0.30:
scp cs17d36@192.168.0.30:~/abc.txt ./
ls
exit