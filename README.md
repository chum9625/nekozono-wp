
# History

1. 2022/6/12〜 着手。同日中にWordPress化ほぼ完了。
2. パン屑リストはプラグインを利用した。（json記述済）
3. 6/13 sshでWordPress展開、ブラウザでインストール作業。
4. `6/14 リポジトリ作成。
5. developブランチを作成し、defaultブランチに設定。
6. localのテーマディレクトリのルートに.gitignore設置後、git init〜push
7. [FTP-Deploy-Action](https://github.com/SamKirkland/FTP-Deploy-Action)導入。
   1. オリジナルをForkした [actions-ftp-deploy](https://github.com/chum9625/actions-ftp-deploy)の main.yml（最新版）を使うこと。
   2. 予めxlsxにまとめておいたsecret値を設定する。
8. developブランチをmainにマージ。
9. 公開サイトデプロイ確認後、リンクアドレス等整備を進める。
   - header.php リンク修正。
   - にゃんずリンク切れ、カテゴリーID修正。
   - functions.php style.css の呼び出しURL変更。
   - static のfooter section リンク修正。 
10. トップページ（static）のWordPress記事実装。 👈今ここ

---

[<img alt="Deployed with FTP Deploy Action" src="https://img.shields.io/badge/Deployed With-FTP DEPLOY ACTION-%3CCOLOR%3E?style=for-the-badge&color=0077b6">](https://github.com/SamKirkland/FTP-Deploy-Action)
