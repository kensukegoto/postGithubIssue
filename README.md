## フォームのイメージ

アップできる画像の種類は jpeg,jpg,png,gifとしています。  
アップできる画像の最大サイズは各1Mです（環境によってはもっと低くする必要があるかもしれません）。

![キャプチャ](/images/img00.jpg)

## form7-post-github-issue.php 

WordPressのform7プラグインのアクションフックを記述したもの。  
function.phpにこのファイルの記述を書けば、動くはず。
環境によっては一部使用を禁止されてるかもしれない関数を含んでいます（file_get_contents）

キャプチャにてハイライトしている部分を各々自分のgithubユーザー名、リポジトリ名などで書き換えて下さい。

  
![キャプチャ](/images/img02.jpg)  
  

## form7-template.html  

contactform7にてフォームを作成する際の記述です。
キャプチャの編集エリアにここの記述を貼り付けて下さい。
フォームのパーツで使用している name 等を変更すると動かなくなるので
注意して下さい。
  
![キャプチャ](/images/img01.jpg)  

