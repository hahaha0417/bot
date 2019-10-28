# bot
Line Bot 腳本檔案
 \
// ---------------------------------------------------- \
我的Line Bot 腳本檔案 \
// ---------------------------------------------------- \
將專案下載到 \
D:\ftp\bot \
也就是對應路徑為 \
D:\ftp\bot\hahaha \
並使用我的框架，裡面有完成架構規劃的Line Bot Controller \
 \
我的route是動態路由，因此如果你會的化，可以修改對應關係，我就可以吃不同的user & callback & setting \
https://hahaha0417.zapto.org:8443/api/1.0/line/bot/common/callback/ha[user]/ha[callback]/ha[setting] \
對應我資料夾的 \
user : D:\ftp\bot\hahaha \
callback : D:\ftp\bot\hahaha\line\bot\hahaha \
setting : D:\ftp\bot\hahaha\line\bot\hahaha\settings\hahaha.php \
 \
ex. \
如我的Line Bot Webhook是下面 \
https://hahaha0417.zapto.org:8443/api/1.0/line/bot/common/callback/hahaha/hahaha/hahaha \
 \
他會去找相關的設定去引入指令 \
只要照我格式去改我的 \
D:\ftp\bot\hahaha\line\bot\hahaha\commands \
的檔案 \
就可以客製化指令 \
 \
就可以做成指令 \
指令使用格式為 \
[!node][!node...]:command \
 \
ex. \
:general \
可對應這個指令檔看，可看出我的指令規則 \
D:\ftp\bot\hahaha\line\bot\hahaha\commands\hahaha_command.php \
!test:text \
!test:image \
 \
登入方法(依序輸入) \
!login \
hahaha \
hahaha \
// 登入後使用設定檔(依序輸入) \
!setting \
hehehe \
// 登入後取消設定檔(依序輸入) \
!cancel_settting \
// 登出 \
!logout 
