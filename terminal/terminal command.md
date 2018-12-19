| 指令內容                                   | 指令說明                               |
| -------------------------------------- | ---------------------------------- |
| cd                                     | 
| sudo su                                | 使用root權限                           |
| sudo apt-get install [package_name]    | 安裝軟體或是特定封包                         |
| sudo apt-get update                    | 更新                                 |
| sudo apt-get upgrade                   | 升級                                 |
| sudo remove [package_name]             | 移除軟體或封包                            |
| sudo autoremove                        | 移除軟體不再使用的封包                        |
| sudo -u [user_name][command]           | 使用特定使用者的權限執行後續指令                   |
| rm                                     | 刪除檔案                               |
| rmdir                                  | 刪除資料夾                              |
| mkdir                                  | 創建資料夾                              |
| ll                                     | 條列式資料夾內容                           |
| &&                                     | 連結兩個不同的指令接連執行                      |
| nmap [ip/domain_name]                  | 查詢特定網址或ip開放的port相關資訊，包含https各種加密規格 |
| ifconfig -a                            | 網卡資訊                               |
| ctrl + c                               | 停止執行中的動作                           |
| fg                                     | 跳至前景執行中的應用程式                       |
| bg                                     | 跳至背景執行中的應用程式                       |
| chown                                  | 改變權限所有人 個人 跟 群組                    |
| chmod                                  | 改變權限控制 read, write, execute        |
| cp                                     | 複製                                 |
| mv                                     | 移動或是改寫檔名                           |
| df -h                                  | 查詢磁區大小；-h 顯示人可辨識之單位，kb, mb, gb等    |
| du -sh /foldername                     | 目標資料夾的大小                           |
| du -max-depth=1 /foldername            | 目標資料夾下第一子目錄層的所有資料夾與檔案大小            |
| shopt -s dotglob                       | 讓＊包含所有隱藏檔                          |
| shopt -u dotglob                       | ＊號不包含隱藏檔                           |
| tar -czvf [foldername.tar.gz] [folder] | 壓縮資料夾/檔案                           |
| tar -xzvf [foldername.tar.gz]          | 解壓縮檔案                              |
