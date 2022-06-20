
# History

1. 2022/6/12〜WordPress化着手。同日中にほぼ完了。【↓2022.6.12↓】
2. パン屑リストはプラグインを利用。（json記述済）
3. sshでWordPress展開、ブラウザでインストール作業。【↓2022.6.13↓】
4. リポジトリ作成。【↓2022.6.14↓】
5. developブランチを作成し、defaultブランチに設定。
6. localのテーマディレクトリのルートに.gitignore設置後、git init〜push
7. [FTP-Deploy-Action](https://github.com/SamKirkland/FTP-Deploy-Action)導入。
   - Forkした [actions-ftp-deploy](https://github.com/chum9625/actions-ftp-deploy)の **main.yml（最新版）**を使うこと。
   - 予めxlsxにまとめておいたsecret値を設定する。
8. developブランチをmainにマージ。
9. 公開サイトデプロイ確認後、リンクアドレス等整備を進める。
   - header.php リンク修正。
   - にゃんずリンク切れ、カテゴリーID修正。
   - functions.php style.css の呼び出しURL変更。
   - static側のfooter section リンク修正。 
   - header リンク修正【↓2022.6.15↓】
   - カテゴリー記事一覧テンプレート追加
   - phpページに直読み対策を施す
   - ダッシュボードでサイトアイコン設定（外観→カスタマイズ→サイト基本情報）【↓2022.6.16↓】
   - index用titleを変更
10. トップページ（static）のWordPress記事実装。
    - ~static側のindexにwordpressタグ導入~
    - WP REST API に変更。実装＆レイアウト完了。【↓2022.6.19↓】 
11. APIレスポンスを変更。カテゴリ名取得関数をfunctions.phpに追記。
12. サニタイズ・コーディング規約処理 👈 今ココ【↓2022.6.20↓】

---

[<img alt="Deployed with FTP Deploy Action" src="https://img.shields.io/badge/Deployed With-FTP DEPLOY ACTION-%3CCOLOR%3E?style=for-the-badge&color=0077b6">](https://github.com/SamKirkland/FTP-Deploy-Action)
