SESマッチングアプリ
📝 概要

SESエンジニアと案件をマッチングするWebアプリです。
スキルシート・案件情報を登録し、条件に応じたマッチングを行うことで、効率的な案件参画を支援します。

🚀 デモ

（※後でデプロイしたURLを記載）

🛠 技術スタック
フロントエンド
Alpine.js
Blade（Laravel）
バックエンド
Laravel（PHP）
PHP-FPM
インフラ
Nginx
AWS（EC2 / S3）
Amazon Aurora（MySQL互換）
その他
Docker / docker-compose
Git / GitHub
📌 主な機能
👤 ユーザー機能
ユーザー登録 / ログイン
プロフィール編集
📄 スキルシート機能
スキル・経験年数の登録
スキル検索
💼 案件機能
案件登録 / 編集 / 削除
案件一覧表示
条件検索
🔍 マッチング機能
スキル条件による案件マッチング
マッチング結果表示
⚡ 非同期処理
Laravel Queueを使用した非同期処理
メール通知・マッチング処理のバックグラウンド実行
💡 工夫した点（アピールポイント）
N+1問題を回避するためEager Loadingを使用
インデックス設計により検索速度を改善
Queueを使用して重い処理を非同期化
Serviceクラスでビジネスロジックを分離
Dockerで開発環境を統一
🏗 アーキテクチャ
Controller：リクエスト処理
Service：ビジネスロジック
Repository：データアクセス（任意）
Model：データ操作
⚙️ 環境構築
Dockerを使用する場合
docker-compose up -d
docker-compose exec app php artisan migrate
docker-compose exec app php artisan db:seed
ローカル環境（Dockerなし）
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
🌐 インフラ構成
Nginx + PHP-FPM構成
AWS EC2上で稼働
Amazon AuroraをDBとして使用
S3にファイルアップロード
📈 今後の改善予定
メッセージ機能の追加
マッチング精度の向上
通知機能の強化
UI/UX改善
👤 作者
GitHub: https://github.com/furuyaaaa
📄 ライセンス

MIT License
