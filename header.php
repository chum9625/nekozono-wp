<?php
/**
 * Nekozono WordPress Theme
 * @author: ChumTech
 * @link: https://demo.chum9625.com/nekozono/
 */
if ( !defined( 'ABSPATH' ) ) exit; ?>

<!DOCTYPE html>
<html lang="ja data-theme=pastel">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex,nofollow">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> class="tracking-wide leading-loose">
<?php wp_body_open(); ?>

  <!-- ===== header section start ===== -->
  <header class="sticky">
    <!-- ===== nav section start ===== -->
            <div class="navbar bg-base-100">
              <div class="navbar-start">
                <div class="dropdown">
                  <label tabindex="0" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                  </label>
                  <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                    <li tabindex="0">
                      <a href="./" class="justify-between">
                        新着情報
                        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                          <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                        </svg>
                      </a>
                      <ul class="p-2 bg-slate-50">
                        <li><a href="./news">お知らせ</a></li>
                        <li><a href="./cats">にゃんず</a></li>
                        <li><a href="https://demo.chum9625.com/nekozono/#schedule">スケジュール</a></li>
                      </ul>
                    </li>
                    <li><a href="https://demo.chum9625.com/nekozono/#price">料金表</a></li>
                    <li tabindex="0">
                      <a class="justify-between" href="https://demo.chum9625.com/nekozono/#shopinfo">
                      店舗について
                      <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                      </svg>
                    </a>
                    <ul class="p-2 bg-slate-50">
                      <li><a href="https://demo.chum9625.com/nekozono/vision.html">ビジョン</a></li>
                      <li><a href="https://demo.chum9625.com/nekozono/notes.html">ご利用規約</a></li>
                      <li><a href="https://demo.chum9625.com/nekozono/lental.html">レンタルスペース</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <a href="https://demo.chum9625.com/nekozono/" class="btn btn-ghost normal-case text-xl">猫園</a>
              </div>
              <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal p-0">
                  <li tabindex="0">
                    <a href="./">
                      新着情報
                      <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                        <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
                      </svg>
                    </a>
                    <ul class="p-2 bg-slate-50">
                      <li><a href="./news">お知らせ</a></li>
                      <li><a href="./cats">にゃんず</a></li>
                      <li><a href="https://demo.chum9625.com/nekozono/#schedule">スケジュール</a></li>
                    </ul>
                  </li>
                  <li><a href="https://demo.chum9625.com/nekozono/#price">料金表</a></li>
                  <ul class="menu menu-horizontal p-0">
                    <li tabindex="0">
                    <a href="https://demo.chum9625.com/nekozono/#shopinfo">
                      店舗について
                      <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                        <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
                      </svg>
                    </a>
                    <ul class="p-2 bg-slate-50">
                      <li><a href="https://demo.chum9625.com/nekozono/vision.html">ビジョン</a></li>
                      <li><a href="https://demo.chum9625.com/nekozono/notes.html">ご利用規約</a></li>
                      <li><a href="https://demo.chum9625.com/nekozono/lental.html">レンタルスペース</a></li>
                    </ul>
                  </li>
                </li>
              </div>
              <div class="navbar-end">
                <label for="modal-contact" class="btn modal-button">お問い合わせ</label>
              </div>
            </div>
    <!-- ===== nav section end ===== -->
    </header>
    <!-- ===== header section end ===== -->
