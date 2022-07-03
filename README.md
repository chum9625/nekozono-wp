
# Concept

- 静的サイトとWordPressが共存するハイブリッドサイト。
- クライアントの作業負担を軽減すべく、プラグインは必要最低限にし、固定ページは文章主体に限定。
- テーマデザインを統一し、違和感のないようにする。
- メンテナンスを効率的に行うため、GitHub Actionsでサーバーデプロイを自動化。

## History

- __2022.6.12〜__ WordPress化着手。同日中にほぼ完了。
  - パン屑リストはプラグインを利用。（json記述済）
- __2022.6.13__ sshでWordPress展開、ブラウザでインストール作業。
- __2022.6.14__ リポジトリ作成。
  - developブランチを作成し、defaultブランチに設定。
  - localのテーマディレクトリのルートに.gitignore設置後、git init〜push
  - [FTP-Deploy-Action](https://github.com/SamKirkland/FTP-Deploy-Action)導入。
  - Forkした [actions-ftp-deploy](https://github.com/chum9625/actions-ftp-deploy)の *main.yml（最新版）*を使うこと。
  - 予めxlsxにまとめておいたsecret値を設定する。
  - developブランチをmainにマージ。
  - 公開サイトデプロイ確認後、リンクアドレス等整備を進める。
  - header.php リンク修正。
  - にゃんずリンク切れ、カテゴリーID修正。
  - functions.php style.css の呼び出しURL変更。
  - static側のfooter section リンク修正。 
- __2022.6.15__ header リンク修正
  - カテゴリー記事一覧テンプレート追加
  - phpページに直読み対策を施す
- __2022.6.16__ ダッシュボードでサイトアイコン設定（外観→カスタマイズ→サイト基本情報
  - index用titleを変更
  - トップページ（static）のWordPress記事実装。
  - ~static側のindexにwordpressタグ導入~
- __2022.6.19__ WP REST API に変更。実装＆レイアウト完了。
  - APIレスポンスを変更。カテゴリ名取得関数をfunctions.phpに追記。
- __2022.6.27__ アイキャッチ画像未設定時の処理追加

## 必須項目

- __2022.7.2__ コーディング規約check
  - Vscode拡張機能、phpcs、phpcbfをワークスペースでON
  - php8ではphpcsが機能しなかったのでphp7.4にダウングレード
  - 改行コードはCR （CRLFが混在しているので直す）
- __2022.7.2〜7.3__ サニタイズ、規約の則りコメント修正
  - [PHP ドキュメント規約](https://ja.wordpress.org/team/handbook/coding-standards/inline-documentation-standards/php/)

---
[<img alt="Deployed with FTP Deploy Action" src="https://img.shields.io/badge/Deployed With-FTP DEPLOY ACTION-%3CCOLOR%3E?style=for-the-badge&color=0077b6">](https://github.com/SamKirkland/FTP-Deploy-Action)
