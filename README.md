
# Concept

- 静的サイトとWordPressが共存するハイブリットの架空サイトのWordPress側です。
- クライアントさんの更新の負担を軽減したかったので、余計なプラグインは入れず、固定ページは文章主体に限定しました。
- テーマデザインも統一し、違和感のないように仕上げました。
- テーマ修正作業を効率的に行うため、GitHubでバージョン管理をするとともにGitHub Actionsでサーバーデプロイを自動化しました。煩雑な公開作業が数クリックで完了できて快適です。

## History

1. 2022.6.12〜 WordPress化着手。同日中にほぼ完了。
   1. パン屑リストはプラグインを利用。（json記述済）
2. 2022.6.13 sshでWordPress展開、ブラウザでインストール作業。
3. 2022.6.14 リポジトリ作成。
   1. developブランチを作成し、defaultブランチに設定。
   2. localのテーマディレクトリのルートに.gitignore設置後、git init〜push
   3. [FTP-Deploy-Action](https://github.com/SamKirkland/FTP-Deploy-Action)導入。
   4. Forkした [actions-ftp-deploy](https://github.com/chum9625/actions-ftp-deploy)の **main.yml（最新版）**を使うこと。
   5. 予めxlsxにまとめておいたsecret値を設定する。
   6. developブランチをmainにマージ。
   7. 公開サイトデプロイ確認後、リンクアドレス等整備を進める。
   8. header.php リンク修正。
   9. にゃんずリンク切れ、カテゴリーID修正。
   10. functions.php style.css の呼び出しURL変更。
   11. static側のfooter section リンク修正。 
   12. header リンク修正【↓2022.6.15↓】
   13. カテゴリー記事一覧テンプレート追加
   14. phpページに直読み対策を施す
4. 2022.6.16 ダッシュボードでサイトアイコン設定（外観→カスタマイズ→サイト基本情報
   1. index用titleを変更
   2. トップページ（static）のWordPress記事実装。
   3. ~static側のindexにwordpressタグ導入~
5. 2022.6.19 WP REST API に変更。実装＆レイアウト完了。
   1. APIレスポンスを変更。カテゴリ名取得関数をfunctions.phpに追記。
6. 2022.6.27 アイキャッチ画像未設定時の処理追加

## 必須項目

1. 2022.7.2 コーディング規約check
   1. Vscode拡張機能、phpcs、phpcbfをワークスペースでON
   2. php8ではphpcsが機能しなかったのでphp7.4にダウングレード
   3. 改行コードはCR （CRLFが混在しているので直す）
2.  サニタイズ

---
[<img alt="Deployed with FTP Deploy Action" src="https://img.shields.io/badge/Deployed With-FTP DEPLOY ACTION-%3CCOLOR%3E?style=for-the-badge&color=0077b6">](https://github.com/SamKirkland/FTP-Deploy-Action)
