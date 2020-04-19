# Laravel 7 歡迎通知

引入 spatie 的 laravel-welcome-notification 套件來擴增發送歡迎通知給新用戶，該通知包含指向網站的安全連結，用戶可以在其中設置初始化密碼。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/welcome/send/{使用者編號，例如：1}` 來進行歡迎通知。

----
## 畫面截圖
![](https://i.imgur.com/45ryjlP.png)
> 可以點選「設定初始密碼」來進入新用戶的密碼初始化

![](https://i.imgur.com/bsZYtqU.png)
> 為你的帳戶輸入新密碼並確認
